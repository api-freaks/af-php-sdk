<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Overall risk assessment for the domain.
 */
class DomainReputationResponseRiskCategory extends JsonSerializableType
{
    /**
     * @var value-of<DomainReputationResponseRiskCategoryVerdict> $verdict Final verdict of the risk assessment.
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var float $confidence Confidence score for the verdict (0-1).
     */
    #[JsonProperty('confidence')]
    public float $confidence;

    /**
     * @var ?string $primaryThreat Main threat type identified (e.g. phishing). null when no threat was identified.
     */
    #[JsonProperty('primary_threat')]
    public ?string $primaryThreat;

    /**
     * @var value-of<DomainReputationResponseRiskCategorySeverity> $severity Severity level of the risk.
     */
    #[JsonProperty('severity')]
    public string $severity;

    /**
     * @var array<string> $threatTypes List of threat types associated with the domain.
     */
    #[JsonProperty('threat_types'), ArrayType(['string'])]
    public array $threatTypes;

    /**
     * @var array<DomainReputationResponseRiskCategorySourcesItem> $sources Threat intelligence sources that flagged the domain. Empty when nothing flagged it.
     */
    #[JsonProperty('sources'), ArrayType([DomainReputationResponseRiskCategorySourcesItem::class])]
    public array $sources;

    /**
     * @var array<DomainReputationResponseRiskCategoryPivotMatchesItem> $pivotMatches Related pivots (nameserver, email, etc.) linked to known threats.
     */
    #[JsonProperty('pivot_matches'), ArrayType([DomainReputationResponseRiskCategoryPivotMatchesItem::class])]
    public array $pivotMatches;

    /**
     * @param array{
     *   verdict: value-of<DomainReputationResponseRiskCategoryVerdict>,
     *   confidence: float,
     *   severity: value-of<DomainReputationResponseRiskCategorySeverity>,
     *   threatTypes: array<string>,
     *   sources: array<DomainReputationResponseRiskCategorySourcesItem>,
     *   pivotMatches: array<DomainReputationResponseRiskCategoryPivotMatchesItem>,
     *   primaryThreat?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->verdict = $values['verdict'];
        $this->confidence = $values['confidence'];
        $this->primaryThreat = $values['primaryThreat'] ?? null;
        $this->severity = $values['severity'];
        $this->threatTypes = $values['threatTypes'];
        $this->sources = $values['sources'];
        $this->pivotMatches = $values['pivotMatches'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
