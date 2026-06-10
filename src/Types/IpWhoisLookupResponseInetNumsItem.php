<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class IpWhoisLookupResponseInetNumsItem extends JsonSerializableType
{
    /**
     * @var ?string $startIp
     */
    #[JsonProperty('start_ip')]
    public ?string $startIp;

    /**
     * @var ?string $endIp
     */
    #[JsonProperty('end_ip')]
    public ?string $endIp;

    /**
     * @var ?array<string> $cidr
     */
    #[JsonProperty('cidr'), ArrayType(['string'])]
    public ?array $cidr;

    /**
     * @var ?string $netName
     */
    #[JsonProperty('net_name')]
    public ?string $netName;

    /**
     * @var ?string $netHandle
     */
    #[JsonProperty('net_handle')]
    public ?string $netHandle;

    /**
     * @var ?array<string> $description
     */
    #[JsonProperty('description'), ArrayType(['string'])]
    public ?array $description;

    /**
     * @var ?array<string> $countries
     */
    #[JsonProperty('countries'), ArrayType(['string'])]
    public ?array $countries;

    /**
     * @var ?string $geofeed
     */
    #[JsonProperty('geofeed')]
    public ?string $geofeed;

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
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?array<string> $languages
     */
    #[JsonProperty('languages'), ArrayType(['string'])]
    public ?array $languages;

    /**
     * @var ?string $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $sponsoringOrganization
     */
    #[JsonProperty('sponsoring_organization')]
    public ?string $sponsoringOrganization;

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
     * @var ?array<string> $remarks
     */
    #[JsonProperty('remarks'), ArrayType(['string'])]
    public ?array $remarks;

    /**
     * @var ?string $assignmentSize
     */
    #[JsonProperty('assignment_size')]
    public ?string $assignmentSize;

    /**
     * @var ?array<string> $notify
     */
    #[JsonProperty('notify'), ArrayType(['string'])]
    public ?array $notify;

    /**
     * @var ?array<string> $mntBy
     */
    #[JsonProperty('mnt_by'), ArrayType(['string'])]
    public ?array $mntBy;

    /**
     * @var ?array<string> $mntLower
     */
    #[JsonProperty('mnt_lower'), ArrayType(['string'])]
    public ?array $mntLower;

    /**
     * @var ?array<string> $mntDomains
     */
    #[JsonProperty('mnt_domains'), ArrayType(['string'])]
    public ?array $mntDomains;

    /**
     * @var ?array<string> $mntRoutes
     */
    #[JsonProperty('mnt_routes'), ArrayType(['string'])]
    public ?array $mntRoutes;

    /**
     * @var ?array<string> $mntIrt
     */
    #[JsonProperty('mnt_irt'), ArrayType(['string'])]
    public ?array $mntIrt;

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
     * @var ?array<string> $parents
     */
    #[JsonProperty('parents'), ArrayType(['string'])]
    public ?array $parents;

    /**
     * @param array{
     *   startIp?: ?string,
     *   endIp?: ?string,
     *   cidr?: ?array<string>,
     *   netName?: ?string,
     *   netHandle?: ?string,
     *   description?: ?array<string>,
     *   countries?: ?array<string>,
     *   geofeed?: ?string,
     *   latitude?: ?float,
     *   longitude?: ?float,
     *   city?: ?string,
     *   languages?: ?array<string>,
     *   status?: ?string,
     *   organization?: ?string,
     *   sponsoringOrganization?: ?string,
     *   adminContacts?: ?array<string>,
     *   techContacts?: ?array<string>,
     *   abuseContacts?: ?array<string>,
     *   remarks?: ?array<string>,
     *   assignmentSize?: ?string,
     *   notify?: ?array<string>,
     *   mntBy?: ?array<string>,
     *   mntLower?: ?array<string>,
     *   mntDomains?: ?array<string>,
     *   mntRoutes?: ?array<string>,
     *   mntIrt?: ?array<string>,
     *   dateCreated?: ?string,
     *   dateUpdated?: ?string,
     *   source?: ?string,
     *   parents?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startIp = $values['startIp'] ?? null;
        $this->endIp = $values['endIp'] ?? null;
        $this->cidr = $values['cidr'] ?? null;
        $this->netName = $values['netName'] ?? null;
        $this->netHandle = $values['netHandle'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->countries = $values['countries'] ?? null;
        $this->geofeed = $values['geofeed'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->languages = $values['languages'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->sponsoringOrganization = $values['sponsoringOrganization'] ?? null;
        $this->adminContacts = $values['adminContacts'] ?? null;
        $this->techContacts = $values['techContacts'] ?? null;
        $this->abuseContacts = $values['abuseContacts'] ?? null;
        $this->remarks = $values['remarks'] ?? null;
        $this->assignmentSize = $values['assignmentSize'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->mntBy = $values['mntBy'] ?? null;
        $this->mntLower = $values['mntLower'] ?? null;
        $this->mntDomains = $values['mntDomains'] ?? null;
        $this->mntRoutes = $values['mntRoutes'] ?? null;
        $this->mntIrt = $values['mntIrt'] ?? null;
        $this->dateCreated = $values['dateCreated'] ?? null;
        $this->dateUpdated = $values['dateUpdated'] ?? null;
        $this->source = $values['source'] ?? null;
        $this->parents = $values['parents'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
