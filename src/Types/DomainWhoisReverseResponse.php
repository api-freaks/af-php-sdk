<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainWhoisReverseResponse extends JsonSerializableType
{
    /**
     * @var ?int $totalResult Total results found across the query.
     */
    #[JsonProperty('total_Result')]
    public ?int $totalResult;

    /**
     * @var ?int $totalPages Total number of pages (50 records per page in default mode, 100 in mini mode).
     */
    #[JsonProperty('total_Pages')]
    public ?int $totalPages;

    /**
     * @var ?int $currentPage Current page number.
     */
    #[JsonProperty('current_Page')]
    public ?int $currentPage;

    /**
     * @var ?array<(
     *    DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact
     *   |DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyName
     * )> $whoisDomainsHistorical
     */
    #[JsonProperty('whois_domains_historical'), ArrayType([new Union(DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact::class, DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyName::class)])]
    public ?array $whoisDomainsHistorical;

    /**
     * @param array{
     *   totalResult?: ?int,
     *   totalPages?: ?int,
     *   currentPage?: ?int,
     *   whoisDomainsHistorical?: ?array<(
     *    DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact
     *   |DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyName
     * )>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->totalResult = $values['totalResult'] ?? null;
        $this->totalPages = $values['totalPages'] ?? null;
        $this->currentPage = $values['currentPage'] ?? null;
        $this->whoisDomainsHistorical = $values['whoisDomainsHistorical'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
