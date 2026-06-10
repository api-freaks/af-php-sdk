<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkGeolocationLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkGeolocationLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkGeolocationLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $lang Language of the response.
     */
    public ?string $lang;

    /**
     * @var ?string $fields Comma-separated list of fields to include in the response. Can include "geo".
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma-separated list of fields to exclude from the response (except "ip").
     */
    public ?string $excludes;

    /**
     * @var ?string $include Comma-separated list of additional information to include in the response.
     */
    public ?string $include;

    /**
     * @var array<string> $ips List of IP addresses or hostnames to lookup
     */
    #[JsonProperty('ips'), ArrayType(['string'])]
    public array $ips;

    /**
     * @param array{
     *   apiKey: string,
     *   ips: array<string>,
     *   format?: ?value-of<BulkGeolocationLookupRequestFormat>,
     *   lang?: ?string,
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
