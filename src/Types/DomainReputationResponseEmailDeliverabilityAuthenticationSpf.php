<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Sender Policy Framework configuration.
 */
class DomainReputationResponseEmailDeliverabilityAuthenticationSpf extends JsonSerializableType
{
    /**
     * @var bool $present Indicates whether an SPF record was found.
     */
    #[JsonProperty('present')]
    public bool $present;

    /**
     * @var string $policy SPF enforcement policy qualifier found in the record (e.g. ~all, -all).
     */
    #[JsonProperty('policy')]
    public string $policy;

    /**
     * @var string $record Raw SPF DNS TXT record string.
     */
    #[JsonProperty('record')]
    public string $record;

    /**
     * @param array{
     *   present: bool,
     *   policy: string,
     *   record: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->present = $values['present'];
        $this->policy = $values['policy'];
        $this->record = $values['record'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
