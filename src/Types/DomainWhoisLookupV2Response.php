<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

/**
 * Current WHOIS registration record for the requested domain.
 */
class DomainWhoisLookupV2Response extends JsonSerializableType
{
    /**
     * @var bool $status true if the request was successfully processed.
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $domainName Domain name that was queried.
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var string $queryTime Timestamp when the WHOIS query was executed.
     */
    #[JsonProperty('query_time')]
    public string $queryTime;

    /**
     * @var string $whoisServer WHOIS or RDAP server that provided this record.
     */
    #[JsonProperty('whois_server')]
    public string $whoisServer;

    /**
     * @var value-of<DomainWhoisLookupV2ResponseDomainRegistered> $domainRegistered Domain registration status; 'restricted' means the registry withholds registration details.
     */
    #[JsonProperty('domain_registered')]
    public string $domainRegistered;

    /**
     * @var ?bool $secureDns Indicates if DNSSEC or secure DNS is enabled for the domain.
     */
    #[JsonProperty('secure_dns')]
    public ?bool $secureDns;

    /**
     * @var ?string $domainHandle Internal domain registry handle/ID.
     */
    #[JsonProperty('domain_handle')]
    public ?string $domainHandle;

    /**
     * @var ?DateTime $createDate Date the domain was originally registered, when the domain is registered.
     */
    #[JsonProperty('create_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $createDate;

    /**
     * @var ?DateTime $updateDate Date the domain registration was last updated, when the domain is registered.
     */
    #[JsonProperty('update_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $updateDate;

    /**
     * @var ?DateTime $expiryDate Date the domain registration is set to expire, when the domain is registered.
     */
    #[JsonProperty('expiry_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?DomainWhoisLookupV2ResponseDomainRegistrar $domainRegistrar Registrar of record for a domain, as published by either the registrar or the registry.
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisLookupV2ResponseDomainRegistrar $domainRegistrar;

    /**
     * @var ?DomainWhoisLookupV2ResponseResellerContact $resellerContact A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
     */
    #[JsonProperty('reseller_contact')]
    public ?DomainWhoisLookupV2ResponseResellerContact $resellerContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseRegistrantContact $registrantContact A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
     */
    #[JsonProperty('registrant_contact')]
    public ?DomainWhoisLookupV2ResponseRegistrantContact $registrantContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseAdministrativeContact $administrativeContact A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
     */
    #[JsonProperty('administrative_contact')]
    public ?DomainWhoisLookupV2ResponseAdministrativeContact $administrativeContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseTechnicalContact $technicalContact A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
     */
    #[JsonProperty('technical_contact')]
    public ?DomainWhoisLookupV2ResponseTechnicalContact $technicalContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseBillingContact $billingContact A contact record (registrant, administrative, technical, billing, or reseller) published in the domain's WHOIS record.
     */
    #[JsonProperty('billing_contact')]
    public ?DomainWhoisLookupV2ResponseBillingContact $billingContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseAbuseContact $abuseContact Registrar's abuse-reporting contact.
     */
    #[JsonProperty('abuse_contact')]
    public ?DomainWhoisLookupV2ResponseAbuseContact $abuseContact;

    /**
     * @var ?DomainWhoisLookupV2ResponseEligibilityInfo $eligibilityInfo Domain eligibility information (populated for TLDs with registrant eligibility requirements, e.g. .eu).
     */
    #[JsonProperty('eligibility_info')]
    public ?DomainWhoisLookupV2ResponseEligibilityInfo $eligibilityInfo;

    /**
     * @var ?array<string> $nameServers Name servers currently recorded for the domain.
     */
    #[JsonProperty('name_servers'), ArrayType(['string'])]
    public ?array $nameServers;

    /**
     * @var ?array<string> $domainStatus EPP domain status codes currently recorded for the domain.
     */
    #[JsonProperty('domain_status'), ArrayType(['string'])]
    public ?array $domainStatus;

    /**
     * @var ?string $whoisRawDomain Raw WHOIS text as returned by the registrar's WHOIS server.
     */
    #[JsonProperty('whois_raw_domain')]
    public ?string $whoisRawDomain;

    /**
     * @var ?DomainWhoisLookupV2ResponseRegistryData $registryData Registry-level (as opposed to registrar-level) WHOIS data, sourced directly from the TLD registry.
     */
    #[JsonProperty('registry_data')]
    public ?DomainWhoisLookupV2ResponseRegistryData $registryData;

    /**
     * @param array{
     *   status: bool,
     *   domainName: string,
     *   queryTime: string,
     *   whoisServer: string,
     *   domainRegistered: value-of<DomainWhoisLookupV2ResponseDomainRegistered>,
     *   secureDns?: ?bool,
     *   domainHandle?: ?string,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   domainRegistrar?: ?DomainWhoisLookupV2ResponseDomainRegistrar,
     *   resellerContact?: ?DomainWhoisLookupV2ResponseResellerContact,
     *   registrantContact?: ?DomainWhoisLookupV2ResponseRegistrantContact,
     *   administrativeContact?: ?DomainWhoisLookupV2ResponseAdministrativeContact,
     *   technicalContact?: ?DomainWhoisLookupV2ResponseTechnicalContact,
     *   billingContact?: ?DomainWhoisLookupV2ResponseBillingContact,
     *   abuseContact?: ?DomainWhoisLookupV2ResponseAbuseContact,
     *   eligibilityInfo?: ?DomainWhoisLookupV2ResponseEligibilityInfo,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawDomain?: ?string,
     *   registryData?: ?DomainWhoisLookupV2ResponseRegistryData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->domainName = $values['domainName'];
        $this->queryTime = $values['queryTime'];
        $this->whoisServer = $values['whoisServer'];
        $this->domainRegistered = $values['domainRegistered'];
        $this->secureDns = $values['secureDns'] ?? null;
        $this->domainHandle = $values['domainHandle'] ?? null;
        $this->createDate = $values['createDate'] ?? null;
        $this->updateDate = $values['updateDate'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->domainRegistrar = $values['domainRegistrar'] ?? null;
        $this->resellerContact = $values['resellerContact'] ?? null;
        $this->registrantContact = $values['registrantContact'] ?? null;
        $this->administrativeContact = $values['administrativeContact'] ?? null;
        $this->technicalContact = $values['technicalContact'] ?? null;
        $this->billingContact = $values['billingContact'] ?? null;
        $this->abuseContact = $values['abuseContact'] ?? null;
        $this->eligibilityInfo = $values['eligibilityInfo'] ?? null;
        $this->nameServers = $values['nameServers'] ?? null;
        $this->domainStatus = $values['domainStatus'] ?? null;
        $this->whoisRawDomain = $values['whoisRawDomain'] ?? null;
        $this->registryData = $values['registryData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
