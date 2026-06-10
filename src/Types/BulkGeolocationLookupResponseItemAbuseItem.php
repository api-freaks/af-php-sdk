<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkGeolocationLookupResponseItemAbuseItem extends JsonSerializableType
{
    /**
     * @var ?string $route The IP range of the abuse contact
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?string $country The country code of the abuse contact
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $handle The handle of the abuse contact
     */
    #[JsonProperty('handle')]
    public ?string $handle;

    /**
     * @var ?string $name The name of the abuse contact
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $organization The organization of the abuse contact
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $role The role of the abuse contact
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * @var ?string $kind The kind of the abuse contact
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $address The address of the abuse contact
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?array<string> $emails The list of email addresses of the abuse contact
     */
    #[JsonProperty('emails'), ArrayType(['string'])]
    public ?array $emails;

    /**
     * @var ?array<string> $phoneNumbers The list of phone numbers of the abuse contact
     */
    #[JsonProperty('phone_numbers'), ArrayType(['string'])]
    public ?array $phoneNumbers;

    /**
     * @param array{
     *   route?: ?string,
     *   country?: ?string,
     *   handle?: ?string,
     *   name?: ?string,
     *   organization?: ?string,
     *   role?: ?string,
     *   kind?: ?string,
     *   address?: ?string,
     *   emails?: ?array<string>,
     *   phoneNumbers?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->route = $values['route'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->handle = $values['handle'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->role = $values['role'] ?? null;
        $this->kind = $values['kind'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->emails = $values['emails'] ?? null;
        $this->phoneNumbers = $values['phoneNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
