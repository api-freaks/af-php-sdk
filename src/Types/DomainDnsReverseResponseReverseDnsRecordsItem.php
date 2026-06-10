<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainDnsReverseResponseReverseDnsRecordsItem extends JsonSerializableType
{
    /**
     * @var DateTime $queryTime
     */
    #[JsonProperty('queryTime'), Date(Date::TYPE_DATETIME)]
    public DateTime $queryTime;

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
     * @var DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes $dnsTypes
     */
    #[JsonProperty('dnsTypes')]
    public DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes $dnsTypes;

    /**
     * @var array<(
     *    DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings
     * )> $dnsRecords
     */
    #[JsonProperty('dnsRecords'), ArrayType([new Union(DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings::class)])]
    public array $dnsRecords;

    /**
     * @param array{
     *   queryTime: DateTime,
     *   domainName: string,
     *   domainRegistered: bool,
     *   dnsTypes: DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes,
     *   dnsRecords: array<(
     *    DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings
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
