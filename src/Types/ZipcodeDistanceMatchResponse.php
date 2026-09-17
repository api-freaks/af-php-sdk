<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeDistanceMatchResponse extends JsonSerializableType
{
    /**
     * @var ?int $resultCount Number of matching ZIP/postal code pairs returned. Zero when no pairs fall within the threshold.
     */
    #[JsonProperty('result_count')]
    public ?int $resultCount;

    /**
     * @var ?array<ZipcodeDistanceMatchResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([ZipcodeDistanceMatchResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   resultCount?: ?int,
     *   results?: ?array<ZipcodeDistanceMatchResponseResultsItem>,
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
