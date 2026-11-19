<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Current registration status of the domain.
 */
class DomainReputationResponseRegistration extends JsonSerializableType
{
    /**
     * @var string $status Registration status of the domain, for example `registered` or `not_registered`.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?int $pastRegistrations Number of earlier registrations found for the domain. Returned when the domain is not currently registered (for example `0`).
     */
    #[JsonProperty('past_registrations')]
    public ?int $pastRegistrations;

    /**
     * @param array{
     *   status: string,
     *   pastRegistrations?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->pastRegistrations = $values['pastRegistrations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
