<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkGeolocationLookupV2RequestFormat;
use Apifreaks\Types\BulkGeolocationLookupV2RequestLang;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkGeolocationLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkGeolocationLookupV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?value-of<BulkGeolocationLookupV2RequestLang> $lang Response language for location fields. Default: en.
     */
    public ?string $lang;

    /**
     * @var ?string $fields Comma-separated list of fields to include in the response. For example, `location` includes all location fields, `location.city` is a specific field.
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma-separated list of fields to exclude from response.
     */
    public ?string $excludes;

    /**
     * @var ?string $include Comma-separated list of additional data modules to include. Possible values: security (threat intelligence), hostname (IP-Hostname lookup), liveHostname (live hostname lookup), user_agent (parse User-Agent header), abuse (abuse contact info), * (all modules).
     */
    public ?string $include;

    /**
     * @var array<string> $ips List of IP addresses or hostnames to lookup.
     */
    #[JsonProperty('ips'), ArrayType(['string'])]
    public array $ips;

    /**
     * @param array{
     *   apiKey: string,
     *   ips: array<string>,
     *   format?: ?value-of<BulkGeolocationLookupV2RequestFormat>,
     *   lang?: ?value-of<BulkGeolocationLookupV2RequestLang>,
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
        $this->lang = $values['lang'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->excludes = $values['excludes'] ?? null;
        $this->include = $values['include'] ?? null;
        $this->ips = $values['ips'];
    }
}
