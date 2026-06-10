<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkCurrentWeatherRequestLocationsItem extends JsonSerializableType
{
    /**
     * @var ?string $location City name, place name, or full address
     */
    #[JsonProperty('location')]
    public ?string $location;

    /**
     * @var ?float $lat Latitude
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?float $long Longitude
     */
    #[JsonProperty('long')]
    public ?float $long;

    /**
     * @var ?string $ip IP address
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
