<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact extends JsonSerializableType
{
    /**
     * @var int $num
     */
    #[JsonProperty('num')]
    public int $num;

    /**
     * @var bool $status
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $domainName
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var DateTime $queryTime
     */
    #[JsonProperty('query_time'), Date(Date::TYPE_DATETIME)]
    public DateTime $queryTime;

    /**
     * @var string $whoisServer
     */
    #[JsonProperty('whois_server')]
    public string $whoisServer;

    /**
     * @var value-of<DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistered> $domainRegistered
     */
    #[JsonProperty('domain_registered')]
    public string $domainRegistered;

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
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistrar $domainRegistrar
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistrar $domainRegistrar;

    /**
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactResellerContact $resellerContact
     */
    #[JsonProperty('reseller_contact')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactResellerContact $resellerContact;

    /**
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistrantContact $registrantContact
     */
    #[JsonProperty('registrant_contact')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistrantContact $registrantContact;

    /**
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactAdministrativeContact $administrativeContact
     */
    #[JsonProperty('administrative_contact')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactAdministrativeContact $administrativeContact;

    /**
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactTechnicalContact $technicalContact
     */
    #[JsonProperty('technical_contact')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactTechnicalContact $technicalContact;

    /**
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactBillingContact $billingContact
     */
    #[JsonProperty('billing_contact')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactBillingContact $billingContact;

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
     * @var ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistryData $registryData
     */
    #[JsonProperty('registry_data')]
    public ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistryData $registryData;

    /**
     * @param array{
     *   num: int,
     *   status: bool,
     *   domainName: string,
     *   queryTime: DateTime,
     *   whoisServer: string,
     *   domainRegistered: value-of<DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistered>,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   domainRegistrar?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactDomainRegistrar,
     *   resellerContact?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactResellerContact,
     *   registrantContact?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistrantContact,
     *   administrativeContact?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactAdministrativeContact,
     *   technicalContact?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactTechnicalContact,
     *   billingContact?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactBillingContact,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawDomain?: ?string,
     *   registryData?: ?DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContactRegistryData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->num = $values['num'];
        $this->status = $values['status'];
        $this->domainName = $values['domainName'];
        $this->queryTime = $values['queryTime'];
        $this->whoisServer = $values['whoisServer'];
        $this->domainRegistered = $values['domainRegistered'];
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
