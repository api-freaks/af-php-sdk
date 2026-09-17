<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkDomainDnsLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainDnsLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkDomainDnsLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * A comma-separated list of DNS record types for lookup.
     * Possible values: A, AAAA, MX, NS, SOA, SPF, TXT, CNAME, or all
     *
     * @var ?array<string> $type
     */
    public ?array $type;

    /**
     * @var array<string> $domainNames List of hostnames to lookup DNS records for
     */
    #[JsonProperty('domainNames'), ArrayType(['string'])]
    public array $domainNames;

    /**
     * @var ?array<string> $ipAddresses Array of IP addresses to include in the lookup for PTR record enrichment.
     */
    #[JsonProperty('ipAddresses'), ArrayType(['string'])]
    public ?array $ipAddresses;

    /**
     * @param array{
     *   apiKey: string,
     *   domainNames: array<string>,
     *   format?: ?value-of<BulkDomainDnsLookupRequestFormat>,
     *   type?: ?array<string>,
     *   ipAddresses?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->domainNames = $values['domainNames'];
        $this->ipAddresses = $values['ipAddresses'] ?? null;
    }
}
