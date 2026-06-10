<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Daily forecast data
 */
class WeatherForecastResponseForecastValueDaily extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?int $weatherCode Weather condition code
     */
    #[JsonProperty('weather_code')]
    public ?int $weatherCode;

    /**
     * @var ?float $temperature2MMax Maximum air temperature at 2m (°C)
     */
    #[JsonProperty('temperature_2m_max')]
    public ?float $temperature2MMax;

    /**
     * @var ?float $temperature2MMin Minimum air temperature at 2m (°C)
     */
    #[JsonProperty('temperature_2m_min')]
    public ?float $temperature2MMin;

    /**
     * @var ?float $temperature2MMean Mean air temperature at 2m (°C)
     */
    #[JsonProperty('temperature_2m_mean')]
    public ?float $temperature2MMean;

    /**
     * @var ?float $apparentTemperatureMax Maximum feels-like temperature (°C)
     */
    #[JsonProperty('apparent_temperature_max')]
    public ?float $apparentTemperatureMax;

    /**
     * @var ?float $apparentTemperatureMin Minimum feels-like temperature (°C)
     */
    #[JsonProperty('apparent_temperature_min')]
    public ?float $apparentTemperatureMin;

    /**
     * @var ?float $apparentTemperatureMean Mean feels-like temperature (°C)
     */
    #[JsonProperty('apparent_temperature_mean')]
    public ?float $apparentTemperatureMean;

    /**
     * @var ?float $uvIndexMax Daily maximum UV index
     */
    #[JsonProperty('uv_index_max')]
    public ?float $uvIndexMax;

    /**
     * @var ?float $uvIndexClearSkyMax UV index clear sky max
     */
    #[JsonProperty('uv_index_clear_sky_max')]
    public ?float $uvIndexClearSkyMax;

    /**
     * @var ?float $rainSum Total rain (mm)
     */
    #[JsonProperty('rain_sum')]
    public ?float $rainSum;

    /**
     * @var ?float $showersSum Total showers (mm)
     */
    #[JsonProperty('showers_sum')]
    public ?float $showersSum;

    /**
     * @var ?float $snowfallSum Total snowfall (cm)
     */
    #[JsonProperty('snowfall_sum')]
    public ?float $snowfallSum;

    /**
     * @var ?float $precipitationSum Total precipitation (mm)
     */
    #[JsonProperty('precipitation_sum')]
    public ?float $precipitationSum;

    /**
     * @var ?int $precipitationProbabilityMean Mean probability of precipitation (%)
     */
    #[JsonProperty('precipitation_probability_mean')]
    public ?int $precipitationProbabilityMean;

    /**
     * @var ?float $windSpeed10MMax Max wind speed at 10m (km/h)
     */
    #[JsonProperty('wind_speed_10m_max')]
    public ?float $windSpeed10MMax;

    /**
     * @var ?float $windSpeed10MMin Min wind speed at 10m (km/h)
     */
    #[JsonProperty('wind_speed_10m_min')]
    public ?float $windSpeed10MMin;

    /**
     * @var ?float $windSpeed10MMean Mean wind speed at 10m (km/h)
     */
    #[JsonProperty('wind_speed_10m_mean')]
    public ?float $windSpeed10MMean;

    /**
     * @var ?float $windGusts10MMax Max wind gusts at 10m (km/h)
     */
    #[JsonProperty('wind_gusts_10m_max')]
    public ?float $windGusts10MMax;

    /**
     * @var ?float $windGusts10MMin Min wind gusts at 10m (km/h)
     */
    #[JsonProperty('wind_gusts_10m_min')]
    public ?float $windGusts10MMin;

    /**
     * @var ?float $windGusts10MMean Mean wind gusts at 10m (km/h)
     */
    #[JsonProperty('wind_gusts_10m_mean')]
    public ?float $windGusts10MMean;

    /**
     * @var ?int $windDirection10MDominant Dominant wind direction at 10m (°)
     */
    #[JsonProperty('wind_direction_10m_dominant')]
    public ?int $windDirection10MDominant;

    /**
     * @var ?float $shortwaveRadiationSum Total shortwave radiation (MJ/m²)
     */
    #[JsonProperty('shortwave_radiation_sum')]
    public ?float $shortwaveRadiationSum;

    /**
     * @var ?float $surfacePressureMean Mean surface pressure (hPa)
     */
    #[JsonProperty('surface_pressure_mean')]
    public ?float $surfacePressureMean;

    /**
     * @var ?float $pressureMslMean Mean sea-level pressure (hPa)
     */
    #[JsonProperty('pressure_msl_mean')]
    public ?float $pressureMslMean;

    /**
     * @var ?float $visibilityMean Mean visibility distance (m)
     */
    #[JsonProperty('visibility_mean')]
    public ?float $visibilityMean;

    /**
     * @var ?int $cloudCoverMean Mean cloud cover (%)
     */
    #[JsonProperty('cloud_cover_mean')]
    public ?int $cloudCoverMean;

    /**
     * @var ?float $dewPoint2MMax Max dew point at 2m (°C)
     */
    #[JsonProperty('dew_point_2m_max')]
    public ?float $dewPoint2MMax;

    /**
     * @var ?float $dewPoint2MMin Min dew point at 2m (°C)
     */
    #[JsonProperty('dew_point_2m_min')]
    public ?float $dewPoint2MMin;

    /**
     * @var ?float $dewPoint2MMean Mean dew point at 2m (°C)
     */
    #[JsonProperty('dew_point_2m_mean')]
    public ?float $dewPoint2MMean;

    /**
     * @var ?int $relativeHumidity2MMax Max relative humidity (%)
     */
    #[JsonProperty('relative_humidity_2m_max')]
    public ?int $relativeHumidity2MMax;

    /**
     * @var ?int $relativeHumidity2MMin Min relative humidity (%)
     */
    #[JsonProperty('relative_humidity_2m_min')]
    public ?int $relativeHumidity2MMin;

    /**
     * @var ?int $relativeHumidity2MMean Mean relative humidity (%)
     */
    #[JsonProperty('relative_humidity_2m_mean')]
    public ?int $relativeHumidity2MMean;

    /**
     * @var ?float $et0FaoEvapotranspirationSum ET₀ Reference Evapotranspiration (mm)
     */
    #[JsonProperty('et0_fao_evapotranspiration_sum')]
    public ?float $et0FaoEvapotranspirationSum;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   weatherCode?: ?int,
     *   temperature2MMax?: ?float,
     *   temperature2MMin?: ?float,
     *   temperature2MMean?: ?float,
     *   apparentTemperatureMax?: ?float,
     *   apparentTemperatureMin?: ?float,
     *   apparentTemperatureMean?: ?float,
     *   uvIndexMax?: ?float,
     *   uvIndexClearSkyMax?: ?float,
     *   rainSum?: ?float,
     *   showersSum?: ?float,
     *   snowfallSum?: ?float,
     *   precipitationSum?: ?float,
     *   precipitationProbabilityMean?: ?int,
     *   windSpeed10MMax?: ?float,
     *   windSpeed10MMin?: ?float,
     *   windSpeed10MMean?: ?float,
     *   windGusts10MMax?: ?float,
     *   windGusts10MMin?: ?float,
     *   windGusts10MMean?: ?float,
     *   windDirection10MDominant?: ?int,
     *   shortwaveRadiationSum?: ?float,
     *   surfacePressureMean?: ?float,
     *   pressureMslMean?: ?float,
     *   visibilityMean?: ?float,
     *   cloudCoverMean?: ?int,
     *   dewPoint2MMax?: ?float,
     *   dewPoint2MMin?: ?float,
     *   dewPoint2MMean?: ?float,
     *   relativeHumidity2MMax?: ?int,
     *   relativeHumidity2MMin?: ?int,
     *   relativeHumidity2MMean?: ?int,
     *   et0FaoEvapotranspirationSum?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->weatherCode = $values['weatherCode'] ?? null;
        $this->temperature2MMax = $values['temperature2MMax'] ?? null;
        $this->temperature2MMin = $values['temperature2MMin'] ?? null;
        $this->temperature2MMean = $values['temperature2MMean'] ?? null;
        $this->apparentTemperatureMax = $values['apparentTemperatureMax'] ?? null;
        $this->apparentTemperatureMin = $values['apparentTemperatureMin'] ?? null;
        $this->apparentTemperatureMean = $values['apparentTemperatureMean'] ?? null;
        $this->uvIndexMax = $values['uvIndexMax'] ?? null;
        $this->uvIndexClearSkyMax = $values['uvIndexClearSkyMax'] ?? null;
        $this->rainSum = $values['rainSum'] ?? null;
        $this->showersSum = $values['showersSum'] ?? null;
        $this->snowfallSum = $values['snowfallSum'] ?? null;
        $this->precipitationSum = $values['precipitationSum'] ?? null;
        $this->precipitationProbabilityMean = $values['precipitationProbabilityMean'] ?? null;
        $this->windSpeed10MMax = $values['windSpeed10MMax'] ?? null;
        $this->windSpeed10MMin = $values['windSpeed10MMin'] ?? null;
        $this->windSpeed10MMean = $values['windSpeed10MMean'] ?? null;
        $this->windGusts10MMax = $values['windGusts10MMax'] ?? null;
        $this->windGusts10MMin = $values['windGusts10MMin'] ?? null;
        $this->windGusts10MMean = $values['windGusts10MMean'] ?? null;
        $this->windDirection10MDominant = $values['windDirection10MDominant'] ?? null;
        $this->shortwaveRadiationSum = $values['shortwaveRadiationSum'] ?? null;
        $this->surfacePressureMean = $values['surfacePressureMean'] ?? null;
        $this->pressureMslMean = $values['pressureMslMean'] ?? null;
        $this->visibilityMean = $values['visibilityMean'] ?? null;
        $this->cloudCoverMean = $values['cloudCoverMean'] ?? null;
        $this->dewPoint2MMax = $values['dewPoint2MMax'] ?? null;
        $this->dewPoint2MMin = $values['dewPoint2MMin'] ?? null;
        $this->dewPoint2MMean = $values['dewPoint2MMean'] ?? null;
        $this->relativeHumidity2MMax = $values['relativeHumidity2MMax'] ?? null;
        $this->relativeHumidity2MMin = $values['relativeHumidity2MMin'] ?? null;
        $this->relativeHumidity2MMean = $values['relativeHumidity2MMean'] ?? null;
        $this->et0FaoEvapotranspirationSum = $values['et0FaoEvapotranspirationSum'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
