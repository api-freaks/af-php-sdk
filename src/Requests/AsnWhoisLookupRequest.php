<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\AsnWhoisLookupRequestFormat;

class AsnWhoisLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<AsnWhoisLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $asn The Autonomous System Number (ASN) to retrieve WHOIS data for. Can be prefixed with 'as' or not.
     */
    public string $asn;

    /**
     * @param array{
     *   apiKey: string,
     *   asn: string,
     *   format?: ?value-of<AsnWhoisLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->asn = $values['asn'];
    }
}
