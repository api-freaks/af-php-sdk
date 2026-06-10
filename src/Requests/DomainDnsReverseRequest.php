<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainDnsReverseRequestFormat;
use Apifreaks\Types\DomainDnsReverseRequestType;

class DomainDnsReverseRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainDnsReverseRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * The type of reverse DNS lookup to perform. Determines how the value parameter is interpreted:
     * - A: IPv4 CIDR block
     * - AAAA: IPv6 CIDR block
     * - MX: Mail provider domain
     * - NS: Name server provider hostname
     * - SOA: SOA record admin domain
     * - SPF/TXT: Target verification strings
     * - CNAME: Target hostname
     *
     * @var value-of<DomainDnsReverseRequestType> $type
     */
    public string $type;

    /**
     * @var string $value Provide an IP or CIDR for A/AAAA lookups, or a hostname/selector for MX, NS, SOA, SPF, TXT, and CNAME queries. Wildcard regex patterns are also supported (e.g., mail.google.com, m*.google.com, _spf.g*.com, s*.g*.com).
     */
    public string $value;

    /**
     * @var ?bool $exact Accepts 'true' or 'false'. "true" returns only records that exactly match the input (NS, MX, CNAME, SOA, SPF, TXT). "false" returns all matches (default when omitted).
     */
    public ?bool $exact;

    /**
     * @var ?int $page Page number to paginate through results (defaults to 1).
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   type: value-of<DomainDnsReverseRequestType>,
     *   value: string,
     *   format?: ?value-of<DomainDnsReverseRequestFormat>,
     *   exact?: ?bool,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->type = $values['type'];
        $this->value = $values['value'];
        $this->exact = $values['exact'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
