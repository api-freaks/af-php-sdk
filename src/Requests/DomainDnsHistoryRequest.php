<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainDnsHistoryRequestFormat;

class DomainDnsHistoryRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainDnsHistoryRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $hostName Hostname or URL whose historical DNS records are required
     */
    public string $hostName;

    /**
     * A comma-separated list of DNS record types for lookup.
     * Possible values: A, AAAA, MX, NS, SOA, SPF, TXT, CNAME, or all
     *
     * @var ?array<string> $type
     */
    public ?array $type;

    /**
     * @var ?int $page Page number for paginated results
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   hostName: string,
     *   format?: ?value-of<DomainDnsHistoryRequestFormat>,
     *   type?: ?array<string>,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->hostName = $values['hostName'];
        $this->type = $values['type'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
