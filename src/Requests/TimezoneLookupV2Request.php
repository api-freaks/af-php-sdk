<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\TimezoneLookupV2RequestFormat;
use Apifreaks\Types\TimezoneLookupV2RequestLang;

class TimezoneLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<TimezoneLookupV2RequestFormat> $format Format of the response. Possible values: json, xml.
     */
    public ?string $format;

    /**
     * @var ?string $ip IPv4 or IPv6 address to extract timezone information.
     */
    public ?string $ip;

    /**
     * @var ?string $tz Timezone name in IANA format (e.g., Asia/Kolkata) to retrieve information directly.
     */
    public ?string $tz;

    /**
     * @var ?string $location Location string (preferably city and country) to extract timezone.
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude for geolocation-based timezone lookup. Only time_zone is returned for this mode; no location object is included.
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude for geolocation-based timezone lookup. Only time_zone is returned for this mode; no location object is included.
     */
    public ?float $long;

    /**
     * @var ?value-of<TimezoneLookupV2RequestLang> $lang Response language for location fields. Default: en.
     */
    public ?string $lang;

    /**
     * @var ?string $iataCode 3-letter IATA airport code (e.g., LHR) to extract timezone.
     */
    public ?string $iataCode;

    /**
     * @var ?string $icaoCode 4-letter ICAO airport code (e.g., KJFK) to extract timezone.
     */
    public ?string $icaoCode;

    /**
     * @var ?string $loCode 5-letter UN/LOCODE city code to extract timezone.
     */
    public ?string $loCode;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<TimezoneLookupV2RequestFormat>,
     *   ip?: ?string,
     *   tz?: ?string,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   lang?: ?value-of<TimezoneLookupV2RequestLang>,
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
