<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Mail server infrastructure backing the domain.
 */
class DomainReputationResponseEmailDeliverabilityInfrastructure extends JsonSerializableType
{
    /**
     * @var int $mxCount Number of MX records found for the domain.
     */
    #[JsonProperty('mx_count')]
    public int $mxCount;

    /**
     * @var array<string> $mxRecords List of mail exchange server hostnames for the domain.
     */
    #[JsonProperty('mx_records'), ArrayType(['string'])]
    public array $mxRecords;

    /**
     * @var string $mxProvider Email hosting provider inferred from the MX records.
     */
    #[JsonProperty('mx_provider')]
    public string $mxProvider;

    /**
     * @var bool $nullMx Indicates whether the domain explicitly declines email via a null MX record.
     */
    #[JsonProperty('null_mx')]
    public bool $nullMx;

    /**
     * @param array{
     *   mxCount: int,
     *   mxRecords: array<string>,
     *   mxProvider: string,
     *   nullMx: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->mxCount = $values['mxCount'];
        $this->mxRecords = $values['mxRecords'];
        $this->mxProvider = $values['mxProvider'];
        $this->nullMx = $values['nullMx'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
