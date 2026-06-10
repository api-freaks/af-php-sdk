<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainAvailabilityCheckRequestFormat;
use Apifreaks\Types\DomainAvailabilityCheckRequestSource;

class DomainAvailabilityCheckRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainAvailabilityCheckRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domain Domain name whose availability is to be checked.
     */
    public string $domain;

    /**
     * @var ?value-of<DomainAvailabilityCheckRequestSource> $source Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.
     */
    public ?string $source;

    /**
     * @param array{
     *   apiKey: string,
     *   domain: string,
     *   format?: ?value-of<DomainAvailabilityCheckRequestFormat>,
     *   source?: ?value-of<DomainAvailabilityCheckRequestSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domain = $values['domain'];
        $this->source = $values['source'] ?? null;
    }
}
