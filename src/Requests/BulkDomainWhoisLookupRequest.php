<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkDomainWhoisLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainWhoisLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkDomainWhoisLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $domainNames A list of domain names for which WHOIS data is requested.
     */
    #[JsonProperty('domainNames'), ArrayType(['string'])]
    public array $domainNames;

    /**
     * @param array{
     *   apiKey: string,
     *   domainNames: array<string>,
     *   format?: ?value-of<BulkDomainWhoisLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domainNames = $values['domainNames'];
    }
}
