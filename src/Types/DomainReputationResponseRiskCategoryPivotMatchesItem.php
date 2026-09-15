<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A related pivot linked to known threats.
 */
class DomainReputationResponseRiskCategoryPivotMatchesItem extends JsonSerializableType
{
    /**
     * @var string $pivot Pivot value (e.g. a nameserver or email address).
     */
    #[JsonProperty('pivot')]
    public string $pivot;

    /**
     * @var string $pivotType Type of pivot.
     */
    #[JsonProperty('pivot_type')]
    public string $pivotType;

    /**
     * @var int $totalRelatedThreats Total number of threats related to this pivot.
     */
    #[JsonProperty('total_related_threats')]
    public int $totalRelatedThreats;

    /**
     * @var float $confidence Confidence score for the pivot match (0-1).
     */
    #[JsonProperty('confidence')]
    public float $confidence;

    /**
     * @param array{
     *   pivot: string,
     *   pivotType: string,
     *   totalRelatedThreats: int,
     *   confidence: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pivot = $values['pivot'];
        $this->pivotType = $values['pivotType'];
        $this->totalRelatedThreats = $values['totalRelatedThreats'];
        $this->confidence = $values['confidence'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
