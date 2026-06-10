<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainDnsReverseResponse extends JsonSerializableType
{
    /**
     * @var int $totalRecords
     */
    #[JsonProperty('totalRecords')]
    public int $totalRecords;

    /**
     * @var int $totalPages
     */
    #[JsonProperty('totalPages')]
    public int $totalPages;

    /**
     * @var int $currentPage
     */
    #[JsonProperty('currentPage')]
    public int $currentPage;

    /**
     * @var array<DomainDnsReverseResponseReverseDnsRecordsItem> $reverseDnsRecords
     */
    #[JsonProperty('reverseDnsRecords'), ArrayType([DomainDnsReverseResponseReverseDnsRecordsItem::class])]
    public array $reverseDnsRecords;

    /**
     * @param array{
     *   totalRecords: int,
     *   totalPages: int,
     *   currentPage: int,
     *   reverseDnsRecords: array<DomainDnsReverseResponseReverseDnsRecordsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->totalRecords = $values['totalRecords'];
        $this->totalPages = $values['totalPages'];
        $this->currentPage = $values['currentPage'];
        $this->reverseDnsRecords = $values['reverseDnsRecords'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
