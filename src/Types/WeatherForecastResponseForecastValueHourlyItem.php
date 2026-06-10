<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class WeatherForecastResponseForecastValueHourlyItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $temperature2M Air temperature at 2m (°C)
     */
    #[JsonProperty('temperature_2m')]
    public ?float $temperature2M;

    /**
     * @var ?int $relativeHumidity2M Relative humidity at 2m (%)
     */
    #[JsonProperty('relative_humidity_2m')]
    public ?int $relativeHumidity2M;

    /**
     * @var ?float $dewPoint2M Dew point at 2m (°C)
     */
    #[JsonProperty('dew_point_2m')]
    public ?float $dewPoint2M;

    /**
     * @var ?float $apparentTemperature Feels-like temperature (°C)
     */
    #[JsonProperty('apparent_temperature')]
    public ?float $apparentTemperature;

    /**
     * @var ?float $precipitation Total precipitation at this time (mm)
     */
    #[JsonProperty('precipitation')]
    public ?float $precipitation;

    /**
     * @var ?int $precipitationProbability Probability of precipitation (%)
     */
    #[JsonProperty('precipitation_probability')]
    public ?int $precipitationProbability;

    /**
     * @var ?float $rain Rainfall (mm)
     */
    #[JsonProperty('rain')]
    public ?float $rain;

    /**
     * @var ?float $showers Showers (mm)
     */
    #[JsonProperty('showers')]
    public ?float $showers;

    /**
     * @var ?float $snowfall Snowfall (cm)
     */
    #[JsonProperty('snowfall')]
    public ?float $snowfall;

    /**
     * @var ?int $weatherCode Weather condition code
     */
    #[JsonProperty('weather_code')]
    public ?int $weatherCode;

    /**
     * @var ?float $pressureMsl Sea-level pressure (hPa)
     */
    #[JsonProperty('pressure_msl')]
    public ?float $pressureMsl;

    /**
     * @var ?float $surfacePressure Surface pressure (hPa)
     */
    #[JsonProperty('surface_pressure')]
    public ?float $surfacePressure;

    /**
     * @var ?int $cloudCover Cloud cover (%)
     */
    #[JsonProperty('cloud_cover')]
    public ?int $cloudCover;

    /**
     * @var ?float $visibility Visibility distance (m)
     */
    #[JsonProperty('visibility')]
    public ?float $visibility;

    /**
     * @var ?float $et0FaoEvapotranspiration Evapotranspiration (mm)
     */
    #[JsonProperty('et0_fao_evapotranspiration')]
    public ?float $et0FaoEvapotranspiration;

    /**
     * @var ?float $windSpeed10M Wind speed at 10m (km/h)
     */
    #[JsonProperty('wind_speed_10m')]
    public ?float $windSpeed10M;

    /**
     * @var ?int $windDirection10M Wind direction at 10m (°)
     */
    #[JsonProperty('wind_direction_10m')]
    public ?int $windDirection10M;

    /**
     * @var ?float $windGusts10M Wind gusts at 10m (km/h)
     */
    #[JsonProperty('wind_gusts_10m')]
    public ?float $windGusts10M;

    /**
     * @var ?float $uvIndex UV index
     */
    #[JsonProperty('uv_index')]
    public ?float $uvIndex;

    /**
     * @var ?float $uvIndexClearSky UV index under clear-sky conditions
     */
    #[JsonProperty('uv_index_clear_sky')]
    public ?float $uvIndexClearSky;

    /**
     * @var ?float $shortwaveRadiation Shortwave radiation (W/m²)
     */
    #[JsonProperty('shortwave_radiation')]
    public ?float $shortwaveRadiation;

    /**
     * @var ?float $directRadiation Direct solar radiation (W/m²)
     */
    #[JsonProperty('direct_radiation')]
    public ?float $directRadiation;

    /**
     * @var ?float $diffuseRadiation Diffuse solar radiation (W/m²)
     */
    #[JsonProperty('diffuse_radiation')]
    public ?float $diffuseRadiation;

    /**
     * @var ?float $directNormalIrradiance Direct normal irradiance (W/m²)
     */
    #[JsonProperty('direct_normal_irradiance')]
    public ?float $directNormalIrradiance;

    /**
     * @var ?float $globalTiltedIrradiance Global tilted irradiance (W/m²)
     */
    #[JsonProperty('global_tilted_irradiance')]
    public ?float $globalTiltedIrradiance;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   temperature2M?: ?float,
     *   relativeHumidity2M?: ?int,
     *   dewPoint2M?: ?float,
     *   apparentTemperature?: ?float,
     *   precipitation?: ?float,
     *   precipitationProbability?: ?int,
     *   rain?: ?float,
     *   showers?: ?float,
     *   snowfall?: ?float,
     *   weatherCode?: ?int,
     *   pressureMsl?: ?float,
     *   surfacePressure?: ?float,
     *   cloudCover?: ?int,
     *   visibility?: ?float,
     *   et0FaoEvapotranspiration?: ?float,
     *   windSpeed10M?: ?float,
     *   windDirection10M?: ?int,
     *   windGusts10M?: ?float,
     *   uvIndex?: ?float,
     *   uvIndexClearSky?: ?float,
     *   shortwaveRadiation?: ?float,
     *   directRadiation?: ?float,
     *   diffuseRadiation?: ?float,
     *   directNormalIrradiance?: ?float,
     *   globalTiltedIrradiance?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->temperature2M = $values['temperature2M'] ?? null;
        $this->relativeHumidity2M = $values['relativeHumidity2M'] ?? null;
        $this->dewPoint2M = $values['dewPoint2M'] ?? null;
        $this->apparentTemperature = $values['apparentTemperature'] ?? null;
        $this->precipitation = $values['precipitation'] ?? null;
        $this->precipitationProbability = $values['precipitationProbability'] ?? null;
        $this->rain = $values['rain'] ?? null;
        $this->showers = $values['showers'] ?? null;
        $this->snowfall = $values['snowfall'] ?? null;
        $this->weatherCode = $values['weatherCode'] ?? null;
        $this->pressureMsl = $values['pressureMsl'] ?? null;
        $this->surfacePressure = $values['surfacePressure'] ?? null;
        $this->cloudCover = $values['cloudCover'] ?? null;
        $this->visibility = $values['visibility'] ?? null;
        $this->et0FaoEvapotranspiration = $values['et0FaoEvapotranspiration'] ?? null;
        $this->windSpeed10M = $values['windSpeed10M'] ?? null;
        $this->windDirection10M = $values['windDirection10M'] ?? null;
        $this->windGusts10M = $values['windGusts10M'] ?? null;
        $this->uvIndex = $values['uvIndex'] ?? null;
        $this->uvIndexClearSky = $values['uvIndexClearSky'] ?? null;
        $this->shortwaveRadiation = $values['shortwaveRadiation'] ?? null;
        $this->directRadiation = $values['directRadiation'] ?? null;
        $this->diffuseRadiation = $values['diffuseRadiation'] ?? null;
        $this->directNormalIrradiance = $values['directNormalIrradiance'] ?? null;
        $this->globalTiltedIrradiance = $values['globalTiltedIrradiance'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
