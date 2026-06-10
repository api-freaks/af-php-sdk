<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class DomainWhoisLookupResponse extends JsonSerializableType
{
    /**
     * @var ?bool $status
     */
    #[JsonProperty('status')]
    public ?bool $status;

    /**
     * @var ?string $domainName
     */
    #[JsonProperty('domain_name')]
    public ?string $domainName;

    /**
     * @var ?DateTime $queryTime
     */
    #[JsonProperty('query_time'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $queryTime;

    /**
     * @var ?string $whoisServer
     */
    #[JsonProperty('whois_server')]
    public ?string $whoisServer;

    /**
     * @var ?value-of<DomainWhoisLookupResponseDomainRegistered> $domainRegistered
     */
    #[JsonProperty('domain_registered')]
    public ?string $domainRegistered;

    /**
     * @var ?DateTime $createDate
     */
    #[JsonProperty('create_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $createDate;

    /**
     * @var ?DateTime $updateDate
     */
    #[JsonProperty('update_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $updateDate;

    /**
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiry_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?DomainWhoisLookupResponseDomainRegistrar $domainRegistrar
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisLookupResponseDomainRegistrar $domainRegistrar;

    /**
     * @var ?DomainWhoisLookupResponseResellerContact $resellerContact
     */
    #[JsonProperty('reseller_contact')]
    public ?DomainWhoisLookupResponseResellerContact $resellerContact;

    /**
     * @var ?DomainWhoisLookupResponseRegistrantContact $registrantContact
     */
    #[JsonProperty('registrant_contact')]
    public ?DomainWhoisLookupResponseRegistrantContact $registrantContact;

    /**
     * @var ?DomainWhoisLookupResponseAdministrativeContact $administrativeContact
     */
    #[JsonProperty('administrative_contact')]
    public ?DomainWhoisLookupResponseAdministrativeContact $administrativeContact;

    /**
     * @var ?DomainWhoisLookupResponseTechnicalContact $technicalContact
     */
    #[JsonProperty('technical_contact')]
    public ?DomainWhoisLookupResponseTechnicalContact $technicalContact;

    /**
     * @var ?DomainWhoisLookupResponseBillingContact $billingContact
     */
    #[JsonProperty('billing_contact')]
    public ?DomainWhoisLookupResponseBillingContact $billingContact;

    /**
     * @var ?array<string> $nameServers
     */
    #[JsonProperty('name_servers'), ArrayType(['string'])]
    public ?array $nameServers;

    /**
     * @var ?array<string> $domainStatus
     */
    #[JsonProperty('domain_status'), ArrayType(['string'])]
    public ?array $domainStatus;

    /**
     * @var ?string $whoisRawDomain
     */
    #[JsonProperty('whois_raw_domain')]
    public ?string $whoisRawDomain;

    /**
     * @var ?DomainWhoisLookupResponseRegistryData $registryData
     */
    #[JsonProperty('registry_data')]
    public ?DomainWhoisLookupResponseRegistryData $registryData;

    /**
     * @param array{
     *   status?: ?bool,
     *   domainName?: ?string,
     *   queryTime?: ?DateTime,
     *   whoisServer?: ?string,
     *   domainRegistered?: ?value-of<DomainWhoisLookupResponseDomainRegistered>,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   domainRegistrar?: ?DomainWhoisLookupResponseDomainRegistrar,
     *   resellerContact?: ?DomainWhoisLookupResponseResellerContact,
     *   registrantContact?: ?DomainWhoisLookupResponseRegistrantContact,
     *   administrativeContact?: ?DomainWhoisLookupResponseAdministrativeContact,
     *   technicalContact?: ?DomainWhoisLookupResponseTechnicalContact,
     *   billingContact?: ?DomainWhoisLookupResponseBillingContact,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawDomain?: ?string,
     *   registryData?: ?DomainWhoisLookupResponseRegistryData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
        $this->domainName = $values['domainName'] ?? null;
        $this->queryTime = $values['queryTime'] ?? null;
        $this->whoisServer = $values['whoisServer'] ?? null;
        $this->domainRegistered = $values['domainRegistered'] ?? null;
        $this->createDate = $values['createDate'] ?? null;
        $this->updateDate = $values['updateDate'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->domainRegistrar = $values['domainRegistrar'] ?? null;
        $this->resellerContact = $values['resellerContact'] ?? null;
        $this->registrantContact = $values['registrantContact'] ?? null;
        $this->administrativeContact = $values['administrativeContact'] ?? null;
        $this->technicalContact = $values['technicalContact'] ?? null;
        $this->billingContact = $values['billingContact'] ?? null;
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
