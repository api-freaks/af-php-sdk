<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Current weather data
 */
class BulkCurrentWeatherResponseBulkItemCurrent extends JsonSerializableType
{
    /**
     * @var DateTime $timestamp ISO 8601 formatted timestamp of the current weather observation.
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public DateTime $timestamp;

    /**
     * @var float $temperature2M Current air temperature (°C) measured at 2 meters above ground.
     */
    #[JsonProperty('temperature_2m')]
    public float $temperature2M;

    /**
     * @var float $relativeHumidity2M Current relative humidity percentage at 2 meters above ground.
     */
    #[JsonProperty('relative_humidity_2m')]
    public float $relativeHumidity2M;

    /**
     * @var float $apparentTemperature Current apparent temperature (°C) accounting for wind chill and humidity.
     */
    #[JsonProperty('apparent_temperature')]
    public float $apparentTemperature;

    /**
     * @var float $snowfall Current snowfall accumulation in centimeters.
     */
    #[JsonProperty('snowfall')]
    public float $snowfall;

    /**
     * @var float $rain Current rainfall accumulation in millimeters.
     */
    #[JsonProperty('rain')]
    public float $rain;

    /**
     * @var float $showers Current shower precipitation in millimeters.
     */
    #[JsonProperty('showers')]
    public float $showers;

    /**
     * @var float $precipitation Total precipitation (mm) including rain, showers, and snowfall.
     */
    #[JsonProperty('precipitation')]
    public float $precipitation;

    /**
     * @var int $weatherCode WMO weather condition code representing current conditions. Supported codes: 0 clear sky; 1, 2, 3 varying cloud cover; 45, 48 fog; 51, 53, 55 drizzle; 56, 57 freezing drizzle; 61, 63, 65 rain; 66, 67 freezing rain; 71, 73, 75 snowfall; 77 snow grains; 80, 81, 82 rain showers; 85, 86 snow showers; 95 thunderstorm; 96, 99 thunderstorm with hail.
     */
    #[JsonProperty('weather_code')]
    public int $weatherCode;

    /**
     * @var float $cloudCover Current percentage of sky covered by clouds.
     */
    #[JsonProperty('cloud_cover')]
    public float $cloudCover;

    /**
     * @var float $pressureMsl Current atmospheric pressure (hPa) adjusted to mean sea level.
     */
    #[JsonProperty('pressure_msl')]
    public float $pressureMsl;

    /**
     * @var float $surfacePressure Current atmospheric pressure (hPa) at surface level.
     */
    #[JsonProperty('surface_pressure')]
    public float $surfacePressure;

    /**
     * @var float $windSpeed10M Current wind speed (km/h) at 10 meters above ground.
     */
    #[JsonProperty('wind_speed_10m')]
    public float $windSpeed10M;

    /**
     * @var int $windDirection10M Current wind direction in degrees at 10 meters above ground.
     */
    #[JsonProperty('wind_direction_10m')]
    public int $windDirection10M;

    /**
     * @var float $windGusts10M Current wind gust speed (km/h) at 10 meters above ground.
     */
    #[JsonProperty('wind_gusts_10m')]
    public float $windGusts10M;

    /**
     * @var BulkCurrentWeatherResponseBulkItemCurrentAstronomy $astronomy Astronomical information including sunrise, sunset, and moon phases for the current date.
     */
    #[JsonProperty('astronomy')]
    public BulkCurrentWeatherResponseBulkItemCurrentAstronomy $astronomy;

    /**
     * @var BulkCurrentWeatherResponseBulkItemCurrentAirQuality $airQuality Air quality metrics including pollutant concentrations and AQI values.
     */
    #[JsonProperty('air_quality')]
    public BulkCurrentWeatherResponseBulkItemCurrentAirQuality $airQuality;

    /**
     * @param array{
     *   timestamp: DateTime,
     *   temperature2M: float,
     *   relativeHumidity2M: float,
     *   apparentTemperature: float,
     *   snowfall: float,
     *   rain: float,
     *   showers: float,
     *   precipitation: float,
     *   weatherCode: int,
     *   cloudCover: float,
     *   pressureMsl: float,
     *   surfacePressure: float,
     *   windSpeed10M: float,
     *   windDirection10M: int,
     *   windGusts10M: float,
     *   astronomy: BulkCurrentWeatherResponseBulkItemCurrentAstronomy,
     *   airQuality: BulkCurrentWeatherResponseBulkItemCurrentAirQuality,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timestamp = $values['timestamp'];
        $this->temperature2M = $values['temperature2M'];
        $this->relativeHumidity2M = $values['relativeHumidity2M'];
        $this->apparentTemperature = $values['apparentTemperature'];
        $this->snowfall = $values['snowfall'];
        $this->rain = $values['rain'];
        $this->showers = $values['showers'];
        $this->precipitation = $values['precipitation'];
        $this->weatherCode = $values['weatherCode'];
        $this->cloudCover = $values['cloudCover'];
        $this->pressureMsl = $values['pressureMsl'];
        $this->surfacePressure = $values['surfacePressure'];
        $this->windSpeed10M = $values['windSpeed10M'];
        $this->windDirection10M = $values['windDirection10M'];
        $this->windGusts10M = $values['windGusts10M'];
        $this->astronomy = $values['astronomy'];
        $this->airQuality = $values['airQuality'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
