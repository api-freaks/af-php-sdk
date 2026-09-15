<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

/**
 * Registry-level (as opposed to registrar-level) WHOIS data, sourced directly from the TLD registry.
 */
class DomainWhoisLookupV2ResponseRegistryData extends JsonSerializableType
{
    /**
     * @var ?string $domainName Domain name as recorded by the registry.
     */
    #[JsonProperty('domain_name')]
    public ?string $domainName;

    /**
     * @var ?DateTime $queryTime Timestamp when the registry-level record was queried.
     */
    #[JsonProperty('query_time'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $queryTime;

    /**
     * @var ?string $whoisServer Registry WHOIS server that returned this data.
     */
    #[JsonProperty('whois_server')]
    public ?string $whoisServer;

    /**
     * @var ?value-of<DomainWhoisLookupV2ResponseRegistryDataDomainRegistered> $domainRegistered Domain registration status as recorded by the registry.
     */
    #[JsonProperty('domain_registered')]
    public ?string $domainRegistered;

    /**
     * @var ?DateTime $createDate Domain creation date as recorded by the registry.
     */
    #[JsonProperty('create_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $createDate;

    /**
     * @var ?DateTime $updateDate Domain last-updated date as recorded by the registry.
     */
    #[JsonProperty('update_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $updateDate;

    /**
     * @var ?DateTime $expiryDate Domain expiry date as recorded by the registry.
     */
    #[JsonProperty('expiry_date'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?array<string> $nameServers Name servers as recorded by the registry.
     */
    #[JsonProperty('name_servers'), ArrayType(['string'])]
    public ?array $nameServers;

    /**
     * @var ?array<string> $domainStatus EPP domain status codes as recorded by the registry.
     */
    #[JsonProperty('domain_status'), ArrayType(['string'])]
    public ?array $domainStatus;

    /**
     * @var ?string $whoisRawRegistery Raw WHOIS text as returned directly by the registry server.
     */
    #[JsonProperty('whois_raw_registery')]
    public ?string $whoisRawRegistery;

    /**
     * @var ?DomainWhoisLookupV2ResponseRegistryDataDomainRegistrar $domainRegistrar Registrar of record for a domain, as published by either the registrar or the registry.
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisLookupV2ResponseRegistryDataDomainRegistrar $domainRegistrar;

    /**
     * @param array{
     *   domainName?: ?string,
     *   queryTime?: ?DateTime,
     *   whoisServer?: ?string,
     *   domainRegistered?: ?value-of<DomainWhoisLookupV2ResponseRegistryDataDomainRegistered>,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawRegistery?: ?string,
     *   domainRegistrar?: ?DomainWhoisLookupV2ResponseRegistryDataDomainRegistrar,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domainName = $values['domainName'] ?? null;
        $this->queryTime = $values['queryTime'] ?? null;
        $this->whoisServer = $values['whoisServer'] ?? null;
        $this->domainRegistered = $values['domainRegistered'] ?? null;
        $this->createDate = $values['createDate'] ?? null;
        $this->updateDate = $values['updateDate'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->nameServers = $values['nameServers'] ?? null;
        $this->domainStatus = $values['domainStatus'] ?? null;
        $this->whoisRawRegistery = $values['whoisRawRegistery'] ?? null;
        $this->domainRegistrar = $values['domainRegistrar'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
