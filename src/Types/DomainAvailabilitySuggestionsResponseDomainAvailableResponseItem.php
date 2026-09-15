<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainAvailabilitySuggestionsResponseDomainAvailableResponseItem extends JsonSerializableType
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
     * @var ?string $message Extra details if the domain is not registered.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   domain?: ?string,
     *   domainAvailability?: ?bool,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domain = $values['domain'] ?? null;
        $this->domainAvailability = $values['domainAvailability'] ?? null;
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
