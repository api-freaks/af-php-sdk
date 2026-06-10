<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;
use Apifreaks\Core\Types\ArrayType;

class FloodForecastResponse extends JsonSerializableType
{
    /**
     * @var (
     *    FloodForecastResponseLocationZero
     *   |FloodForecastResponseLocationContinentCode
     *   |FloodForecastResponseLocationCity
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(FloodForecastResponseLocationZero::class, FloodForecastResponseLocationContinentCode::class, FloodForecastResponseLocationCity::class, 'null')]
    public FloodForecastResponseLocationZero|FloodForecastResponseLocationContinentCode|FloodForecastResponseLocationCity|null $location;

    /**
     * @var ?array<string, FloodForecastResponseForecastValue> $forecast Flood forecast data object
     */
    #[JsonProperty('forecast'), ArrayType(['string' => FloodForecastResponseForecastValue::class])]
    public ?array $forecast;

    /**
     * @param array{
     *   location?: (
     *    FloodForecastResponseLocationZero
     *   |FloodForecastResponseLocationContinentCode
     *   |FloodForecastResponseLocationCity
     * )|null,
     *   forecast?: ?array<string, FloodForecastResponseForecastValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->location = $values['location'] ?? null;
        $this->forecast = $values['forecast'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
