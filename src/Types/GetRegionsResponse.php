<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetRegionsResponse extends JsonSerializableType
{
    /**
     * @var ?array<string> $regions
     */
    #[JsonProperty('regions'), ArrayType(['string'])]
    public ?array $regions;

    /**
     * @param array{
     *   regions?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->regions = $values['regions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
