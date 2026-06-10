<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainSslLookupRequestFormat;

class DomainSslLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainSslLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domainName Domain name or URL whose SSL certificate lookup is required
     */
    public string $domainName;

    /**
     * @var ?bool $sslRaw Set to true to get the raw openSSL response of the domain
     */
    public ?bool $sslRaw;

    /**
     * @param array{
     *   apiKey: string,
     *   domainName: string,
     *   format?: ?value-of<DomainSslLookupRequestFormat>,
     *   sslRaw?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domainName = $values['domainName'];
        $this->sslRaw = $values['sslRaw'] ?? null;
    }
}
