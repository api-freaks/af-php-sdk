<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

class IpWhoisLookupResponseAdministrativeContactsItem extends JsonSerializableType
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
     * @var ?array<string> $abuseMailbox Abuse mailbox email addresses for this contact.
     */
    #[JsonProperty('abuse_mailbox'), ArrayType(['string'])]
    public ?array $abuseMailbox;

    /**
     * @var ?array<string> $address Address lines for this contact.
     */
    #[JsonProperty('address'), ArrayType(['string'])]
    public ?array $address;

    /**
     * @var ?array<string> $adminContacts Handles of admin persons or roles linked to this contact.
     */
    #[JsonProperty('admin_contacts'), ArrayType(['string'])]
    public ?array $adminContacts;

    /**
     * @var ?string $city Parsed city from the address field.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $country Parsed country from the address field.
     */
    #[JsonProperty('country')]
    public ?string $country;

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
     * @var ?string $district Parsed district from the address field.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?array<string> $faxNo Fax numbers for this contact.
     */
    #[JsonProperty('fax_no'), ArrayType(['string'])]
    public ?array $faxNo;

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
     * @var ?array<string> $notify Notify email addresses for this contact object.
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $organizations Handles of organization objects managing this contact.
     */
    #[JsonProperty('organizations'), ArrayType(['string'])]
    public ?array $organizations;

    /**
     * @var ?array<string> $remarks Remarks for this contact object.
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?string $state Parsed state from the address field.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $street Parsed street address from the address field.
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?array<string> $techContacts Handles of technical persons or roles linked to this contact.
     */
    #[JsonProperty('tech_contacts'), ArrayType(['string'])]
    public ?array $techContacts;

    /**
     * @var ?string $zipCode Parsed ZIP code from the address field.
     */
    #[JsonProperty('zip_code')]
    public ?string $zipCode;

    /**
     * @param array{
     *   handle?: ?string,
     *   name?: ?string,
     *   email?: ?array<string>,
     *   phone?: ?array<string>,
     *   source?: ?string,
     *   abuseMailbox?: ?array<string>,
     *   address?: ?array<string>,
     *   adminContacts?: ?array<string>,
     *   city?: ?string,
     *   country?: ?string,
     *   dateCreated?: ?DateTime,
     *   dateUpdated?: ?DateTime,
     *   district?: ?string,
     *   faxNo?: ?array<string>,
     *   mntBy?: ?array<string>,
     *   mntRef?: ?array<string>,
     *   notify?: ?array<string>,
     *   organizations?: ?array<string>,
     *   remarks?: ?array<string>,
     *   state?: ?string,
     *   street?: ?string,
     *   techContacts?: ?array<string>,
     *   zipCode?: ?string,
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
        $this->abuseMailbox = $values['abuseMailbox'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->adminContacts = $values['adminContacts'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->dateCreated = $values['dateCreated'] ?? null;
        $this->dateUpdated = $values['dateUpdated'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->faxNo = $values['faxNo'] ?? null;
        $this->mntBy = $values['mntBy'] ?? null;
        $this->mntRef = $values['mntRef'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->organizations = $values['organizations'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->techContacts = $values['techContacts'] ?? null;
        $this->zipCode = $values['zipCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
