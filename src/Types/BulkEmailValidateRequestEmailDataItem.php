<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateRequestEmailDataItem extends JsonSerializableType
{
    /**
     * @var string $email Email address to validate
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Name associated with the email address
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $ip IP address associated with the email address
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @param array{
     *   email: string,
     *   name?: ?string,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
        $this->ip = $values['ip'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
