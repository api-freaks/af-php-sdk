<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class ZipcodeSearchByCityResponse extends JsonSerializableType
{
    /**
     * @var ?int $totalResults Total number of ZIP/postal codes found
     */
    #[JsonProperty('total_results')]
    public ?int $totalResults;

    /**
     * @var ?int $totalPages Total number of pages available
     */
    #[JsonProperty('total_pages')]
    public ?int $totalPages;

    /**
     * @var ?int $currentPage Current page number
     */
    #[JsonProperty('current_page')]
    public ?int $currentPage;

    /**
     * @var ?int $currentPageSize Number of ZIP/postal codes in the current page
     */
    #[JsonProperty('current_page_size')]
    public ?int $currentPageSize;

    /**
     * @var ?array<string> $codes List of ZIP/postal codes
     */
    #[JsonProperty('codes'), ArrayType(['string'])]
    public ?array $codes;

    /**
     * @param array{
     *   totalResults?: ?int,
     *   totalPages?: ?int,
     *   currentPage?: ?int,
     *   currentPageSize?: ?int,
     *   codes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->totalResults = $values['totalResults'] ?? null;
        $this->totalPages = $values['totalPages'] ?? null;
        $this->currentPage = $values['currentPage'] ?? null;
        $this->currentPageSize = $values['currentPageSize'] ?? null;
        $this->codes = $values['codes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
