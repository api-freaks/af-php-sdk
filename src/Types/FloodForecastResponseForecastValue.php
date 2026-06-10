<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class FloodForecastResponseForecastValue extends JsonSerializableType
{
    /**
     * @var ?FloodForecastResponseForecastValueDaily $daily Daily flood forecast data for the date.
     */
    #[JsonProperty('daily')]
    public ?FloodForecastResponseForecastValueDaily $daily;

    /**
     * @param array{
     *   daily?: ?FloodForecastResponseForecastValueDaily,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->daily = $values['daily'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
