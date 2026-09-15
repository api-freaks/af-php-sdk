<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
 */
class BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactResellerContact extends JsonSerializableType
{
    /**
     * @var ?string $name Contact's full name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $company Contact's organization or company name.
     */
    #[JsonProperty('company')]
    public ?string $company;

    /**
     * @var ?string $street Street address.
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $city City.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $state State or province.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $zipCode Postal/ZIP code.
     */
    #[JsonProperty('zip_code')]
    public ?string $zipCode;

    /**
     * @var ?string $countryName Full country name.
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryCode ISO 3166-1 alpha-2 country code.
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $emailAddress Contact email address, or a privacy-service redirect instruction.
     */
    #[JsonProperty('email_address')]
    public ?string $emailAddress;

    /**
     * @var ?string $phone Contact phone number.
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $fax Contact fax number.
     */
    #[JsonProperty('fax')]
    public ?string $fax;

    /**
     * @var ?string $mailingAddress Full combined mailing address, when published as a single string.
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
