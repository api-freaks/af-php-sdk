<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Reputation and trust signals related to the domain's email sending history.
 */
class DomainReputationResponseEmailDeliverabilityReputation extends JsonSerializableType
{
    /**
     * @var bool $spamBlacklisted Indicates whether the domain appears on known spam blacklists.
     */
    #[JsonProperty('spam_blacklisted')]
    public bool $spamBlacklisted;

    /**
     * @var bool $newlyRegistered Indicates whether the domain was registered recently.
     */
    #[JsonProperty('newly_registered')]
    public bool $newlyRegistered;

    /**
     * @var ?int $domainAgeDays Age of the domain in days since registration.
     */
    #[JsonProperty('domain_age_days')]
    public ?int $domainAgeDays;

    /**
     * @param array{
     *   spamBlacklisted: bool,
     *   newlyRegistered: bool,
     *   domainAgeDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->spamBlacklisted = $values['spamBlacklisted'];
        $this->newlyRegistered = $values['newlyRegistered'];
        $this->domainAgeDays = $values['domainAgeDays'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
