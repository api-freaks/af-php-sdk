<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Daily historical data
 */
class WeatherTimeSeriesResponseHistoricalValueDaily extends JsonSerializableType
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
     * @var ?float $temperature2MMean Daily mean air temperature at 2 meters (°C)
     */
    #[JsonProperty('temperature_2m_mean')]
    public ?float $temperature2MMean;

    /**
     * @var ?float $temperature2MMax Daily maximum air temperature at 2 meters (°C)
     */
    #[JsonProperty('temperature_2m_max')]
    public ?float $temperature2MMax;

    /**
     * @var ?float $temperature2MMin Daily minimum air temperature at 2 meters (°C)
     */
    #[JsonProperty('temperature_2m_min')]
    public ?float $temperature2MMin;

    /**
     * @var ?float $apparentTemperatureMean Daily mean perceived temperature (°C)
     */
    #[JsonProperty('apparent_temperature_mean')]
    public ?float $apparentTemperatureMean;

    /**
     * @var ?float $apparentTemperatureMax Daily maximum perceived temperature (°C)
     */
    #[JsonProperty('apparent_temperature_max')]
    public ?float $apparentTemperatureMax;

    /**
     * @var ?float $apparentTemperatureMin Daily minimum perceived temperature (°C)
     */
    #[JsonProperty('apparent_temperature_min')]
    public ?float $apparentTemperatureMin;

    /**
     * @var ?float $precipitationSum Total precipitation (mm)
     */
    #[JsonProperty('precipitation_sum')]
    public ?float $precipitationSum;

    /**
     * @var ?float $rainSum Total rainfall (mm)
     */
    #[JsonProperty('rain_sum')]
    public ?float $rainSum;

    /**
     * @var ?float $snowfallSum Total snowfall (cm)
     */
    #[JsonProperty('snowfall_sum')]
    public ?float $snowfallSum;

    /**
     * @var ?float $windSpeed10MMax Maximum wind speed at 10 meters (km/h)
     */
    #[JsonProperty('wind_speed_10m_max')]
    public ?float $windSpeed10MMax;

    /**
     * @var ?float $windGusts10MMax Maximum wind gusts at 10 meters (km/h)
     */
    #[JsonProperty('wind_gusts_10m_max')]
    public ?float $windGusts10MMax;

    /**
     * @var ?float $windSpeed10MMean Daily mean wind speed at 10 meters (km/h)
     */
    #[JsonProperty('wind_speed_10m_mean')]
    public ?float $windSpeed10MMean;

    /**
     * @var ?float $windSpeed10MMin Minimum wind speed at 10 meters (km/h)
     */
    #[JsonProperty('wind_speed_10m_min')]
    public ?float $windSpeed10MMin;

    /**
     * @var ?float $windGusts10MMin Minimum wind gusts at 10 meters (km/h)
     */
    #[JsonProperty('wind_gusts_10m_min')]
    public ?float $windGusts10MMin;

    /**
     * @var ?float $windGusts10MMean Daily mean wind gusts at 10 meters (km/h)
     */
    #[JsonProperty('wind_gusts_10m_mean')]
    public ?float $windGusts10MMean;

    /**
     * @var ?int $windDirection10MDominant Dominant wind direction at 10 meters (°)
     */
    #[JsonProperty('wind_direction_10m_dominant')]
    public ?int $windDirection10MDominant;

    /**
     * @var ?float $shortwaveRadiationSum Daily sum of shortwave solar radiation (MJ/m²)
     */
    #[JsonProperty('shortwave_radiation_sum')]
    public ?float $shortwaveRadiationSum;

    /**
     * @var ?float $et0FaoEvapotranspirationSum Daily sum of reference evapotranspiration (mm)
     */
    #[JsonProperty('et0_fao_evapotranspiration_sum')]
    public ?float $et0FaoEvapotranspirationSum;

    /**
     * @var ?float $cloudCoverMean Daily mean cloud cover percentage (%)
     */
    #[JsonProperty('cloud_cover_mean')]
    public ?float $cloudCoverMean;

    /**
     * @var ?float $dewPoint2MMean Daily mean dew point temperature at 2 meters (°C)
     */
    #[JsonProperty('dew_point_2m_mean')]
    public ?float $dewPoint2MMean;

    /**
     * @var ?float $dewPoint2MMax Daily maximum dew point temperature at 2 meters (°C)
     */
    #[JsonProperty('dew_point_2m_max')]
    public ?float $dewPoint2MMax;

    /**
     * @var ?float $dewPoint2MMin Daily minimum dew point temperature at 2 meters (°C)
     */
    #[JsonProperty('dew_point_2m_min')]
    public ?float $dewPoint2MMin;

    /**
     * @var ?float $relativeHumidity2MMean Daily mean relative humidity at 2 meters (%)
     */
    #[JsonProperty('relative_humidity_2m_mean')]
    public ?float $relativeHumidity2MMean;

    /**
     * @var ?int $relativeHumidity2MMax Daily maximum relative humidity at 2 meters (%)
     */
    #[JsonProperty('relative_humidity_2m_max')]
    public ?int $relativeHumidity2MMax;

    /**
     * @var ?int $relativeHumidity2MMin Daily minimum relative humidity at 2 meters (%)
     */
    #[JsonProperty('relative_humidity_2m_min')]
    public ?int $relativeHumidity2MMin;

    /**
     * @var ?float $pressureMslMean Daily mean atmospheric pressure at mean sea level (hPa)
     */
    #[JsonProperty('pressure_msl_mean')]
    public ?float $pressureMslMean;

    /**
     * @var ?float $surfacePressureMean Daily mean surface pressure at ground level (hPa)
     */
    #[JsonProperty('surface_pressure_mean')]
    public ?float $surfacePressureMean;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   weatherCode?: ?int,
     *   temperature2MMean?: ?float,
     *   temperature2MMax?: ?float,
     *   temperature2MMin?: ?float,
     *   apparentTemperatureMean?: ?float,
     *   apparentTemperatureMax?: ?float,
     *   apparentTemperatureMin?: ?float,
     *   precipitationSum?: ?float,
     *   rainSum?: ?float,
     *   snowfallSum?: ?float,
     *   windSpeed10MMax?: ?float,
     *   windGusts10MMax?: ?float,
     *   windSpeed10MMean?: ?float,
     *   windSpeed10MMin?: ?float,
     *   windGusts10MMin?: ?float,
     *   windGusts10MMean?: ?float,
     *   windDirection10MDominant?: ?int,
     *   shortwaveRadiationSum?: ?float,
     *   et0FaoEvapotranspirationSum?: ?float,
     *   cloudCoverMean?: ?float,
     *   dewPoint2MMean?: ?float,
     *   dewPoint2MMax?: ?float,
     *   dewPoint2MMin?: ?float,
     *   relativeHumidity2MMean?: ?float,
     *   relativeHumidity2MMax?: ?int,
     *   relativeHumidity2MMin?: ?int,
     *   pressureMslMean?: ?float,
     *   surfacePressureMean?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->weatherCode = $values['weatherCode'] ?? null;
        $this->temperature2MMean = $values['temperature2MMean'] ?? null;
        $this->temperature2MMax = $values['temperature2MMax'] ?? null;
        $this->temperature2MMin = $values['temperature2MMin'] ?? null;
        $this->apparentTemperatureMean = $values['apparentTemperatureMean'] ?? null;
        $this->apparentTemperatureMax = $values['apparentTemperatureMax'] ?? null;
        $this->apparentTemperatureMin = $values['apparentTemperatureMin'] ?? null;
        $this->precipitationSum = $values['precipitationSum'] ?? null;
        $this->rainSum = $values['rainSum'] ?? null;
        $this->snowfallSum = $values['snowfallSum'] ?? null;
        $this->windSpeed10MMax = $values['windSpeed10MMax'] ?? null;
        $this->windGusts10MMax = $values['windGusts10MMax'] ?? null;
        $this->windSpeed10MMean = $values['windSpeed10MMean'] ?? null;
        $this->windSpeed10MMin = $values['windSpeed10MMin'] ?? null;
        $this->windGusts10MMin = $values['windGusts10MMin'] ?? null;
        $this->windGusts10MMean = $values['windGusts10MMean'] ?? null;
        $this->windDirection10MDominant = $values['windDirection10MDominant'] ?? null;
        $this->shortwaveRadiationSum = $values['shortwaveRadiationSum'] ?? null;
        $this->et0FaoEvapotranspirationSum = $values['et0FaoEvapotranspirationSum'] ?? null;
        $this->cloudCoverMean = $values['cloudCoverMean'] ?? null;
        $this->dewPoint2MMean = $values['dewPoint2MMean'] ?? null;
        $this->dewPoint2MMax = $values['dewPoint2MMax'] ?? null;
        $this->dewPoint2MMin = $values['dewPoint2MMin'] ?? null;
        $this->relativeHumidity2MMean = $values['relativeHumidity2MMean'] ?? null;
        $this->relativeHumidity2MMax = $values['relativeHumidity2MMax'] ?? null;
        $this->relativeHumidity2MMin = $values['relativeHumidity2MMin'] ?? null;
        $this->pressureMslMean = $values['pressureMslMean'] ?? null;
        $this->surfacePressureMean = $values['surfacePressureMean'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
