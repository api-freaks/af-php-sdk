<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Daily marine forecast data
 */
class MarineWeatherResponseForecastValueDaily extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $waveHeightMax Maximum significant wave height (m)
     */
    #[JsonProperty('wave_height_max')]
    public ?float $waveHeightMax;

    /**
     * @var ?int $waveDirectionDominant Dominant direction of waves (°)
     */
    #[JsonProperty('wave_direction_dominant')]
    public ?int $waveDirectionDominant;

    /**
     * @var ?float $wavePeriodMax Maximum wave period (s)
     */
    #[JsonProperty('wave_period_max')]
    public ?float $wavePeriodMax;

    /**
     * @var ?float $windWaveHeightMax Maximum wind-driven wave height (m)
     */
    #[JsonProperty('wind_wave_height_max')]
    public ?float $windWaveHeightMax;

    /**
     * @var ?int $windWaveDirectionDominant Dominant wind-wave direction (°)
     */
    #[JsonProperty('wind_wave_direction_dominant')]
    public ?int $windWaveDirectionDominant;

    /**
     * @var ?float $windWavePeriodMax Maximum wind-wave period (s)
     */
    #[JsonProperty('wind_wave_period_max')]
    public ?float $windWavePeriodMax;

    /**
     * @var ?float $windWavePeakPeriodMax Maximum peak period of wind-driven waves (s)
     */
    #[JsonProperty('wind_wave_peak_period_max')]
    public ?float $windWavePeakPeriodMax;

    /**
     * @var ?float $swellWaveHeightMax Maximum swell wave height (m)
     */
    #[JsonProperty('swell_wave_height_max')]
    public ?float $swellWaveHeightMax;

    /**
     * @var ?int $swellWaveDirectionDominant Dominant swell wave direction (°)
     */
    #[JsonProperty('swell_wave_direction_dominant')]
    public ?int $swellWaveDirectionDominant;

    /**
     * @var ?float $swellWavePeriodMax Maximum swell wave period (s)
     */
    #[JsonProperty('swell_wave_period_max')]
    public ?float $swellWavePeriodMax;

    /**
     * @var ?float $swellWavePeakPeriodMax Maximum peak period of swell waves (s)
     */
    #[JsonProperty('swell_wave_peak_period_max')]
    public ?float $swellWavePeakPeriodMax;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   waveHeightMax?: ?float,
     *   waveDirectionDominant?: ?int,
     *   wavePeriodMax?: ?float,
     *   windWaveHeightMax?: ?float,
     *   windWaveDirectionDominant?: ?int,
     *   windWavePeriodMax?: ?float,
     *   windWavePeakPeriodMax?: ?float,
     *   swellWaveHeightMax?: ?float,
     *   swellWaveDirectionDominant?: ?int,
     *   swellWavePeriodMax?: ?float,
     *   swellWavePeakPeriodMax?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->waveHeightMax = $values['waveHeightMax'] ?? null;
        $this->waveDirectionDominant = $values['waveDirectionDominant'] ?? null;
        $this->wavePeriodMax = $values['wavePeriodMax'] ?? null;
        $this->windWaveHeightMax = $values['windWaveHeightMax'] ?? null;
        $this->windWaveDirectionDominant = $values['windWaveDirectionDominant'] ?? null;
        $this->windWavePeriodMax = $values['windWavePeriodMax'] ?? null;
        $this->windWavePeakPeriodMax = $values['windWavePeakPeriodMax'] ?? null;
        $this->swellWaveHeightMax = $values['swellWaveHeightMax'] ?? null;
        $this->swellWaveDirectionDominant = $values['swellWaveDirectionDominant'] ?? null;
        $this->swellWavePeriodMax = $values['swellWavePeriodMax'] ?? null;
        $this->swellWavePeakPeriodMax = $values['swellWavePeakPeriodMax'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
