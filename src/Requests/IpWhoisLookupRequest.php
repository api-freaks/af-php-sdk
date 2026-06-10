<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\IpWhoisLookupRequestFormat;

class IpWhoisLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<IpWhoisLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $ip The IP address (IPv4 or IPv6) for which WHOIS data is requested.
     */
    public string $ip;

    /**
     * @param array{
     *   apiKey: string,
     *   ip: string,
     *   format?: ?value-of<IpWhoisLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->ip = $values['ip'];
    }
}
