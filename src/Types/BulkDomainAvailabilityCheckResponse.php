<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainAvailabilityCheckResponse extends JsonSerializableType
{
    /**
     * @var ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem> $bulkDomainAvailableResponse Deprecated: the API returns this field as `bulk_domain_availability_response`; read `bulk_domain_availability_response` instead.
     */
    #[JsonProperty('bulk_domain_available_response'), ArrayType([BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem::class])]
    public ?array $bulkDomainAvailableResponse;

    /**
     * @var ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailabilityResponseItem> $bulkDomainAvailabilityResponse
     */
    #[JsonProperty('bulk_domain_availability_response'), ArrayType([BulkDomainAvailabilityCheckResponseBulkDomainAvailabilityResponseItem::class])]
    public ?array $bulkDomainAvailabilityResponse;

    /**
     * @param array{
     *   bulkDomainAvailableResponse?: ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem>,
     *   bulkDomainAvailabilityResponse?: ?array<BulkDomainAvailabilityCheckResponseBulkDomainAvailabilityResponseItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bulkDomainAvailableResponse = $values['bulkDomainAvailableResponse'] ?? null;
        $this->bulkDomainAvailabilityResponse = $values['bulkDomainAvailabilityResponse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
