<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrentWeatherRequestFormat;

class CurrentWeatherRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrentWeatherRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var ?string $location City name, place name, or full address.
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude of the location.
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude of the location.
     */
    public ?float $long;

    /**
     * @var ?string $ip IP(v4 or v6) address for location inference.
     */
    public ?string $ip;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<CurrentWeatherRequestFormat>,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
