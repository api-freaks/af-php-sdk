<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkDomainAvailabilityCheckRequestFormat;
use Apifreaks\Types\BulkDomainAvailabilityCheckRequestSource;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainAvailabilityCheckRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkDomainAvailabilityCheckRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?value-of<BulkDomainAvailabilityCheckRequestSource> $source Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.
     */
    public ?string $source;

    /**
     * @var array<string> $domainNames List of domain names to check.
     */
    #[JsonProperty('domainNames'), ArrayType(['string'])]
    public array $domainNames;

    /**
     * @param array{
     *   apiKey: string,
     *   domainNames: array<string>,
     *   format?: ?value-of<BulkDomainAvailabilityCheckRequestFormat>,
     *   source?: ?value-of<BulkDomainAvailabilityCheckRequestSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->source = $values['source'] ?? null;
        $this->domainNames = $values['domainNames'];
    }
}
