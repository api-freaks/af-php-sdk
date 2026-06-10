<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainDnsLookupRequestFormat;

class DomainDnsLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainDnsLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $hostName Hostname or URL whose DNS records are required.
     */
    public ?string $hostName;

    /**
     * @var ?string $ipAddress The IP address for requested DNS's PTR record. 'type' parameter must be set to 'all'.
     */
    public ?string $ipAddress;

    /**
     * @var ?array<string> $type A comma-separated list of DNS record types for lookup. Possible values: A, AAAA, MX, NS, SOA, SPF, TXT, CNAME, or all. When ipAddress is provided, type must be "all".
     */
    public ?array $type;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<DomainDnsLookupRequestFormat>,
     *   hostName?: ?string,
     *   ipAddress?: ?string,
     *   type?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->hostName = $values['hostName'] ?? null;
        $this->ipAddress = $values['ipAddress'] ?? null;
        $this->type = $values['type'] ?? null;
    }
}
