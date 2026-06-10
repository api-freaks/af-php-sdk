<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GeolocationLookupRequestFormat;
use Apifreaks\Types\GeolocationLookupRequestLang;

class GeolocationLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GeolocationLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $ip IPv4, IPv6, or hostname for geolocation lookup
     */
    public ?string $ip;

    /**
     * @var ?value-of<GeolocationLookupRequestLang> $lang Response language for location fields
     */
    public ?string $lang;

    /**
     * @var ?string $fields Comma separated list of fields to include in response
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma separated list of fields to exclude from response
     */
    public ?string $excludes;

    /**
     * @var ?string $include Additional data to include (location, network, security, currency, time_zone, user_agent, country_metadata , hostname, liveHostname, hostnameFallbackLivet)
     */
    public ?string $include;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<GeolocationLookupRequestFormat>,
     *   ip?: ?string,
     *   lang?: ?value-of<GeolocationLookupRequestLang>,
     *   fields?: ?string,
     *   excludes?: ?string,
     *   include?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->lang = $values['lang'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->excludes = $values['excludes'] ?? null;
        $this->include = $values['include'] ?? null;
    }
}
