<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainWhoisLookupRequestFormat;

class DomainWhoisLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainWhoisLookupRequestFormat> $format Response format (defaults to json)
     */
    public ?string $format;

    /**
     * @var string $domainName Domain name for WHOIS lookup
     */
    public string $domainName;

    /**
     * @param array{
     *   apiKey: string,
     *   domainName: string,
     *   format?: ?value-of<DomainWhoisLookupRequestFormat>,
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
