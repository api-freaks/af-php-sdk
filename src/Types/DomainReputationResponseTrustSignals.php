<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Trust scoring and supporting signals for the domain.
 */
class DomainReputationResponseTrustSignals extends JsonSerializableType
{
    /**
     * @var int $trustScore Overall trust score (0-100).
     */
    #[JsonProperty('trust_score')]
    public int $trustScore;

    /**
     * @var string $trustBand Trust score band / category (e.g. low, medium, high).
     */
    #[JsonProperty('trust_band')]
    public string $trustBand;

    /**
     * @var DomainReputationResponseTrustSignalsSignals $signals Signals contributing to the trust score.
     */
    #[JsonProperty('signals')]
    public DomainReputationResponseTrustSignalsSignals $signals;

    /**
     * @var DomainReputationResponseTrustSignalsIndicators $indicators Individual trust / risk indicators for the domain.
     */
    #[JsonProperty('indicators')]
    public DomainReputationResponseTrustSignalsIndicators $indicators;

    /**
     * @param array{
     *   trustScore: int,
     *   trustBand: string,
     *   signals: DomainReputationResponseTrustSignalsSignals,
     *   indicators: DomainReputationResponseTrustSignalsIndicators,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->trustScore = $values['trustScore'];
        $this->trustBand = $values['trustBand'];
        $this->signals = $values['signals'];
        $this->indicators = $values['indicators'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
