<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class DomainWhoisReverseResponse extends JsonSerializableType
{
    /**
     * @var ?int $totalResult
     */
    #[JsonProperty('totalResult')]
    public ?int $totalResult;

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
     * @var ?array<(
     *    DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact
     *   |DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyname
     * )> $whoisDomainsHistorical
     */
    #[JsonProperty('whois_domains_historical'), ArrayType([new Union(DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact::class, DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyname::class)])]
    public ?array $whoisDomainsHistorical;

    /**
     * @param array{
     *   totalResult?: ?int,
     *   totalPages?: ?int,
     *   currentPage?: ?int,
     *   whoisDomainsHistorical?: ?array<(
     *    DomainWhoisReverseResponseWhoisDomainsHistoricalItemAdministrativeContact
     *   |DomainWhoisReverseResponseWhoisDomainsHistoricalItemCompanyname
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
