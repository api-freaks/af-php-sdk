<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainWhoisHistoryRequestFormat;

class DomainWhoisHistoryRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainWhoisHistoryRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domainName Domain name for historical WHOIS lookup
     */
    public string $domainName;

    /**
     * @param array{
     *   apiKey: string,
     *   domainName: string,
     *   format?: ?value-of<DomainWhoisHistoryRequestFormat>,
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
