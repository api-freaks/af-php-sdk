<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainAvailabilitySuggestionsRequestFormat;
use Apifreaks\Types\DomainAvailabilitySuggestionsRequestSource;

class DomainAvailabilitySuggestionsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainAvailabilitySuggestionsRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domain Domain name for availability and suggestions.
     */
    public string $domain;

    /**
     * @var ?value-of<DomainAvailabilitySuggestionsRequestSource> $source Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.
     */
    public ?string $source;

    /**
     * @var ?int $count Number of suggestions to retrieve.
     */
    public ?int $count;

    /**
     * @param array{
     *   apiKey: string,
     *   domain: string,
     *   format?: ?value-of<DomainAvailabilitySuggestionsRequestFormat>,
     *   source?: ?value-of<DomainAvailabilitySuggestionsRequestSource>,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domain = $values['domain'];
        $this->source = $values['source'] ?? null;
        $this->count = $values['count'] ?? null;
    }
}
