<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetSubregionsResponse extends JsonSerializableType
{
    /**
     * @var ?array<string> $subregions
     */
    #[JsonProperty('subregions'), ArrayType(['string'])]
    public ?array $subregions;

    /**
     * @param array{
     *   subregions?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->subregions = $values['subregions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
