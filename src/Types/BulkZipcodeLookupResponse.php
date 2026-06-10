<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkZipcodeLookupResponse extends JsonSerializableType
{
    /**
     * @var ?array<BulkZipcodeLookupResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([BulkZipcodeLookupResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   results?: ?array<BulkZipcodeLookupResponseResultsItem>,
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
