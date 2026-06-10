<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\EmailValidateRequestFormat;
use Apifreaks\Core\Json\JsonProperty;

class EmailValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<EmailValidateRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var string $email Email address to validate
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Name of the email address
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $ip IP address of the email address
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   apiKey: string,
     *   email: string,
     *   format?: ?value-of<EmailValidateRequestFormat>,
     *   name?: ?string,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
        $this->ip = $values['ip'] ?? null;
    }
}
