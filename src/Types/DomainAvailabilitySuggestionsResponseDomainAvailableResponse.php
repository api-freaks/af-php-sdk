<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Returned when `sug` is omitted or `true` — the queried domain plus suggested alternatives.
 */
class DomainAvailabilitySuggestionsResponseDomainAvailableResponse extends JsonSerializableType
{
    /**
     * @var ?array<DomainAvailabilitySuggestionsResponseDomainAvailableResponseDomainAvailableResponseItem> $domainAvailableResponse
     */
    #[JsonProperty('domain_available_response'), ArrayType([DomainAvailabilitySuggestionsResponseDomainAvailableResponseDomainAvailableResponseItem::class])]
    public ?array $domainAvailableResponse;

    /**
     * @param array{
     *   domainAvailableResponse?: ?array<DomainAvailabilitySuggestionsResponseDomainAvailableResponseDomainAvailableResponseItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domainAvailableResponse = $values['domainAvailableResponse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
