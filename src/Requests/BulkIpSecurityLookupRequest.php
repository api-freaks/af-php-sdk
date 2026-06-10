<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkIpSecurityLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkIpSecurityLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkIpSecurityLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $fields Comma-separated list of fields to return. Supports dot notation (e.g. security.threat_score).
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma-separated list of fields to remove from the response. Supports dot notation (e.g. security.is_tor).
     */
    public ?string $excludes;

    /**
     * @var array<string> $ips List of IP addresses to lookup
     */
    #[JsonProperty('ips'), ArrayType(['string'])]
    public array $ips;

    /**
     * @param array{
     *   apiKey: string,
     *   ips: array<string>,
     *   format?: ?value-of<BulkIpSecurityLookupRequestFormat>,
     *   fields?: ?string,
     *   excludes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->excludes = $values['excludes'] ?? null;
        $this->ips = $values['ips'];
    }
}
