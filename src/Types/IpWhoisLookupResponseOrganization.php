<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class IpWhoisLookupResponseOrganization extends JsonSerializableType
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
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<string> $description
     */
    #[JsonProperty('description'), ArrayType(['string'])]
    public ?array $description;

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
     * @var ?string $district
     */
    #[JsonProperty('district')]
    public ?string $district;

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
     * @var ?float $latitude
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?float $longitude
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?array<string> $email
     */
    #[JsonProperty('email'), ArrayType(['string'])]
    public ?array $email;

    /**
     * @var ?array<string> $abuseMailbox
     */
    #[JsonProperty('abuse_mailbox'), ArrayType(['string'])]
    public ?array $abuseMailbox;

    /**
     * @var ?array<string> $phone
     */
    #[JsonProperty('phone'), ArrayType(['string'])]
    public ?array $phone;

    /**
     * @var ?array<string> $faxNo
     */
    #[JsonProperty('fax_no'), ArrayType(['string'])]
    public ?array $faxNo;

    /**
     * @var ?array<string> $organizations
     */
    #[JsonProperty('organizations'), ArrayType(['string'])]
    public ?array $organizations;

    /**
     * @var ?array<string> $adminContacts
     */
    #[JsonProperty('admin_contacts'), ArrayType(['string'])]
    public ?array $adminContacts;

    /**
     * @var ?array<string> $techContacts
     */
    #[JsonProperty('tech_contacts'), ArrayType(['string'])]
    public ?array $techContacts;

    /**
     * @var ?array<string> $abuseContacts
     */
    #[JsonProperty('abuse_contacts'), ArrayType(['string'])]
    public ?array $abuseContacts;

    /**
     * @var ?array<string> $languages
     */
    #[JsonProperty('languages'), ArrayType(['string'])]
    public ?array $languages;

    /**
     * @var ?array<string> $remarks
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @param array{
     *   handle?: ?string,
     *   name?: ?string,
     *   type?: ?string,
     *   description?: ?array<string>,
     *   address?: ?array<string>,
     *   street?: ?string,
     *   city?: ?string,
     *   district?: ?string,
     *   state?: ?string,
     *   zipCode?: ?string,
     *   country?: ?array<string>,
     *   latitude?: ?float,
     *   longitude?: ?float,
     *   email?: ?array<string>,
     *   abuseMailbox?: ?array<string>,
     *   phone?: ?array<string>,
     *   faxNo?: ?array<string>,
     *   organizations?: ?array<string>,
     *   adminContacts?: ?array<string>,
     *   techContacts?: ?array<string>,
     *   abuseContacts?: ?array<string>,
     *   languages?: ?array<string>,
     *   remarks?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->handle = $values['handle'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->zipCode = $values['zipCode'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->abuseMailbox = $values['abuseMailbox'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->faxNo = $values['faxNo'] ?? null;
        $this->organizations = $values['organizations'] ?? null;
        $this->adminContacts = $values['adminContacts'] ?? null;
        $this->techContacts = $values['techContacts'] ?? null;
        $this->abuseContacts = $values['abuseContacts'] ?? null;
        $this->languages = $values['languages'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
