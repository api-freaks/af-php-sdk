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
     * @var ?string $hostName Hostname or URL whose DNS records are required. Give either `host-name` or `ipAddress`.
     */
    public ?string $hostName;

    /**
     * @var ?string $ipAddress The IP address whose PTR (reverse DNS) record is required. Give either `host-name` or `ipAddress`; with `ipAddress`, set `type` to `all` or `PTR`.
     */
    public ?string $ipAddress;

    /**
     * @var ?array<string> $type DNS record types to look up, sent as a comma-separated list (e.g. `A,MX`). Possible values: A, AAAA, MX, NS, SOA, SPF, TXT, CNAME, PTR, or all. When ipAddress is provided, use "all" or "PTR".
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
