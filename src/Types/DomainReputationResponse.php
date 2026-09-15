<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Full domain reputation assessment response.
 */
class DomainReputationResponse extends JsonSerializableType
{
    /**
     * @var DomainReputationResponseInput $input Input object containing the analyzed domain.
     */
    #[JsonProperty('input')]
    public DomainReputationResponseInput $input;

    /**
     * @var string $assessedAt Timestamp when the assessment was performed (YYYY-MM-DDTHH:mm:ssZ).
     */
    #[JsonProperty('assessed_at')]
    public string $assessedAt;

    /**
     * @var string $version API / response schema version.
     */
    #[JsonProperty('version')]
    public string $version;

    /**
     * @var int $processingTimeMs Time taken to process the request, in milliseconds.
     */
    #[JsonProperty('processing_time_ms')]
    public int $processingTimeMs;

    /**
     * @var DomainReputationResponseRiskCategory $riskCategory Overall risk assessment for the domain.
     */
    #[JsonProperty('risk_category')]
    public DomainReputationResponseRiskCategory $riskCategory;

    /**
     * @var DomainReputationResponseDgaScore $dgaScore Domain Generation Algorithm (DGA) detection results.
     */
    #[JsonProperty('dga_score')]
    public DomainReputationResponseDgaScore $dgaScore;

    /**
     * @var DomainReputationResponseTrustSignals $trustSignals Trust scoring and supporting signals for the domain.
     */
    #[JsonProperty('trust_signals')]
    public DomainReputationResponseTrustSignals $trustSignals;

    /**
     * @var DomainReputationResponseEmailDeliverability $emailDeliverability Assessment of the domain's ability to send and receive email reliably.
     */
    #[JsonProperty('email_deliverability')]
    public DomainReputationResponseEmailDeliverability $emailDeliverability;

    /**
     * @var DomainReputationResponseIntelligence $intelligence Threat intelligence details for the indicator of compromise (IOC).
     */
    #[JsonProperty('intelligence')]
    public DomainReputationResponseIntelligence $intelligence;

    /**
     * @var DomainReputationResponseEvidenceSummary $evidenceSummary Summary of reasons behind the risk assessment.
     */
    #[JsonProperty('evidence_summary')]
    public DomainReputationResponseEvidenceSummary $evidenceSummary;

    /**
     * @var array<string> $errors List of errors encountered during processing, if any (e.g. "WHOIS lookup failed"). An empty array means every signal resolved.
     */
    #[JsonProperty('errors'), ArrayType(['string'])]
    public array $errors;

    /**
     * @param array{
     *   input: DomainReputationResponseInput,
     *   assessedAt: string,
     *   version: string,
     *   processingTimeMs: int,
     *   riskCategory: DomainReputationResponseRiskCategory,
     *   dgaScore: DomainReputationResponseDgaScore,
     *   trustSignals: DomainReputationResponseTrustSignals,
     *   emailDeliverability: DomainReputationResponseEmailDeliverability,
     *   intelligence: DomainReputationResponseIntelligence,
     *   evidenceSummary: DomainReputationResponseEvidenceSummary,
     *   errors: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->input = $values['input'];
        $this->assessedAt = $values['assessedAt'];
        $this->version = $values['version'];
        $this->processingTimeMs = $values['processingTimeMs'];
        $this->riskCategory = $values['riskCategory'];
        $this->dgaScore = $values['dgaScore'];
        $this->trustSignals = $values['trustSignals'];
        $this->emailDeliverability = $values['emailDeliverability'];
        $this->intelligence = $values['intelligence'];
        $this->evidenceSummary = $values['evidenceSummary'];
        $this->errors = $values['errors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
