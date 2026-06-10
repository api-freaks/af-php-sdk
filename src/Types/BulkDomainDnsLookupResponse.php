<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDomainDnsLookupResponse extends JsonSerializableType
{
    /**
     * @var array<BulkDomainDnsLookupResponseBulkDnsInfoItem> $bulkDnsInfo
     */
    #[JsonProperty('bulk_dns_info'), ArrayType([BulkDomainDnsLookupResponseBulkDnsInfoItem::class])]
    public array $bulkDnsInfo;

    /**
     * @param array{
     *   bulkDnsInfo: array<BulkDomainDnsLookupResponseBulkDnsInfoItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bulkDnsInfo = $values['bulkDnsInfo'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
