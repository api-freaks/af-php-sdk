<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainDnsReverseResponseReverseDnsRecordsItem extends JsonSerializableType
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
     * @var ?bool $domainRegistered
     */
    #[JsonProperty('domainRegistered')]
    public ?bool $domainRegistered;

    /**
     * @var DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes $dnsTypes
     */
    #[JsonProperty('dnsTypes')]
    public DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes $dnsTypes;

    /**
     * @var array<(
     *    DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings
     * )> $dnsRecords
     */
    #[JsonProperty('dnsRecords'), ArrayType([new Union(DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin::class, DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings::class)])]
    public array $dnsRecords;

    /**
     * @param array{
     *   queryTime: string,
     *   domainName: string,
     *   dnsTypes: DomainDnsReverseResponseReverseDnsRecordsItemDnsTypes,
     *   dnsRecords: array<(
     *    DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAddress
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemPriority
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemOne
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemSingleName
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemAdmin
     *   |DomainDnsReverseResponseReverseDnsRecordsItemDnsRecordsItemStrings
     * )>,
     *   domainRegistered?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->queryTime = $values['queryTime'];
        $this->domainName = $values['domainName'];
        $this->domainRegistered = $values['domainRegistered'] ?? null;
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
