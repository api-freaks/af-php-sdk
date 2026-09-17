<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeDistanceResponse extends JsonSerializableType
{
    /**
     * @var ?int $resultCount Number of distance results returned (may be less than the number of requested compare codes).
     */
    #[JsonProperty('result_count')]
    public ?int $resultCount;

    /**
     * @var ?array<ZipcodeDistanceResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([ZipcodeDistanceResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   resultCount?: ?int,
     *   results?: ?array<ZipcodeDistanceResponseResultsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->resultCount = $values['resultCount'] ?? null;
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
