<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

class AsnWhoisLookupResponseParsedWhoisResponseOrganization extends JsonSerializableType
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
     * @var ?array<string> $address
     */
    #[JsonProperty('address'), ArrayType(['string'])]
    public ?array $address;

    /**
     * @var ?string $street
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $zipCode
     */
    #[JsonProperty('zip_code')]
    public ?string $zipCode;

    /**
     * @var ?array<string> $country
     */
    #[JsonProperty('country'), ArrayType(['string'])]
    public ?array $country;

    /**
     * @var ?string $addressCountry
     */
    #[JsonProperty('addressCountry')]
    public ?string $addressCountry;

    /**
     * @var ?DateTime $dateCreated
     */
    #[JsonProperty('date_created'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateCreated;

    /**
     * @var ?DateTime $dateUpdated
     */
    #[JsonProperty('date_updated'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateUpdated;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   handle?: ?string,
     *   name?: ?string,
     *   address?: ?array<string>,
     *   street?: ?string,
     *   city?: ?string,
     *   state?: ?string,
     *   zipCode?: ?string,
     *   country?: ?array<string>,
     *   addressCountry?: ?string,
     *   dateCreated?: ?DateTime,
     *   dateUpdated?: ?DateTime,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->handle = $values['handle'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->zipCode = $values['zipCode'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->addressCountry = $values['addressCountry'] ?? null;
        $this->dateCreated = $values['dateCreated'] ?? null;
        $this->dateUpdated = $values['dateUpdated'] ?? null;
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
