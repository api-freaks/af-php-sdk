<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A threat intelligence source that flagged the domain.
 */
class DomainReputationResponseRiskCategorySourcesItem extends JsonSerializableType
{
    /**
     * @var string $source Name of the threat intelligence source (e.g. Spamhaus).
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $indicator Indicator matched by this source.
     */
    #[JsonProperty('indicator')]
    public string $indicator;

    /**
     * @var string $threatType Threat type reported by this source.
     */
    #[JsonProperty('threat_type')]
    public string $threatType;

    /**
     * @var float $confidence Confidence score from this source (0-1).
     */
    #[JsonProperty('confidence')]
    public float $confidence;

    /**
     * @var string $firstSeen First time this indicator was seen by the source (YYYY-MM-DDTHH:mm:ssZ).
     */
    #[JsonProperty('first_seen')]
    public string $firstSeen;

    /**
     * @var string $lastSeen Last time this indicator was seen by the source (YYYY-MM-DDTHH:mm:ssZ).
     */
    #[JsonProperty('last_seen')]
    public string $lastSeen;

    /**
     * @param array{
     *   source: string,
     *   indicator: string,
     *   threatType: string,
     *   confidence: float,
     *   firstSeen: string,
     *   lastSeen: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->source = $values['source'];
        $this->indicator = $values['indicator'];
        $this->threatType = $values['threatType'];
        $this->confidence = $values['confidence'];
        $this->firstSeen = $values['firstSeen'];
        $this->lastSeen = $values['lastSeen'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
