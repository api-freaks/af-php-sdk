<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class EmailValidateResponseDns extends JsonSerializableType
{
    /**
     * @var array<string> $mxRecords
     */
    #[JsonProperty('mxRecords'), ArrayType(['string'])]
    public array $mxRecords;

    /**
     * @var ?array<string> $aRecords Collection of A (Address) records for the domain.
     */
    #[JsonProperty('aRecords'), ArrayType(['string'])]
    public ?array $aRecords;

    /**
     * @param array{
     *   mxRecords: array<string>,
     *   aRecords?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->mxRecords = $values['mxRecords'];
        $this->aRecords = $values['aRecords'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
