<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class MarineWeatherResponseForecastValueMinutelyItem extends JsonSerializableType
{
    /**
     * @var ?string $timestamp Local timestamp of this reading (format YYYY-MM-DDTHH:mm, not ISO 8601).
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

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
     * @var ?float $seaLevelHeightMsl Sea level height relative to mean sea level (m)
     */
    #[JsonProperty('sea_level_height_msl')]
    public ?float $seaLevelHeightMsl;

    /**
     * @param array{
     *   timestamp?: ?string,
     *   oceanCurrentVelocity?: ?float,
     *   oceanCurrentDirection?: ?int,
     *   seaLevelHeightMsl?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->oceanCurrentVelocity = $values['oceanCurrentVelocity'] ?? null;
        $this->oceanCurrentDirection = $values['oceanCurrentDirection'] ?? null;
        $this->seaLevelHeightMsl = $values['seaLevelHeightMsl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
