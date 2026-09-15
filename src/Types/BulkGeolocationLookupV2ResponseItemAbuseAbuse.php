<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Abuse contact information for the IP.
 */
class BulkGeolocationLookupV2ResponseItemAbuseAbuse extends JsonSerializableType
{
    /**
     * @var ?string $route Abuse-handling IP range in CIDR notation.
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?string $country ISO 3166-1 alpha-2 country code of the abuse contact.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $name Display name for the abuse contact.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $organization Organization name for the abuse contact.
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $kind Contact type: group or individual.
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $address Registered address of the organization owning the IP.
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?array<string> $emails Abuse contact email addresses.
     */
    #[JsonProperty('emails'), ArrayType(['string'])]
    public ?array $emails;

    /**
     * @var ?array<string> $phoneNumbers Abuse contact phone numbers.
     */
    #[JsonProperty('phone_numbers'), ArrayType(['string'])]
    public ?array $phoneNumbers;

    /**
     * @param array{
     *   route?: ?string,
     *   country?: ?string,
     *   name?: ?string,
     *   organization?: ?string,
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
        $this->name = $values['name'] ?? null;
        $this->organization = $values['organization'] ?? null;
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
