<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeDistanceMatchResponse extends JsonSerializableType
{
    /**
     * @var ?string $resultsCount Number of matching ZIP/postal code pairs returned
     */
    #[JsonProperty('results_count')]
    public ?string $resultsCount;

    /**
     * @var ?array<ZipcodeDistanceMatchResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([ZipcodeDistanceMatchResponseResultsItem::class])]
    public ?array $results;

    /**
     * @param array{
     *   resultsCount?: ?string,
     *   results?: ?array<ZipcodeDistanceMatchResponseResultsItem>,
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
