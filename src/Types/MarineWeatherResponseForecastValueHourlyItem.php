<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class MarineWeatherResponseForecastValueHourlyItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $waveHeight Significant wave height at the given time (m)
     */
    #[JsonProperty('wave_height')]
    public ?float $waveHeight;

    /**
     * @var ?int $waveDirection Wave direction (°)
     */
    #[JsonProperty('wave_direction')]
    public ?int $waveDirection;

    /**
     * @var ?float $wavePeriod Wave period at the given time (s)
     */
    #[JsonProperty('wave_period')]
    public ?float $wavePeriod;

    /**
     * @var ?float $windWaveHeight Wind-driven wave height at the given time (m)
     */
    #[JsonProperty('wind_wave_height')]
    public ?float $windWaveHeight;

    /**
     * @var ?float $windWavePeakPeriod Peak period of wind-driven waves (s)
     */
    #[JsonProperty('wind_wave_peak_period')]
    public ?float $windWavePeakPeriod;

    /**
     * @var ?int $windWaveDirection Wind-wave direction (°)
     */
    #[JsonProperty('wind_wave_direction')]
    public ?int $windWaveDirection;

    /**
     * @var ?float $windWavePeriod Wind-wave period (s)
     */
    #[JsonProperty('wind_wave_period')]
    public ?float $windWavePeriod;

    /**
     * @var ?float $swellWaveHeight Swell wave height at the given time (m)
     */
    #[JsonProperty('swell_wave_height')]
    public ?float $swellWaveHeight;

    /**
     * @var ?int $swellWaveDirection Swell wave direction (°)
     */
    #[JsonProperty('swell_wave_direction')]
    public ?int $swellWaveDirection;

    /**
     * @var ?float $swellWavePeriod Swell wave period (s)
     */
    #[JsonProperty('swell_wave_period')]
    public ?float $swellWavePeriod;

    /**
     * @var ?float $swellWavePeakPeriod Peak period of swell waves (s)
     */
    #[JsonProperty('swell_wave_peak_period')]
    public ?float $swellWavePeakPeriod;

    /**
     * @var ?float $seaSurfaceTemperature Sea surface temperature (°C)
     */
    #[JsonProperty('sea_surface_temperature')]
    public ?float $seaSurfaceTemperature;

    /**
     * @var ?float $seaLevelHeightMsl Sea level height relative to mean sea level (m)
     */
    #[JsonProperty('sea_level_height_msl')]
    public ?float $seaLevelHeightMsl;

    /**
     * @var ?float $oceanCurrentVelocity Speed of ocean current (km/h)
     */
    #[JsonProperty('ocean_current_velocity')]
    public ?float $oceanCurrentVelocity;

    /**
     * @var ?int $oceanCurrentDirection Direction of ocean current (°)
     */
    #[JsonProperty('ocean_current_direction')]
    public ?int $oceanCurrentDirection;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   waveHeight?: ?float,
     *   waveDirection?: ?int,
     *   wavePeriod?: ?float,
     *   windWaveHeight?: ?float,
     *   windWavePeakPeriod?: ?float,
     *   windWaveDirection?: ?int,
     *   windWavePeriod?: ?float,
     *   swellWaveHeight?: ?float,
     *   swellWaveDirection?: ?int,
     *   swellWavePeriod?: ?float,
     *   swellWavePeakPeriod?: ?float,
     *   seaSurfaceTemperature?: ?float,
     *   seaLevelHeightMsl?: ?float,
     *   oceanCurrentVelocity?: ?float,
     *   oceanCurrentDirection?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->waveHeight = $values['waveHeight'] ?? null;
        $this->waveDirection = $values['waveDirection'] ?? null;
        $this->wavePeriod = $values['wavePeriod'] ?? null;
        $this->windWaveHeight = $values['windWaveHeight'] ?? null;
        $this->windWavePeakPeriod = $values['windWavePeakPeriod'] ?? null;
        $this->windWaveDirection = $values['windWaveDirection'] ?? null;
        $this->windWavePeriod = $values['windWavePeriod'] ?? null;
        $this->swellWaveHeight = $values['swellWaveHeight'] ?? null;
        $this->swellWaveDirection = $values['swellWaveDirection'] ?? null;
        $this->swellWavePeriod = $values['swellWavePeriod'] ?? null;
        $this->swellWavePeakPeriod = $values['swellWavePeakPeriod'] ?? null;
        $this->seaSurfaceTemperature = $values['seaSurfaceTemperature'] ?? null;
        $this->seaLevelHeightMsl = $values['seaLevelHeightMsl'] ?? null;
        $this->oceanCurrentVelocity = $values['oceanCurrentVelocity'] ?? null;
        $this->oceanCurrentDirection = $values['oceanCurrentDirection'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
