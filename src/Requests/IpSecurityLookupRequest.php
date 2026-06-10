<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\IpSecurityLookupRequestFormat;

class IpSecurityLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<IpSecurityLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $ip A valid IPv4 or IPv6 address to look up. If omitted, the API uses the public IP of the requesting client.
     */
    public ?string $ip;

    /**
     * @var ?string $fields Comma-separated list of fields to return. Supports dot notation (e.g. security.threat_score).
     */
    public ?string $fields;

    /**
     * @var ?string $excludes Comma-separated list of fields to remove from the response. Supports dot notation (e.g. security.is_tor).
     */
    public ?string $excludes;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<IpSecurityLookupRequestFormat>,
     *   ip?: ?string,
     *   fields?: ?string,
     *   excludes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->excludes = $values['excludes'] ?? null;
    }
}
