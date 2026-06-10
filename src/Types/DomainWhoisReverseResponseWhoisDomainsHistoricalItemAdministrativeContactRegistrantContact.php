<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistrantContact extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $company
     */
    #[JsonProperty('company')]
    public ?string $company;

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
     * @var ?string $countryName
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $emailAddress
     */
    #[JsonProperty('email_address')]
    public ?string $emailAddress;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $fax
     */
    #[JsonProperty('fax')]
    public ?string $fax;

    /**
     * @var ?string $mailingAddress
     */
    #[JsonProperty('mailing_address')]
    public ?string $mailingAddress;

    /**
     * @param array{
     *   name?: ?string,
     *   company?: ?string,
     *   street?: ?string,
     *   city?: ?string,
     *   state?: ?string,
     *   zipCode?: ?string,
     *   countryName?: ?string,
     *   countryCode?: ?string,
     *   emailAddress?: ?string,
     *   phone?: ?string,
     *   fax?: ?string,
     *   mailingAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->company = $values['company'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->zipCode = $values['zipCode'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->emailAddress = $values['emailAddress'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->fax = $values['fax'] ?? null;
        $this->mailingAddress = $values['mailingAddress'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
