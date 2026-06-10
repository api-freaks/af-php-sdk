<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class IpWhoisLookupResponseIrt extends JsonSerializableType
{
    /**
     * @var ?string $handle
     */
    #[JsonProperty('handle')]
    public ?string $handle;

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
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

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
     * @var ?array<string> $remarks
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?array<string> $signature
     */
    #[JsonProperty('signature'), ArrayType(['string'])]
    public ?array $signature;

    /**
     * @var ?array<string> $encryption
     */
    #[JsonProperty('encryption'), ArrayType(['string'])]
    public ?array $encryption;

    /**
     * @var ?array<string> $auth
     */
    #[JsonProperty('auth'), ArrayType(['string'])]
    public ?array $auth;

    /**
     * @var ?array<string> $notify
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $irtNfy
     */
    #[JsonProperty('irt_nfy'), ArrayType(['string'])]
    public ?array $irtNfy;

    /**
     * @var ?array<string> $mntBy
     */
    #[JsonProperty('mnt_by'), ArrayType(['string'])]
    public ?array $mntBy;

    /**
     * @var ?array<string> $mntRef
     */
    #[JsonProperty('mnt_ref'), ArrayType(['string'])]
    public ?array $mntRef;

    /**
     * @var ?string $dateCreated
     */
    #[JsonProperty('date_created')]
    public ?string $dateCreated;

    /**
     * @var ?string $dateUpdated
     */
    #[JsonProperty('date_updated')]
    public ?string $dateUpdated;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   handle?: ?string,
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
     *   signature?: ?array<string>,
     *   encryption?: ?array<string>,
     *   auth?: ?array<string>,
     *   notify?: ?array<string>,
     *   irtNfy?: ?array<string>,
     *   mntBy?: ?array<string>,
     *   mntRef?: ?array<string>,
     *   dateCreated?: ?string,
     *   dateUpdated?: ?string,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->handle = $values['handle'] ?? null;
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
        $this->signature = $values['signature'] ?? null;
        $this->encryption = $values['encryption'] ?? null;
        $this->auth = $values['auth'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->irtNfy = $values['irtNfy'] ?? null;
        $this->mntBy = $values['mntBy'] ?? null;
        $this->mntRef = $values['mntRef'] ?? null;
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
