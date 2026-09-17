<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainDnsLookupResponse extends JsonSerializableType
{
    /**
     * @var bool $status Indicates whether the query was processed successfully.
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $queryTime Timestamp when the query was executed (format YYYY-MM-DD HH:mm:ss, not ISO 8601).
     */
    #[JsonProperty('queryTime')]
    public string $queryTime;

    /**
     * @var string $domainName Queried domain.
     */
    #[JsonProperty('domainName')]
    public string $domainName;

    /**
     * @var bool $domainRegistered Indicates whether the domain is registered.
     */
    #[JsonProperty('domainRegistered')]
    public bool $domainRegistered;

    /**
     * @var DomainDnsLookupResponseDnsTypes $dnsTypes
     */
    #[JsonProperty('dnsTypes')]
    public DomainDnsLookupResponseDnsTypes $dnsTypes;

    /**
     * @var array<(
     *    DomainDnsLookupResponseDnsRecordsItemAddress
     *   |DomainDnsLookupResponseDnsRecordsItemOne
     *   |DomainDnsLookupResponseDnsRecordsItemPriority
     *   |DomainDnsLookupResponseDnsRecordsItemSingleName
     *   |DomainDnsLookupResponseDnsRecordsItemAdmin
     *   |DomainDnsLookupResponseDnsRecordsItemStrings
     * )> $dnsRecords List of DNS records, each based on its type.
     */
    #[JsonProperty('dnsRecords'), ArrayType([new Union(DomainDnsLookupResponseDnsRecordsItemAddress::class, DomainDnsLookupResponseDnsRecordsItemOne::class, DomainDnsLookupResponseDnsRecordsItemPriority::class, DomainDnsLookupResponseDnsRecordsItemSingleName::class, DomainDnsLookupResponseDnsRecordsItemAdmin::class, DomainDnsLookupResponseDnsRecordsItemStrings::class)])]
    public array $dnsRecords;

    /**
     * @param array{
     *   status: bool,
     *   queryTime: string,
     *   domainName: string,
     *   domainRegistered: bool,
     *   dnsTypes: DomainDnsLookupResponseDnsTypes,
     *   dnsRecords: array<(
     *    DomainDnsLookupResponseDnsRecordsItemAddress
     *   |DomainDnsLookupResponseDnsRecordsItemOne
     *   |DomainDnsLookupResponseDnsRecordsItemPriority
     *   |DomainDnsLookupResponseDnsRecordsItemSingleName
     *   |DomainDnsLookupResponseDnsRecordsItemAdmin
     *   |DomainDnsLookupResponseDnsRecordsItemStrings
     * )>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->queryTime = $values['queryTime'];
        $this->domainName = $values['domainName'];
        $this->domainRegistered = $values['domainRegistered'];
        $this->dnsTypes = $values['dnsTypes'];
        $this->dnsRecords = $values['dnsRecords'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
