<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\TimezoneLookupRequestFormat;
use Apifreaks\Types\TimezoneLookupRequestLang;

class TimezoneLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<TimezoneLookupRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var ?string $ip IPv4 or IPv6 address to extract timezone information.
     */
    public ?string $ip;

    /**
     * @var ?string $tz Timezone name (e.g., "Asia/Kolkata") to retrieve information directly.
     */
    public ?string $tz;

    /**
     * @var ?string $location Location string (preferably city and country) to extract timezone.
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude for geolocation lookup.
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude for geolocation lookup.
     */
    public ?float $long;

    /**
     * @var ?value-of<TimezoneLookupRequestLang> $lang Language code for response localization (default is "en").
     */
    public ?string $lang;

    /**
     * @var ?string $iataCode 3-letter IATA airport code (e.g., JFK).
     */
    public ?string $iataCode;

    /**
     * @var ?string $icaoCode 4-letter ICAO airport code (e.g., KJFK).
     */
    public ?string $icaoCode;

    /**
     * @var ?string $loCode 5-letter UN/LO city code.
     */
    public ?string $loCode;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<TimezoneLookupRequestFormat>,
     *   ip?: ?string,
     *   tz?: ?string,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   lang?: ?value-of<TimezoneLookupRequestLang>,
     *   iataCode?: ?string,
     *   icaoCode?: ?string,
     *   loCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->tz = $values['tz'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->lang = $values['lang'] ?? null;
        $this->iataCode = $values['iataCode'] ?? null;
        $this->icaoCode = $values['icaoCode'] ?? null;
        $this->loCode = $values['loCode'] ?? null;
    }
}
