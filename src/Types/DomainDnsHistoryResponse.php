<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainDnsHistoryResponse extends JsonSerializableType
{
    /**
     * @var ?int $totalRecords
     */
    #[JsonProperty('totalRecords')]
    public ?int $totalRecords;

    /**
     * @var ?int $totalPages
     */
    #[JsonProperty('totalPages')]
    public ?int $totalPages;

    /**
     * @var ?int $currentPage
     */
    #[JsonProperty('currentPage')]
    public ?int $currentPage;

    /**
     * @var ?array<DomainDnsHistoryResponseHistoricalDnsRecordsItem> $historicalDnsRecords
     */
    #[JsonProperty('historicalDnsRecords'), ArrayType([DomainDnsHistoryResponseHistoricalDnsRecordsItem::class])]
    public ?array $historicalDnsRecords;

    /**
     * @param array{
     *   totalRecords?: ?int,
     *   totalPages?: ?int,
     *   currentPage?: ?int,
     *   historicalDnsRecords?: ?array<DomainDnsHistoryResponseHistoricalDnsRecordsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->totalRecords = $values['totalRecords'] ?? null;
        $this->totalPages = $values['totalPages'] ?? null;
        $this->currentPage = $values['currentPage'] ?? null;
        $this->historicalDnsRecords = $values['historicalDnsRecords'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
