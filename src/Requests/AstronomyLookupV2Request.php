<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\AstronomyLookupV2RequestFormat;
use Apifreaks\Types\AstronomyLookupV2RequestLang;
use DateTime;

class AstronomyLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<AstronomyLookupV2RequestFormat> $format Format of the response. Can be "json" or "xml".
     */
    public ?string $format;

    /**
     * @var ?string $location Extract astronomy information using location (preferably city)
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude to extract astronomy information using location coordinates
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude to extract astronomy information using location coordinates
     */
    public ?float $long;

    /**
     * @var ?string $ip IPv4 or IPv6 address to extract astronomy information using IP address
     */
    public ?string $ip;

    /**
     * @var ?value-of<AstronomyLookupV2RequestLang> $lang Response language of "location" field in case of lookup through IP address only.
     */
    public ?string $lang;

    /**
     * @var ?DateTime $date Specific date (format YYYY-MM-DD) for which astronomy data is required
     */
    public ?DateTime $date;

    /**
     * @var ?float $elevation Elevation above sea level at the location, in meters. The value should be between 0 meter and a maximum value of 10,000 meters. Negative value is set to 0.
     */
    public ?float $elevation;

    /**
     * @var ?string $timeZone Time zone to receive all time-based data in your preferred local time.
     */
    public ?string $timeZone;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<AstronomyLookupV2RequestFormat>,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   lang?: ?value-of<AstronomyLookupV2RequestLang>,
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
