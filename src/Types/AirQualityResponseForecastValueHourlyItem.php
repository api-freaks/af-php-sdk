<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class AirQualityResponseForecastValueHourlyItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $pm10 Concentration of particulate matter ≤10 micrometers (μg/m³)
     */
    #[JsonProperty('pm10')]
    public ?float $pm10;

    /**
     * @var ?float $carbonMonoxide Concentration of carbon monoxide (μg/m³)
     */
    #[JsonProperty('carbon_monoxide')]
    public ?float $carbonMonoxide;

    /**
     * @var ?float $pm25 Concentration of particulate matter ≤2.5 micrometers (μg/m³)
     */
    #[JsonProperty('pm2_5')]
    public ?float $pm25;

    /**
     * @var ?float $carbonDioxide Concentration of carbon dioxide (ppm)
     */
    #[JsonProperty('carbon_dioxide')]
    public ?float $carbonDioxide;

    /**
     * @var ?float $nitrogenDioxide Concentration of nitrogen dioxide (μg/m³)
     */
    #[JsonProperty('nitrogen_dioxide')]
    public ?float $nitrogenDioxide;

    /**
     * @var ?float $sulphurDioxide Concentration of sulphur dioxide (μg/m³)
     */
    #[JsonProperty('sulphur_dioxide')]
    public ?float $sulphurDioxide;

    /**
     * @var ?float $ozone Concentration of ozone (μg/m³)
     */
    #[JsonProperty('ozone')]
    public ?float $ozone;

    /**
     * @var ?float $dust Concentration of dust particles (μg/m³)
     */
    #[JsonProperty('dust')]
    public ?float $dust;

    /**
     * @var ?float $uvIndex Ultraviolet radiation index
     */
    #[JsonProperty('uv_index')]
    public ?float $uvIndex;

    /**
     * @var ?float $aerosolOpticalDepth Aerosol optical depth
     */
    #[JsonProperty('aerosol_optical_depth')]
    public ?float $aerosolOpticalDepth;

    /**
     * @var ?float $uvIndexClearSky Ultraviolet radiation index under clear sky conditions
     */
    #[JsonProperty('uv_index_clear_sky')]
    public ?float $uvIndexClearSky;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   pm10?: ?float,
     *   carbonMonoxide?: ?float,
     *   pm25?: ?float,
     *   carbonDioxide?: ?float,
     *   nitrogenDioxide?: ?float,
     *   sulphurDioxide?: ?float,
     *   ozone?: ?float,
     *   dust?: ?float,
     *   uvIndex?: ?float,
     *   aerosolOpticalDepth?: ?float,
     *   uvIndexClearSky?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->pm10 = $values['pm10'] ?? null;
        $this->carbonMonoxide = $values['carbonMonoxide'] ?? null;
        $this->pm25 = $values['pm25'] ?? null;
        $this->carbonDioxide = $values['carbonDioxide'] ?? null;
        $this->nitrogenDioxide = $values['nitrogenDioxide'] ?? null;
        $this->sulphurDioxide = $values['sulphurDioxide'] ?? null;
        $this->ozone = $values['ozone'] ?? null;
        $this->dust = $values['dust'] ?? null;
        $this->uvIndex = $values['uvIndex'] ?? null;
        $this->aerosolOpticalDepth = $values['aerosolOpticalDepth'] ?? null;
        $this->uvIndexClearSky = $values['uvIndexClearSky'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
