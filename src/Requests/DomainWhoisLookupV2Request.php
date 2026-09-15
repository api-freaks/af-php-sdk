<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainWhoisLookupV2RequestFormat;

class DomainWhoisLookupV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainWhoisLookupV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domainName Domain name to retrieve WHOIS data for (e.g. example.com).
     */
    public string $domainName;

    /**
     * @param array{
     *   apiKey: string,
     *   domainName: string,
     *   format?: ?value-of<DomainWhoisLookupV2RequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domainName = $values['domainName'];
    }
}
