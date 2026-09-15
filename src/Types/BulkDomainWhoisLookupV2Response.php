<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

/**
 * Wrapper object containing one WHOIS result or error per requested domain, in request order.
 */
class BulkDomainWhoisLookupV2Response extends JsonSerializableType
{
    /**
     * @var array<(
     *    BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContact
     *   |BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemError
     * )> $bulkWhoisResponse Array of per-domain results, one entry per requested domain. Each entry is either a full WHOIS result or, if that domain could not be resolved, an error object.
     */
    #[JsonProperty('bulk_whois_response'), ArrayType([new Union(BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContact::class, BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemError::class)])]
    public array $bulkWhoisResponse;

    /**
     * @param array{
     *   bulkWhoisResponse: array<(
     *    BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemAbuseContact
     *   |BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemError
     * )>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bulkWhoisResponse = $values['bulkWhoisResponse'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
