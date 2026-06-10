<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkDomainAvailabilityCheckResponseBulkDomainAvailableResponseItem extends JsonSerializableType
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
     * @var ?bool $status
     */
    #[JsonProperty('status')]
    public ?bool $status;

    /**
     * @param array{
     *   domain?: ?string,
     *   domainAvailability?: ?bool,
     *   status?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domain = $values['domain'] ?? null;
        $this->domainAvailability = $values['domainAvailability'] ?? null;
        $this->status = $values['status'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
