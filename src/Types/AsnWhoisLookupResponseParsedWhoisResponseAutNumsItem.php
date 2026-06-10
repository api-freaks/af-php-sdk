<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use DateTime;
use Apifreaks\Core\Types\Date;

class AsnWhoisLookupResponseParsedWhoisResponseAutNumsItem extends JsonSerializableType
{
    /**
     * @var string $autNum
     */
    #[JsonProperty('aut_num')]
    public string $autNum;

    /**
     * @var string $asHandle
     */
    #[JsonProperty('as_handle')]
    public string $asHandle;

    /**
     * @var string $asName
     */
    #[JsonProperty('as_name')]
    public string $asName;

    /**
     * @var array<string> $techContacts
     */
    #[JsonProperty('tech_contacts'), ArrayType(['string'])]
    public array $techContacts;

    /**
     * @var array<string> $abuseContacts
     */
    #[JsonProperty('abuse_contacts'), ArrayType(['string'])]
    public array $abuseContacts;

    /**
     * @var DateTime $dateCreated
     */
    #[JsonProperty('date_created'), Date(Date::TYPE_DATE)]
    public DateTime $dateCreated;

    /**
     * @var DateTime $dateUpdated
     */
    #[JsonProperty('date_updated'), Date(Date::TYPE_DATE)]
    public DateTime $dateUpdated;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?array<string> $status
     */
    #[JsonProperty('status'), ArrayType(['string'])]
    public ?array $status;

    /**
     * @var ?array<string> $memberOf
     */
    #[JsonProperty('member_of'), ArrayType(['string'])]
    public ?array $memberOf;

    /**
     * @var ?array<string> $importVia
     */
    #[JsonProperty('import_via'), ArrayType(['string'])]
    public ?array $importVia;

    /**
     * @var ?array<string> $import
     */
    #[JsonProperty('import'), ArrayType(['string'])]
    public ?array $import;

    /**
     * @var ?array<string> $mpImport
     */
    #[JsonProperty('mp_import'), ArrayType(['string'])]
    public ?array $mpImport;

    /**
     * @var ?array<string> $exportVia
     */
    #[JsonProperty('export_via'), ArrayType(['string'])]
    public ?array $exportVia;

    /**
     * @var ?array<string> $export
     */
    #[JsonProperty('export'), ArrayType(['string'])]
    public ?array $export;

    /**
     * @var ?array<string> $mpExport
     */
    #[JsonProperty('mp_export'), ArrayType(['string'])]
    public ?array $mpExport;

    /**
     * @var ?array<string> $default
     */
    #[JsonProperty('default'), ArrayType(['string'])]
    public ?array $default;

    /**
     * @var ?array<string> $mpDefault
     */
    #[JsonProperty('mp_default'), ArrayType(['string'])]
    public ?array $mpDefault;

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
     * @param array{
     *   autNum: string,
     *   asHandle: string,
     *   asName: string,
     *   techContacts: array<string>,
     *   abuseContacts: array<string>,
     *   dateCreated: DateTime,
     *   dateUpdated: DateTime,
     *   source: string,
     *   description?: ?string,
     *   country?: ?string,
     *   status?: ?array<string>,
     *   memberOf?: ?array<string>,
     *   importVia?: ?array<string>,
     *   import?: ?array<string>,
     *   mpImport?: ?array<string>,
     *   exportVia?: ?array<string>,
     *   export?: ?array<string>,
     *   mpExport?: ?array<string>,
     *   default?: ?array<string>,
     *   mpDefault?: ?array<string>,
     *   organization?: ?string,
     *   sponsoringOrganization?: ?string,
     *   adminContacts?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autNum = $values['autNum'];
        $this->asHandle = $values['asHandle'];
        $this->asName = $values['asName'];
        $this->techContacts = $values['techContacts'];
        $this->abuseContacts = $values['abuseContacts'];
        $this->dateCreated = $values['dateCreated'];
        $this->dateUpdated = $values['dateUpdated'];
        $this->source = $values['source'];
        $this->description = $values['description'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->memberOf = $values['memberOf'] ?? null;
        $this->importVia = $values['importVia'] ?? null;
        $this->import = $values['import'] ?? null;
        $this->mpImport = $values['mpImport'] ?? null;
        $this->exportVia = $values['exportVia'] ?? null;
        $this->export = $values['export'] ?? null;
        $this->mpExport = $values['mpExport'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->mpDefault = $values['mpDefault'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->sponsoringOrganization = $values['sponsoringOrganization'] ?? null;
        $this->adminContacts = $values['adminContacts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
