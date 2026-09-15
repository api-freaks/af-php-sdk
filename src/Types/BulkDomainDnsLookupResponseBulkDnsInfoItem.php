<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;
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
     * @var DateTime $queryTime Time at which the query was made (Format:YYYY-MM-DD HH:mm:ss).
     */
    #[JsonProperty('queryTime'), Date(Date::TYPE_DATETIME)]
    public DateTime $queryTime;

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
     *   queryTime: DateTime,
     *   domainName: string,
     *   domainRegistered: bool,
     *   dnsTypes: BulkDomainDnsLookupResponseBulkDnsInfoItemDnsTypes,
     *   dnsRecords: array<(
     *    BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAddress
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemOne
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemPriority
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemSingleName
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemAdmin
     *   |BulkDomainDnsLookupResponseBulkDnsInfoItemDnsRecordsItemStrings
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
