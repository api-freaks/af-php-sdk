<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainSslChainLookupRequestFormat;

class DomainSslChainLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainSslChainLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domainName Domain name or URL whose SSL certificate chain lookup is required
     */
    public string $domainName;

    /**
     * @var ?bool $sslRaw Set to true to get the raw openSSL response for each certificate in the chain
     */
    public ?bool $sslRaw;

    /**
     * @param array{
     *   apiKey: string,
     *   domainName: string,
     *   format?: ?value-of<DomainSslChainLookupRequestFormat>,
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
