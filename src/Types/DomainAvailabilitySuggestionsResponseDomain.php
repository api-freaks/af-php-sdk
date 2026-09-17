<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Returned when `sug=false` — availability for the queried domain only, no suggestions.
 */
class DomainAvailabilitySuggestionsResponseDomain extends JsonSerializableType
{
    /**
     * @var ?string $domain
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?bool $domainAvailability
     */
    #[JsonProperty('domainAvailability')]
    public ?bool $domainAvailability;

    /**
     * @param array{
     *   domain?: ?string,
     *   domainAvailability?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domain = $values['domain'] ?? null;
        $this->domainAvailability = $values['domainAvailability'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
