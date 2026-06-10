<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class MarineWeatherResponseForecastValueMinutelyItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

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
     *   timestamp?: ?DateTime,
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
