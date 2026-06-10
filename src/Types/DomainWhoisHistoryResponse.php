<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainWhoisHistoryResponse extends JsonSerializableType
{
    /**
     * @var bool $status Determines whether the request was successfully processed or not.
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var value-of<DomainWhoisHistoryResponseWhois> $whois Indicates that this response contains historical data.
     */
    #[JsonProperty('whois')]
    public string $whois;

    /**
     * @var string $totalRecords Shows the total number of records found for the queried domain.
     */
    #[JsonProperty('total_records')]
    public string $totalRecords;

    /**
     * @var array<DomainWhoisHistoryResponseWhoisDomainsHistoricalItem> $whoisDomainsHistorical
     */
    #[JsonProperty('whois_domains_historical'), ArrayType([DomainWhoisHistoryResponseWhoisDomainsHistoricalItem::class])]
    public array $whoisDomainsHistorical;

    /**
     * @param array{
     *   status: bool,
     *   whois: value-of<DomainWhoisHistoryResponseWhois>,
     *   totalRecords: string,
     *   whoisDomainsHistorical: array<DomainWhoisHistoryResponseWhoisDomainsHistoricalItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->whois = $values['whois'];
        $this->totalRecords = $values['totalRecords'];
        $this->whoisDomainsHistorical = $values['whoisDomainsHistorical'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
