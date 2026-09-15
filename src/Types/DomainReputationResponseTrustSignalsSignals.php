<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Signals contributing to the trust score.
 */
class DomainReputationResponseTrustSignalsSignals extends JsonSerializableType
{
    /**
     * @var array<DomainReputationResponseTrustSignalsSignalsPositiveItem> $positive Signals that positively affect the trust score.
     */
    #[JsonProperty('positive'), ArrayType([DomainReputationResponseTrustSignalsSignalsPositiveItem::class])]
    public array $positive;

    /**
     * @var array<DomainReputationResponseTrustSignalsSignalsNegativeItem> $negative Signals that negatively affect the trust score.
     */
    #[JsonProperty('negative'), ArrayType([DomainReputationResponseTrustSignalsSignalsNegativeItem::class])]
    public array $negative;

    /**
     * @var array<DomainReputationResponseTrustSignalsSignalsNeutralItem> $neutral Signals that are neutral to the trust score.
     */
    #[JsonProperty('neutral'), ArrayType([DomainReputationResponseTrustSignalsSignalsNeutralItem::class])]
    public array $neutral;

    /**
     * @param array{
     *   positive: array<DomainReputationResponseTrustSignalsSignalsPositiveItem>,
     *   negative: array<DomainReputationResponseTrustSignalsSignalsNegativeItem>,
     *   neutral: array<DomainReputationResponseTrustSignalsSignalsNeutralItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->positive = $values['positive'];
        $this->negative = $values['negative'];
        $this->neutral = $values['neutral'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
