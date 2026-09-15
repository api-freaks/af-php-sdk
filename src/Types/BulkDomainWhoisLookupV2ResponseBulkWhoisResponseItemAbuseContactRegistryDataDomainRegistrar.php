<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Registrar of record for a domain, as published by either the registrar or the registry.
 */
class BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContactRegistryDataDomainRegistrar extends JsonSerializableType
{
    /**
     * @var ?string $ianaId IANA registrar ID.
     */
    #[JsonProperty('iana_id')]
    public ?string $ianaId;

    /**
     * @var ?string $id Registrar identifier.
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $idType Type of registrar ID (e.g. IANA).
     */
    #[JsonProperty('id_type')]
    public ?string $idType;

    /**
     * @var ?string $handle Registrar handle.
     */
    #[JsonProperty('handle')]
    public ?string $handle;

    /**
     * @var ?string $registryId Registry-specific registrar ID.
     */
    #[JsonProperty('registry_id')]
    public ?string $registryId;

    /**
     * @var ?string $authoritativeRegistryName Registry authority name.
     */
    #[JsonProperty('authoritative_registry_name')]
    public ?string $authoritativeRegistryName;

    /**
     * @var ?string $organizationNumber Registrar organization number.
     */
    #[JsonProperty('organization_number')]
    public ?string $organizationNumber;

    /**
     * @var ?bool $isSponsor Indicates if the registrar is a sponsor.
     */
    #[JsonProperty('is_sponsor')]
    public ?bool $isSponsor;

    /**
     * @var ?string $status Registrar's ICANN accreditation status (e.g. accredited), when published at the registrar level.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $registrarName Registered name of the registrar.
     */
    #[JsonProperty('registrar_name')]
    public ?string $registrarName;

    /**
     * @var ?string $normalizedName Lowercased, normalized form of the registrar name, when published at the registrar level.
     */
    #[JsonProperty('normalized_name')]
    public ?string $normalizedName;

    /**
     * @var ?string $whoisServer WHOIS server operated by the registrar.
     */
    #[JsonProperty('whois_server')]
    public ?string $whoisServer;

    /**
     * @var ?string $rdapServer RDAP server URL operated by the registrar, when published at the registrar level.
     */
    #[JsonProperty('rdap_server')]
    public ?string $rdapServer;

    /**
     * @var ?string $websiteUrl Registrar's website URL.
     */
    #[JsonProperty('website_url')]
    public ?string $websiteUrl;

    /**
     * @var ?string $emailAddress Registrar abuse or contact email address.
     */
    #[JsonProperty('email_address')]
    public ?string $emailAddress;

    /**
     * @var ?string $phoneNumber Registrar contact phone number.
     */
    #[JsonProperty('phone_number')]
    public ?string $phoneNumber;

    /**
     * @param array{
     *   ianaId?: ?string,
     *   id?: ?string,
     *   idType?: ?string,
     *   handle?: ?string,
     *   registryId?: ?string,
     *   authoritativeRegistryName?: ?string,
     *   organizationNumber?: ?string,
     *   isSponsor?: ?bool,
     *   status?: ?string,
     *   registrarName?: ?string,
     *   normalizedName?: ?string,
     *   whoisServer?: ?string,
     *   rdapServer?: ?string,
     *   websiteUrl?: ?string,
     *   emailAddress?: ?string,
     *   phoneNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ianaId = $values['ianaId'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->idType = $values['idType'] ?? null;
        $this->handle = $values['handle'] ?? null;
        $this->registryId = $values['registryId'] ?? null;
        $this->authoritativeRegistryName = $values['authoritativeRegistryName'] ?? null;
        $this->organizationNumber = $values['organizationNumber'] ?? null;
        $this->isSponsor = $values['isSponsor'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->registrarName = $values['registrarName'] ?? null;
        $this->normalizedName = $values['normalizedName'] ?? null;
        $this->whoisServer = $values['whoisServer'] ?? null;
        $this->rdapServer = $values['rdapServer'] ?? null;
        $this->websiteUrl = $values['websiteUrl'] ?? null;
        $this->emailAddress = $values['emailAddress'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
