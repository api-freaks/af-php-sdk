<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainDnsHistoryResponseHistoricalDnsRecordsItem extends JsonSerializableType
{
    /**
     * @var string $queryTime Timestamp when the query was executed (format YYYY-MM-DD HH:mm:ss, not ISO 8601).
     */
    #[JsonProperty('queryTime')]
    public string $queryTime;

    /**
     * @var string $domainName
     */
    #[JsonProperty('domainName')]
    public string $domainName;

    /**
     * @var bool $domainRegistered
     */
    #[JsonProperty('domainRegistered')]
    public bool $domainRegistered;

    /**
     * @var DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsTypes $dnsTypes
     */
    #[JsonProperty('dnsTypes')]
    public DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsTypes $dnsTypes;

    /**
     * @var array<(
     *    DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemStrings
     * )> $dnsRecords
     */
    #[JsonProperty('dnsRecords'), ArrayType([new Union(DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAddress::class, DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemOne::class, DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemPriority::class, DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemSingleName::class, DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAdmin::class, DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemStrings::class)])]
    public array $dnsRecords;

    /**
     * @param array{
     *   queryTime: string,
     *   domainName: string,
     *   domainRegistered: bool,
     *   dnsTypes: DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsTypes,
     *   dnsRecords: array<(
     *    DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsHistoryResponseHistoricalDnsRecordsItemDnsRecordsItemStrings
     * )>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
