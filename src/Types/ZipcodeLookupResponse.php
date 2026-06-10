<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeLookupResponse extends JsonSerializableType
{
    /**
     * @var ?array<ZipcodeLookupResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([ZipcodeLookupResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   results?: ?array<ZipcodeLookupResponseResultsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->results = $values['results'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
