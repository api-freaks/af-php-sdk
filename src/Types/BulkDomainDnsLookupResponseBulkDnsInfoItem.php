<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class BulkDomainDnsLookupResponseBulkDnsInfoItem extends JsonSerializableType
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
     * @var ?string $domainName Queried domain. Absent when this result is for a queried IP address instead (see `ipAddress`).
     */
    #[JsonProperty('domainName')]
    public ?string $domainName;

    /**
     * @var ?bool $domainRegistered Indicates whether the domain is registered. Absent when this result is for a queried IP address instead.
     */
    #[JsonProperty('domainRegistered')]
    public ?bool $domainRegistered;

    /**
     * @var ?string $ipAddress Queried IP address, present when this result is for reverse DNS (PTR) enrichment instead of a domain name.
     */
    #[JsonProperty('ipAddress')]
    public ?string $ipAddress;

    /**
     * @var BulkDomainDnsLookupResponseBulkDnsInfoItemDnsTypes $dnsTypes
     */
    #[JsonProperty('dnsTypes')]
    public BulkDomainDnsLookupResponseBulkDnsInfoItemDnsTypes $dnsTypes;

    /**
     * @var array<(
     *    BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAddress
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemOne
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemPriority
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemSingleName
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAdmin
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStrings
     * )> $dnsRecords List of DNS records, each based on its type.
     */
    #[JsonProperty('dnsRecords'), ArrayType([new Union(BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAddress::class, BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemOne::class, BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemPriority::class, BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemSingleName::class, BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAdmin::class, BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStrings::class)])]
    public array $dnsRecords;

    /**
     * @param array{
     *   status: bool,
     *   queryTime: string,
     *   dnsTypes: BulkDomainDnsLookupResponseBulkDnsInfoItemDnsTypes,
     *   dnsRecords: array<(
     *    BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAddress
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemOne
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemPriority
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemSingleName
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAdmin
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStrings
     * )>,
     *   domainName?: ?string,
     *   domainRegistered?: ?bool,
     *   ipAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->queryTime = $values['queryTime'];
        $this->domainName = $values['domainName'] ?? null;
        $this->domainRegistered = $values['domainRegistered'] ?? null;
        $this->ipAddress = $values['ipAddress'] ?? null;
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
