<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class DomainWhoisHistoryResponseWhoisDomainsHistoricalItem extends JsonSerializableType
{
    /**
     * @var int $num Shows the number of the record in the array.
     */
    #[JsonProperty('num')]
    public int $num;

    /**
     * @var bool $status Always true.
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $domainName Domain name which was queried.
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var DateTime $queryTime The timestamp when the query was made.
     */
    #[JsonProperty('query_time'), Date(Date::TYPE_DATETIME)]
    public DateTime $queryTime;

    /**
     * @var string $whoisServer The WHOIS server that provided the domain information.
     */
    #[JsonProperty('whois_server')]
    public string $whoisServer;

    /**
     * @var value-of<DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistered> $domainRegistered Domain registration status.
     */
    #[JsonProperty('domain_registered')]
    public string $domainRegistered;

    /**
     * @var ?DateTime $createDate Date when the domain was initially registered.
     */
    #[JsonProperty('create_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $createDate;

    /**
     * @var ?DateTime $updateDate The date of the most recent update to the domain registration.
     */
    #[JsonProperty('update_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $updateDate;

    /**
     * @var ?DateTime $expiryDate The date when the domain registration will expire if not renewed.
     */
    #[JsonProperty('expiry_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistrar $domainRegistrar
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistrar $domainRegistrar;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemResellerContact $resellerContact
     */
    #[JsonProperty('reseller_contact')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemResellerContact $resellerContact;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistrantContact $registrantContact
     */
    #[JsonProperty('registrant_contact')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistrantContact $registrantContact;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemAdministrativeContact $administrativeContact
     */
    #[JsonProperty('administrative_contact')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemAdministrativeContact $administrativeContact;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemTechnicalContact $technicalContact
     */
    #[JsonProperty('technical_contact')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemTechnicalContact $technicalContact;

    /**
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemBillingContact $billingContact
     */
    #[JsonProperty('billing_contact')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemBillingContact $billingContact;

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
     * @var ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistryData $registryData
     */
    #[JsonProperty('registry_data')]
    public ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistryData $registryData;

    /**
     * @param array{
     *   num: int,
     *   status: bool,
     *   domainName: string,
     *   queryTime: DateTime,
     *   whoisServer: string,
     *   domainRegistered: value-of<DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistered>,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   domainRegistrar?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemDomainRegistrar,
     *   resellerContact?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemResellerContact,
     *   registrantContact?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistrantContact,
     *   administrativeContact?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemAdministrativeContact,
     *   technicalContact?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemTechnicalContact,
     *   billingContact?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemBillingContact,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawDomain?: ?string,
     *   registryData?: ?DomainWhoisHistoryResponseWhoisDomainsHistoricalItemRegistryData,
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
