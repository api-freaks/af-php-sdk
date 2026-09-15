<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeDistanceResponse extends JsonSerializableType
{
    /**
     * @var ?string $resultsCount Number of distance results returned
     */
    #[JsonProperty('results_count')]
    public ?string $resultsCount;

    /**
     * @var ?array<ZipcodeDistanceResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([ZipcodeDistanceResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   resultsCount?: ?string,
     *   results?: ?array<ZipcodeDistanceResponseResultsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->resultsCount = $values['resultsCount'] ?? null;
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
