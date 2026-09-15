<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkDomainWhoisLookupV2RequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainWhoisLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkDomainWhoisLookupV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $domainNames List of domain names to retrieve WHOIS data for.
     */
    #[JsonProperty('domainNames'), ArrayType(['string'])]
    public array $domainNames;

    /**
     * @param array{
     *   apiKey: string,
     *   domainNames: array<string>,
     *   format?: ?value-of<BulkDomainWhoisLookupV2RequestFormat>,
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
