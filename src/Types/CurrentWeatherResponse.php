<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class CurrentWeatherResponse extends JsonSerializableType
{
    /**
     * @var (
     *    CurrentWeatherResponseLocationZero
     *   |CurrentWeatherResponseLocationContinentCode
     *   |CurrentWeatherResponseLocationCity
     * ) $location Location information
     */
    #[JsonProperty('location'), Union(CurrentWeatherResponseLocationZero::class, CurrentWeatherResponseLocationContinentCode::class, CurrentWeatherResponseLocationCity::class)]
    public CurrentWeatherResponseLocationZero|CurrentWeatherResponseLocationContinentCode|CurrentWeatherResponseLocationCity $location;

    /**
     * @var CurrentWeatherResponseCurrent $current Current weather data
     */
    #[JsonProperty('current')]
    public CurrentWeatherResponseCurrent $current;

    /**
     * @param array{
     *   location: (
     *    CurrentWeatherResponseLocationZero
     *   |CurrentWeatherResponseLocationContinentCode
     *   |CurrentWeatherResponseLocationCity
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
