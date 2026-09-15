<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GeolocationLookupV2RequestFormat;
use Apifreaks\Types\GeolocationLookupV2RequestLang;

class GeolocationLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GeolocationLookupV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $ip IPv4, IPv6, or hostname for geolocation lookup.
     */
    public ?string $ip;

    /**
     * @var ?value-of<GeolocationLookupV2RequestLang> $lang Response language for location fields. Default: en.
     */
    public ?string $lang;

    /**
     * @var ?string $fields Comma-separated list of fields to include in response. For example, `location` includes all location fields, `location.city` is a specific field.
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma-separated list of fields to exclude from response.
     */
    public ?string $excludes;

    /**
     * @var ?string $include Comma-separated list of additional data modules to include. Possible values: security (threat intelligence), hostname (IP-Hostname lookup), liveHostname (live hostname lookup), hostnameFallbackLive (hostname with live fallback), user_agent (parse User-Agent header), abuse (abuse contact info), dma_code (DMA code), geo_accuracy (accuracy_radius, confidence, locality), * (all modules).
     */
    public ?string $include;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<GeolocationLookupV2RequestFormat>,
     *   ip?: ?string,
     *   lang?: ?value-of<GeolocationLookupV2RequestLang>,
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
