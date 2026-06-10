<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class SubdomainsLookupResponse extends JsonSerializableType
{
    /**
     * @var string $domain
     */
    #[JsonProperty('domain')]
    public string $domain;

    /**
     * @var bool $status
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $queryTime
     */
    #[JsonProperty('query_time')]
    public string $queryTime;

    /**
     * @var int $currentPage
     */
    #[JsonProperty('current_page')]
    public int $currentPage;

    /**
     * @var int $totalPages
     */
    #[JsonProperty('total_pages')]
    public int $totalPages;

    /**
     * @var int $totalRecords
     */
    #[JsonProperty('total_records')]
    public int $totalRecords;

    /**
     * @var array<SubdomainsLookupResponseSubdomainsItem> $subdomains
     */
    #[JsonProperty('subdomains'), ArrayType([SubdomainsLookupResponseSubdomainsItem::class])]
    public array $subdomains;

    /**
     * @param array{
     *   domain: string,
     *   status: bool,
     *   queryTime: string,
     *   currentPage: int,
     *   totalPages: int,
     *   totalRecords: int,
     *   subdomains: array<SubdomainsLookupResponseSubdomainsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domain = $values['domain'];
        $this->status = $values['status'];
        $this->queryTime = $values['queryTime'];
        $this->currentPage = $values['currentPage'];
        $this->totalPages = $values['totalPages'];
        $this->totalRecords = $values['totalRecords'];
        $this->subdomains = $values['subdomains'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
