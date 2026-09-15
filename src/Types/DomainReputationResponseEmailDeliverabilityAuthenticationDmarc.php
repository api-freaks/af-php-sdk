<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Domain-based Message Authentication, Reporting and Conformance configuration.
 */
class DomainReputationResponseEmailDeliverabilityAuthenticationDmarc extends JsonSerializableType
{
    /**
     * @var bool $present Indicates whether a DMARC record was found.
     */
    #[JsonProperty('present')]
    public bool $present;

    /**
     * @var string $policy DMARC enforcement policy applied to failing messages (e.g. none, quarantine, reject).
     */
    #[JsonProperty('policy')]
    public string $policy;

    /**
     * @var bool $reportingConfigured Indicates whether DMARC aggregate / forensic reporting addresses are configured.
     */
    #[JsonProperty('reporting_configured')]
    public bool $reportingConfigured;

    /**
     * @param array{
     *   present: bool,
     *   policy: string,
     *   reportingConfigured: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->present = $values['present'];
        $this->policy = $values['policy'];
        $this->reportingConfigured = $values['reportingConfigured'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
