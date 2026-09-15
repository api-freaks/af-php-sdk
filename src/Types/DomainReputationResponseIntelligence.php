<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Threat intelligence details for the indicator of compromise (IOC).
 */
class DomainReputationResponseIntelligence extends JsonSerializableType
{
    /**
     * @var string $iocType Type of the indicator of compromise (e.g. domain).
     */
    #[JsonProperty('ioc_type')]
    public string $iocType;

    /**
     * @var string $iocValue Value of the indicator of compromise.
     */
    #[JsonProperty('ioc_value')]
    public string $iocValue;

    /**
     * @var array<DomainReputationResponseIntelligenceRelatedIocsItem> $relatedIocs Other IOCs related to this domain.
     */
    #[JsonProperty('related_iocs'), ArrayType([DomainReputationResponseIntelligenceRelatedIocsItem::class])]
    public array $relatedIocs;

    /**
     * @var array<string> $feedTags Tags associated with this IOC from threat feeds.
     */
    #[JsonProperty('feed_tags'), ArrayType(['string'])]
    public array $feedTags;

    /**
     * @var string $stixPattern STIX 2.1 pattern representation of the IOC, ready to wrap into an Indicator object.
     */
    #[JsonProperty('stix_pattern')]
    public string $stixPattern;

    /**
     * @var value-of<DomainReputationResponseIntelligenceRecommendedAction> $recommendedAction Recommended action based on the assessment.
     */
    #[JsonProperty('recommended_action')]
    public string $recommendedAction;

    /**
     * @var ?string $firstSeen First time this IOC was observed (YYYY-MM-DDTHH:mm:ssZ). null when never observed on a feed.
     */
    #[JsonProperty('first_seen')]
    public ?string $firstSeen;

    /**
     * @var ?string $lastSeen Last time this IOC was observed (YYYY-MM-DDTHH:mm:ssZ). null when never observed on a feed.
     */
    #[JsonProperty('last_seen')]
    public ?string $lastSeen;

    /**
     * @param array{
     *   iocType: string,
     *   iocValue: string,
     *   relatedIocs: array<DomainReputationResponseIntelligenceRelatedIocsItem>,
     *   feedTags: array<string>,
     *   stixPattern: string,
     *   recommendedAction: value-of<DomainReputationResponseIntelligenceRecommendedAction>,
     *   firstSeen?: ?string,
     *   lastSeen?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->iocType = $values['iocType'];
        $this->iocValue = $values['iocValue'];
        $this->relatedIocs = $values['relatedIocs'];
        $this->feedTags = $values['feedTags'];
        $this->stixPattern = $values['stixPattern'];
        $this->recommendedAction = $values['recommendedAction'];
        $this->firstSeen = $values['firstSeen'] ?? null;
        $this->lastSeen = $values['lastSeen'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
