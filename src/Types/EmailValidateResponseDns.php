<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class EmailValidateResponseDns extends JsonSerializableType
{
    /**
     * @var array<string> $mxRecord
     */
    #[JsonProperty('mxRecord'), ArrayType(['string'])]
    public array $mxRecord;

    /**
     * @var ?array<string> $aRecord Collection of A (Address) records for the domain.
     */
    #[JsonProperty('aRecord'), ArrayType(['string'])]
    public ?array $aRecord;

    /**
     * @param array{
     *   mxRecord: array<string>,
     *   aRecord?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->mxRecord = $values['mxRecord'];
        $this->aRecord = $values['aRecord'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
