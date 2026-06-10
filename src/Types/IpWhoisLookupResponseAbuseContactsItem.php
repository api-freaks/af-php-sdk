<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class IpWhoisLookupResponseAbuseContactsItem extends JsonSerializableType
{
    /**
     * @var ?string $handle
     */
    #[JsonProperty('handle')]
    public ?string $handle;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string> $email
     */
    #[JsonProperty('email'), ArrayType(['string'])]
    public ?array $email;

    /**
     * @var ?array<string> $phone
     */
    #[JsonProperty('phone'), ArrayType(['string'])]
    public ?array $phone;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   handle?: ?string,
     *   name?: ?string,
     *   email?: ?array<string>,
     *   phone?: ?array<string>,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->handle = $values['handle'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
