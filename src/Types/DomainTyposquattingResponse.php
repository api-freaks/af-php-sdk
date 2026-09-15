<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainTyposquattingResponse extends JsonSerializableType
{
    /**
     * @var bool $status
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var int $totalRecords
     */
    #[JsonProperty('totalRecords')]
    public int $totalRecords;

    /**
     * @var int $currentPage
     */
    #[JsonProperty('currentPage')]
    public int $currentPage;

    /**
     * @var bool $hasNextPage
     */
    #[JsonProperty('hasNextPage')]
    public bool $hasNextPage;

    /**
     * @var int $totalPages
     */
    #[JsonProperty('totalPages')]
    public int $totalPages;

    /**
     * @var ?string $nextPageToken Opaque token to pass as pageToken on the next request. Present only when hasNextPage is true.
     */
    #[JsonProperty('nextPageToken')]
    public ?string $nextPageToken;

    /**
     * @var array<DomainTyposquattingResponseDomainsItem> $domains
     */
    #[JsonProperty('domains'), ArrayType([DomainTyposquattingResponseDomainsItem::class])]
    public array $domains;

    /**
     * @param array{
     *   status: bool,
     *   totalRecords: int,
     *   currentPage: int,
     *   hasNextPage: bool,
     *   totalPages: int,
     *   domains: array<DomainTyposquattingResponseDomainsItem>,
     *   nextPageToken?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->totalRecords = $values['totalRecords'];
        $this->currentPage = $values['currentPage'];
        $this->hasNextPage = $values['hasNextPage'];
        $this->totalPages = $values['totalPages'];
        $this->nextPageToken = $values['nextPageToken'] ?? null;
        $this->domains = $values['domains'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
