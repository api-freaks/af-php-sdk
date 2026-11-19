<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkDisposableEmailCheckV2RequestEmailDataItem extends JsonSerializableType
{
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
     *   email: string,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
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
