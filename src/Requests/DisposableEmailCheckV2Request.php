<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DisposableEmailCheckV2RequestFormat;
use Apifreaks\Core\Json\JsonProperty;

class DisposableEmailCheckV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DisposableEmailCheckV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $email The email address to check.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $ip Optional IP address to look up for location and security data, such as the IP the signup came from.
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   apiKey: string,
     *   email: string,
     *   format?: ?value-of<DisposableEmailCheckV2RequestFormat>,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->email = $values['email'];
        $this->ip = $values['ip'] ?? null;
    }
}
