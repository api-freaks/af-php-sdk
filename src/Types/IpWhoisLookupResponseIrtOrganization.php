<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

/**
 * Organization object containing the registrant's handle, name, address, contact details, and linked admin/tech/abuse contacts.
 */
class IpWhoisLookupResponseIrtOrganization extends JsonSerializableType
{
    /**
     * @var string $handle Handle or unique identifier of this organization in WHOIS data.
     */
    #[JsonProperty('handle')]
    public string $handle;

    /**
     * @var string $name Name of the organization.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $type Type of the organization (e.g., BUSINESS, REGISTRY).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<string> $description Description values from the organization object.
     */
    #[JsonProperty('description'), ArrayType(['string'])]
    public ?array $description;

    /**
     * @var ?array<string> $address Full address lines of the organization.
     */
    #[JsonProperty('address'), ArrayType(['string'])]
    public ?array $address;

    /**
     * @var ?string $street Parsed street address from the address field.
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $city Parsed city from the address field.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $district Parsed district from the address field.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $state Parsed state from the address field.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $zipCode Parsed ZIP code from the address field.
     */
    #[JsonProperty('zip_code')]
    public ?string $zipCode;

    /**
     * @var ?array<string> $country ISO 3166-1 alpha-2 country codes for the organization.
     */
    #[JsonProperty('country'), ArrayType(['string'])]
    public ?array $country;

    /**
     * @var ?float $latitude Latitude parsed from the geoloc field.
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?float $longitude Longitude parsed from the geoloc field.
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?array<string> $email Email addresses for the organization.
     */
    #[JsonProperty('email'), ArrayType(['string'])]
    public ?array $email;

    /**
     * @var ?array<string> $abuseMailbox Abuse mailbox email addresses for the organization.
     */
    #[JsonProperty('abuse_mailbox'), ArrayType(['string'])]
    public ?array $abuseMailbox;

    /**
     * @var ?array<string> $phone Phone numbers for the organization.
     */
    #[JsonProperty('phone'), ArrayType(['string'])]
    public ?array $phone;

    /**
     * @var ?array<string> $faxNo Fax numbers for the organization.
     */
    #[JsonProperty('fax_no'), ArrayType(['string'])]
    public ?array $faxNo;

    /**
     * @var ?array<string> $adminContacts Handles of admin persons or roles linked to this organization.
     */
    #[JsonProperty('admin_contacts'), ArrayType(['string'])]
    public ?array $adminContacts;

    /**
     * @var ?array<string> $techContacts Handles of technical persons or roles linked to this organization.
     */
    #[JsonProperty('tech_contacts'), ArrayType(['string'])]
    public ?array $techContacts;

    /**
     * @var ?array<string> $abuseContacts Handles of abuse persons or roles linked to this organization.
     */
    #[JsonProperty('abuse_contacts'), ArrayType(['string'])]
    public ?array $abuseContacts;

    /**
     * @var ?array<string> $remarks Remarks for this organization object.
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?array<string> $notify Notify email addresses for this organization object.
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $refNfy Reference notification email addresses for this organization object.
     */
    #[JsonProperty('ref_nfy'), ArrayType(['string'])]
    public ?array $refNfy;

    /**
     * @var ?array<string> $mntBy Maintainer handles for this organization object.
     */
    #[JsonProperty('mnt_by'), ArrayType(['string'])]
    public ?array $mntBy;

    /**
     * @var ?array<string> $mntRef Referenced maintainer handles for this organization object.
     */
    #[JsonProperty('mnt_ref'), ArrayType(['string'])]
    public ?array $mntRef;

    /**
     * @var ?DateTime $dateCreated Registration date of this organization object (YYYY-MM-DD).
     */
    #[JsonProperty('date_created'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateCreated;

    /**
     * @var ?DateTime $dateUpdated Last update date of this organization object (YYYY-MM-DD).
     */
    #[JsonProperty('date_updated'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateUpdated;

    /**
     * @var string $source WHOIS data source (RIR registry URL) for this object.
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   handle: string,
     *   name: string,
     *   source: string,
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
     *   adminContacts?: ?array<string>,
     *   techContacts?: ?array<string>,
     *   abuseContacts?: ?array<string>,
     *   remarks?: ?array<string>,
     *   notify?: ?array<string>,
     *   refNfy?: ?array<string>,
     *   mntBy?: ?array<string>,
     *   mntRef?: ?array<string>,
     *   dateCreated?: ?DateTime,
     *   dateUpdated?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->handle = $values['handle'];
        $this->name = $values['name'];
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
        $this->adminContacts = $values['adminContacts'] ?? null;
        $this->techContacts = $values['techContacts'] ?? null;
        $this->abuseContacts = $values['abuseContacts'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->refNfy = $values['refNfy'] ?? null;
        $this->mntBy = $values['mntBy'] ?? null;
        $this->mntRef = $values['mntRef'] ?? null;
        $this->dateCreated = $values['dateCreated'] ?? null;
        $this->dateUpdated = $values['dateUpdated'] ?? null;
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
