<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainWhoisLookupResponse extends JsonSerializableType
{
    /**
     * @var ?array<BulkDomainWhoisLookupResponseBulkWhoisResponseItem> $bulkWhoisResponse
     */
    #[JsonProperty('bulk_whois_response'), ArrayType([BulkDomainWhoisLookupResponseBulkWhoisResponseItem::class])]
    public ?array $bulkWhoisResponse;

    /**
     * @param array{
     *   bulkWhoisResponse?: ?array<BulkDomainWhoisLookupResponseBulkWhoisResponseItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bulkWhoisResponse = $values['bulkWhoisResponse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
