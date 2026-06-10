<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Air quality metrics including pollutant concentrations and AQI values.
 */
class BulkCurrentWeatherResponseBulkItemCurrentAirQuality extends JsonSerializableType
{
    /**
     * @var DateTime $timestamp ISO 8601 formatted timestamp (iso8601).
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public DateTime $timestamp;

    /**
     * @var int $europeanAqi Consolidated European Air Quality Index representing the highest value among individual pollutant indices. Ranges: 0-20 (good), 20-40 (fair), 40-60 (moderate), 60-80 (poor), 80-100 (very poor), >100 (extremely poor).
     */
    #[JsonProperty('european_aqi')]
    public int $europeanAqi;

    /**
     * @var int $usAqi Consolidated U.S. Air Quality Index representing the highest value among individual pollutant indices. Ranges: 0-50 (good), 51-100 (moderate), 101-150 (unhealthy for sensitive groups), 151-200 (unhealthy), 201-300 (very unhealthy), 301-500 (hazardous).
     */
    #[JsonProperty('us_aqi')]
    public int $usAqi;

    /**
     * @var float $pm10 Particulate matter with diameter less than 10 micrometers (μg/m³) measured at 10 meters above ground.
     */
    #[JsonProperty('pm10')]
    public float $pm10;

    /**
     * @var float $pm25 Particulate matter with diameter less than 2.5 micrometers (μg/m³) measured at 10 meters above ground.
     */
    #[JsonProperty('pm2_5')]
    public float $pm25;

    /**
     * @var float $carbonMonoxide Atmospheric carbon monoxide gas concentration (μg/m³) at 10 meters above ground.
     */
    #[JsonProperty('carbon_monoxide')]
    public float $carbonMonoxide;

    /**
     * @var float $nitrogenDioxide Atmospheric nitrogen dioxide gas concentration (μg/m³) at 10 meters above ground.
     */
    #[JsonProperty('nitrogen_dioxide')]
    public float $nitrogenDioxide;

    /**
     * @var float $sulphurDioxide Atmospheric sulphur dioxide gas concentration (μg/m³) at 10 meters above ground.
     */
    #[JsonProperty('sulphur_dioxide')]
    public float $sulphurDioxide;

    /**
     * @var float $ozone Atmospheric ozone gas concentration (μg/m³) at 10 meters above ground.
     */
    #[JsonProperty('ozone')]
    public float $ozone;

    /**
     * @var float $dust Saharan dust particle concentration (μg/m³) at 10 meters above ground.
     */
    #[JsonProperty('dust')]
    public float $dust;

    /**
     * @var float $uvIndex Ultraviolet radiation intensity index accounting for cloud coverage.
     */
    #[JsonProperty('uv_index')]
    public float $uvIndex;

    /**
     * @var float $aerosolOpticalDepth Aerosol optical depth at 550 nm wavelength indicating atmospheric haze levels.
     */
    #[JsonProperty('aerosol_optical_depth')]
    public float $aerosolOpticalDepth;

    /**
     * @var float $uvIndexClearSky Ultraviolet radiation intensity index assuming cloud-free conditions.
     */
    #[JsonProperty('uv_index_clear_sky')]
    public float $uvIndexClearSky;

    /**
     * @param array{
     *   timestamp: DateTime,
     *   europeanAqi: int,
     *   usAqi: int,
     *   pm10: float,
     *   pm25: float,
     *   carbonMonoxide: float,
     *   nitrogenDioxide: float,
     *   sulphurDioxide: float,
     *   ozone: float,
     *   dust: float,
     *   uvIndex: float,
     *   aerosolOpticalDepth: float,
     *   uvIndexClearSky: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timestamp = $values['timestamp'];
        $this->europeanAqi = $values['europeanAqi'];
        $this->usAqi = $values['usAqi'];
        $this->pm10 = $values['pm10'];
        $this->pm25 = $values['pm25'];
        $this->carbonMonoxide = $values['carbonMonoxide'];
        $this->nitrogenDioxide = $values['nitrogenDioxide'];
        $this->sulphurDioxide = $values['sulphurDioxide'];
        $this->ozone = $values['ozone'];
        $this->dust = $values['dust'];
        $this->uvIndex = $values['uvIndex'];
        $this->aerosolOpticalDepth = $values['aerosolOpticalDepth'];
        $this->uvIndexClearSky = $values['uvIndexClearSky'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
