<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Backlink profile of the domain.
 */
class DomainReputationResponseBacklinks extends JsonSerializableType
{
    /**
     * @var bool $found true if backlink data exists for the domain. When false, the other fields are null.
     */
    #[JsonProperty('found')]
    public bool $found;

    /**
     * @var ?string $matchedDomain Domain the backlink data was matched to (for example `google.com`). null when no data was found.
     */
    #[JsonProperty('matched_domain')]
    public ?string $matchedDomain;

    /**
     * @var ?int $backlinkCount Total number of backlinks pointing to the domain (for example 174614443). null when no data was found.
     */
    #[JsonProperty('backlink_count')]
    public ?int $backlinkCount;

    /**
     * @var ?int $referringDomains Number of distinct domains linking to the domain (for example 4336653). null when no data was found.
     */
    #[JsonProperty('referring_domains')]
    public ?int $referringDomains;

    /**
     * @var ?float $referrerLinkDensity Average number of backlinks per referring domain (backlink_count / referring_domains, for example 40.26). null when no data was found.
     */
    #[JsonProperty('referrer_link_density')]
    public ?float $referrerLinkDensity;

    /**
     * @param array{
     *   found: bool,
     *   matchedDomain?: ?string,
     *   backlinkCount?: ?int,
     *   referringDomains?: ?int,
     *   referrerLinkDensity?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->found = $values['found'];
        $this->matchedDomain = $values['matchedDomain'] ?? null;
        $this->backlinkCount = $values['backlinkCount'] ?? null;
        $this->referringDomains = $values['referringDomains'] ?? null;
        $this->referrerLinkDensity = $values['referrerLinkDensity'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
