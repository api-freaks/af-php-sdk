<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;

class DomainWhoisLookupResponseRegistryData extends JsonSerializableType
{
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
     * @var ?value-of<DomainWhoisLookupResponseRegistryDataDomainRegistered> $domainRegistered
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
     * @var ?string $whoisRawRegistry
     */
    #[JsonProperty('whois_raw_registry')]
    public ?string $whoisRawRegistry;

    /**
     * @var ?DomainWhoisLookupResponseRegistryDataDomainRegistrar $domainRegistrar
     */
    #[JsonProperty('domain_registrar')]
    public ?DomainWhoisLookupResponseRegistryDataDomainRegistrar $domainRegistrar;

    /**
     * @param array{
     *   domainName?: ?string,
     *   queryTime?: ?DateTime,
     *   whoisServer?: ?string,
     *   domainRegistered?: ?value-of<DomainWhoisLookupResponseRegistryDataDomainRegistered>,
     *   createDate?: ?DateTime,
     *   updateDate?: ?DateTime,
     *   expiryDate?: ?DateTime,
     *   nameServers?: ?array<string>,
     *   domainStatus?: ?array<string>,
     *   whoisRawRegistry?: ?string,
     *   domainRegistrar?: ?DomainWhoisLookupResponseRegistryDataDomainRegistrar,
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
        $this->whoisRawRegistry = $values['whoisRawRegistry'] ?? null;
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
