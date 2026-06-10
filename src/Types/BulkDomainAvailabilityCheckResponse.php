<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainAvailabilityCheckResponse extends JsonSerializableType
{
    /**
     * @var ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem> $bulkDomainAvailableResponse
     */
    #[JsonProperty('bulk_domain_available_response'), ArrayType([BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem::class])]
    public ?array $bulkDomainAvailableResponse;

    /**
     * @param array{
     *   bulkDomainAvailableResponse?: ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bulkDomainAvailableResponse = $values['bulkDomainAvailableResponse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
