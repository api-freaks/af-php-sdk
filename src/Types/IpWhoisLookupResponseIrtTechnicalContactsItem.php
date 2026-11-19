<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

/**
 * Contact person or role object with handle, name, email, phone, and source reference.
 */
class IpWhoisLookupResponseIrtTechnicalContactsItem extends JsonSerializableType
{
    /**
     * @var string $handle Handle or unique identifier of this contact in WHOIS data.
     */
    #[JsonProperty('handle')]
    public string $handle;

    /**
     * @var ?string $name Name of the contact person or role.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string> $address Address lines for this contact.
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
     * @var ?string $country Parsed country from the address field.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?array<string> $email Email addresses for this contact.
     */
    #[JsonProperty('email'), ArrayType(['string'])]
    public ?array $email;

    /**
     * @var ?array<string> $abuseMailbox Abuse mailbox email addresses for this contact.
     */
    #[JsonProperty('abuse_mailbox'), ArrayType(['string'])]
    public ?array $abuseMailbox;

    /**
     * @var ?array<string> $phone Phone numbers for this contact.
     */
    #[JsonProperty('phone'), ArrayType(['string'])]
    public ?array $phone;

    /**
     * @var ?array<string> $faxNo Fax numbers for this contact.
     */
    #[JsonProperty('fax_no'), ArrayType(['string'])]
    public ?array $faxNo;

    /**
     * @var ?array<string> $organizations Handles of organization objects managing this contact.
     */
    #[JsonProperty('organizations'), ArrayType(['string'])]
    public ?array $organizations;

    /**
     * @var ?array<string> $adminContacts Handles of admin persons or roles linked to this contact.
     */
    #[JsonProperty('admin_contacts'), ArrayType(['string'])]
    public ?array $adminContacts;

    /**
     * @var ?array<string> $techContacts Handles of technical persons or roles linked to this contact.
     */
    #[JsonProperty('tech_contacts'), ArrayType(['string'])]
    public ?array $techContacts;

    /**
     * @var ?array<string> $remarks Remarks for this contact object.
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?array<string> $notify Notify email addresses for this contact object.
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $mntBy Maintainer handles for this contact object.
     */
    #[JsonProperty('mnt_by'), ArrayType(['string'])]
    public ?array $mntBy;

    /**
     * @var ?array<string> $mntRef Referenced maintainer handles for this contact object.
     */
    #[JsonProperty('mnt_ref'), ArrayType(['string'])]
    public ?array $mntRef;

    /**
     * @var ?DateTime $dateCreated Registration date of this contact object (YYYY-MM-DD).
     */
    #[JsonProperty('date_created'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateCreated;

    /**
     * @var ?DateTime $dateUpdated Last update date of this contact object (YYYY-MM-DD).
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
     *   source: string,
     *   name?: ?string,
     *   address?: ?array<string>,
     *   street?: ?string,
     *   city?: ?string,
     *   district?: ?string,
     *   state?: ?string,
     *   zipCode?: ?string,
     *   country?: ?string,
     *   email?: ?array<string>,
     *   abuseMailbox?: ?array<string>,
     *   phone?: ?array<string>,
     *   faxNo?: ?array<string>,
     *   organizations?: ?array<string>,
     *   adminContacts?: ?array<string>,
     *   techContacts?: ?array<string>,
     *   remarks?: ?array<string>,
     *   notify?: ?array<string>,
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
        $this->name = $values['name'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->zipCode = $values['zipCode'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->abuseMailbox = $values['abuseMailbox'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->faxNo = $values['faxNo'] ?? null;
        $this->organizations = $values['organizations'] ?? null;
        $this->adminContacts = $values['adminContacts'] ?? null;
        $this->techContacts = $values['techContacts'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
        $this->notify = $values['notify'] ?? null;
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
