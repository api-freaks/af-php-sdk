<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\VatRateByIpRequestFormat;

class VatRateByIpRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<VatRateByIpRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var ?string $ipAddress IPv4 or IPv6 address to look up VAT rate for. If omitted, the originating IP address will be used.
     */
    public ?string $ipAddress;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<VatRateByIpRequestFormat>,
     *   ipAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->ipAddress = $values['ipAddress'] ?? null;
    }
}
