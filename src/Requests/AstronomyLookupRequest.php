<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\AstronomyLookupRequestFormat;
use DateTime;

class AstronomyLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<AstronomyLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $location Location name or address
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude for location coordinates
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude for location coordinates
     */
    public ?float $long;

    /**
     * @var ?string $ip IP address for location detection
     */
    public ?string $ip;

    /**
     * @var ?string $lang
     */
    public ?string $lang;

    /**
     * @var ?DateTime $date Date for astronomy data (YYYY-MM-DD)
     */
    public ?DateTime $date;

    /**
     * @var ?float $elevation Timezone of the location for which astronomy data is required
     */
    public ?float $elevation;

    /**
     * @var ?string $timeZone
     */
    public ?string $timeZone;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<AstronomyLookupRequestFormat>,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   lang?: ?string,
     *   date?: ?DateTime,
     *   elevation?: ?float,
     *   timeZone?: ?string,
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
        $this->lang = $values['lang'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->elevation = $values['elevation'] ?? null;
        $this->timeZone = $values['timeZone'] ?? null;
    }
}
