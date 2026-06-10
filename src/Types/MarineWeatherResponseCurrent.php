<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Current marine data
 */
class MarineWeatherResponseCurrent extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $waveHeight Significant height of combined sea waves (m)
     */
    #[JsonProperty('wave_height')]
    public ?float $waveHeight;

    /**
     * @var ?float $waveDirection Direction from which the combined waves are coming (°)
     */
    #[JsonProperty('wave_direction')]
    public ?float $waveDirection;

    /**
     * @var ?float $wavePeriod Average period of combined sea waves (s)
     */
    #[JsonProperty('wave_period')]
    public ?float $wavePeriod;

    /**
     * @var ?float $windWaveHeight Height of locally generated wind waves (m)
     */
    #[JsonProperty('wind_wave_height')]
    public ?float $windWaveHeight;

    /**
     * @var ?float $windWaveDirection Direction from which the wind waves are coming (°)
     */
    #[JsonProperty('wind_wave_direction')]
    public ?float $windWaveDirection;

    /**
     * @var ?float $windWavePeriod Average period of locally generated wind waves (s)
     */
    #[JsonProperty('wind_wave_period')]
    public ?float $windWavePeriod;

    /**
     * @var ?float $swellWaveHeight Height of swell waves (m)
     */
    #[JsonProperty('swell_wave_height')]
    public ?float $swellWaveHeight;

    /**
     * @var ?float $swellWaveDirection Direction from which the swell waves are coming (°)
     */
    #[JsonProperty('swell_wave_direction')]
    public ?float $swellWaveDirection;

    /**
     * @var ?float $swellWavePeriod Average period of swell waves (s)
     */
    #[JsonProperty('swell_wave_period')]
    public ?float $swellWavePeriod;

    /**
     * @var ?float $seaLevelHeightMsl Sea level height relative to mean sea level (m)
     */
    #[JsonProperty('sea_level_height_msl')]
    public ?float $seaLevelHeightMsl;

    /**
     * @var ?float $seaSurfaceTemperature Temperature of the ocean surface (°C)
     */
    #[JsonProperty('sea_surface_temperature')]
    public ?float $seaSurfaceTemperature;

    /**
     * @var ?float $oceanCurrentVelocity Speed of the ocean current (km/h)
     */
    #[JsonProperty('ocean_current_velocity')]
    public ?float $oceanCurrentVelocity;

    /**
     * @var ?float $oceanCurrentDirection Direction of the ocean current (°)
     */
    #[JsonProperty('ocean_current_direction')]
    public ?float $oceanCurrentDirection;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   waveHeight?: ?float,
     *   waveDirection?: ?float,
     *   wavePeriod?: ?float,
     *   windWaveHeight?: ?float,
     *   windWaveDirection?: ?float,
     *   windWavePeriod?: ?float,
     *   swellWaveHeight?: ?float,
     *   swellWaveDirection?: ?float,
     *   swellWavePeriod?: ?float,
     *   seaLevelHeightMsl?: ?float,
     *   seaSurfaceTemperature?: ?float,
     *   oceanCurrentVelocity?: ?float,
     *   oceanCurrentDirection?: ?float,
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
        $this->windWaveDirection = $values['windWaveDirection'] ?? null;
        $this->windWavePeriod = $values['windWavePeriod'] ?? null;
        $this->swellWaveHeight = $values['swellWaveHeight'] ?? null;
        $this->swellWaveDirection = $values['swellWaveDirection'] ?? null;
        $this->swellWavePeriod = $values['swellWavePeriod'] ?? null;
        $this->seaLevelHeightMsl = $values['seaLevelHeightMsl'] ?? null;
        $this->seaSurfaceTemperature = $values['seaSurfaceTemperature'] ?? null;
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
