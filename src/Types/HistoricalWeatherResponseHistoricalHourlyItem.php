<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class HistoricalWeatherResponseHistoricalHourlyItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $temperature2M Air temperature at 2 meters (°C)
     */
    #[JsonProperty('temperature_2m')]
    public ?float $temperature2M;

    /**
     * @var ?float $relativeHumidity2M Relative humidity at 2 meters (%)
     */
    #[JsonProperty('relative_humidity_2m')]
    public ?float $relativeHumidity2M;

    /**
     * @var ?float $dewPoint2M Dew point temperature at 2 meters (°C)
     */
    #[JsonProperty('dew_point_2m')]
    public ?float $dewPoint2M;

    /**
     * @var ?float $apparentTemperature Perceived temperature (°C)
     */
    #[JsonProperty('apparent_temperature')]
    public ?float $apparentTemperature;

    /**
     * @var ?float $precipitation Total precipitation in this hour (mm)
     */
    #[JsonProperty('precipitation')]
    public ?float $precipitation;

    /**
     * @var ?float $rain Rainfall in this hour (mm)
     */
    #[JsonProperty('rain')]
    public ?float $rain;

    /**
     * @var ?float $snowfall Snowfall in this hour (cm)
     */
    #[JsonProperty('snowfall')]
    public ?float $snowfall;

    /**
     * @var ?int $weatherCode Weather condition code
     */
    #[JsonProperty('weather_code')]
    public ?int $weatherCode;

    /**
     * @var ?float $pressureMsl Atmospheric pressure at mean sea level (hPa)
     */
    #[JsonProperty('pressure_msl')]
    public ?float $pressureMsl;

    /**
     * @var ?float $surfacePressure Atmospheric pressure at ground level (hPa)
     */
    #[JsonProperty('surface_pressure')]
    public ?float $surfacePressure;

    /**
     * @var ?float $cloudCover Cloud cover percentage (%)
     */
    #[JsonProperty('cloud_cover')]
    public ?float $cloudCover;

    /**
     * @var ?float $et0FaoEvapotranspiration Hourly reference evapotranspiration (mm)
     */
    #[JsonProperty('et0_fao_evapotranspiration')]
    public ?float $et0FaoEvapotranspiration;

    /**
     * @var ?float $windSpeed10M Wind speed at 10 meters (km/h)
     */
    #[JsonProperty('wind_speed_10m')]
    public ?float $windSpeed10M;

    /**
     * @var ?int $windDirection10M Wind direction at 10 meters (°)
     */
    #[JsonProperty('wind_direction_10m')]
    public ?int $windDirection10M;

    /**
     * @var ?float $windGusts10M Wind gusts at 10 meters (km/h)
     */
    #[JsonProperty('wind_gusts_10m')]
    public ?float $windGusts10M;

    /**
     * @var ?float $albedo Reflectivity of the Earth's surface
     */
    #[JsonProperty('albedo')]
    public ?float $albedo;

    /**
     * @var ?float $shortwaveRadiation Incoming shortwave solar radiation (W/m²)
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
     * @var ?float $directNormalIrradiance Direct solar irradiance (W/m²)
     */
    #[JsonProperty('direct_normal_irradiance')]
    public ?float $directNormalIrradiance;

    /**
     * @var ?float $globalTiltedIrradiance Total solar irradiance on a tilted surface (W/m²)
     */
    #[JsonProperty('global_tilted_irradiance')]
    public ?float $globalTiltedIrradiance;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   temperature2M?: ?float,
     *   relativeHumidity2M?: ?float,
     *   dewPoint2M?: ?float,
     *   apparentTemperature?: ?float,
     *   precipitation?: ?float,
     *   rain?: ?float,
     *   snowfall?: ?float,
     *   weatherCode?: ?int,
     *   pressureMsl?: ?float,
     *   surfacePressure?: ?float,
     *   cloudCover?: ?float,
     *   et0FaoEvapotranspiration?: ?float,
     *   windSpeed10M?: ?float,
     *   windDirection10M?: ?int,
     *   windGusts10M?: ?float,
     *   albedo?: ?float,
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
        $this->rain = $values['rain'] ?? null;
        $this->snowfall = $values['snowfall'] ?? null;
        $this->weatherCode = $values['weatherCode'] ?? null;
        $this->pressureMsl = $values['pressureMsl'] ?? null;
        $this->surfacePressure = $values['surfacePressure'] ?? null;
        $this->cloudCover = $values['cloudCover'] ?? null;
        $this->et0FaoEvapotranspiration = $values['et0FaoEvapotranspiration'] ?? null;
        $this->windSpeed10M = $values['windSpeed10M'] ?? null;
        $this->windDirection10M = $values['windDirection10M'] ?? null;
        $this->windGusts10M = $values['windGusts10M'] ?? null;
        $this->albedo = $values['albedo'] ?? null;
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
