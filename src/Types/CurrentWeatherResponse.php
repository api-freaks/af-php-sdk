<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class CurrentWeatherResponse extends JsonSerializableType
{
    /**
     * @var (
     *    CurrentWeatherResponseLocationContinentCode
     *   |CurrentWeatherResponseLocationCity
     *   |CurrentWeatherResponseLocationZero
     * ) $location Location information
     */
    #[JsonProperty('location'), Union(CurrentWeatherResponseLocationContinentCode::class, CurrentWeatherResponseLocationCity::class, CurrentWeatherResponseLocationZero::class)]
    public CurrentWeatherResponseLocationContinentCode|CurrentWeatherResponseLocationCity|CurrentWeatherResponseLocationZero $location;

    /**
     * @var CurrentWeatherResponseCurrent $current Current weather data
     */
    #[JsonProperty('current')]
    public CurrentWeatherResponseCurrent $current;

    /**
     * @param array{
     *   location: (
     *    CurrentWeatherResponseLocationContinentCode
     *   |CurrentWeatherResponseLocationCity
     *   |CurrentWeatherResponseLocationZero
     * ),
     *   current: CurrentWeatherResponseCurrent,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->location = $values['location'];
        $this->current = $values['current'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
