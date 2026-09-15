<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class DomainAvailabilitySuggestionsResponse extends JsonSerializableType
{
    /**
     * @var ?array<DomainAvailabilitySuggestionsResponseDomainAvailableResponseItem> $domainAvailableResponse
     */
    #[JsonProperty('domain_available_response'), ArrayType([DomainAvailabilitySuggestionsResponseDomainAvailableResponseItem::class])]
    public ?array $domainAvailableResponse;

    /**
     * @param array{
     *   domainAvailableResponse?: ?array<DomainAvailabilitySuggestionsResponseDomainAvailableResponseItem>,
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
