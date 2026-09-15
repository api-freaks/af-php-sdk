<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityFluctuationV2ResponseRatesValue extends JsonSerializableType
{
    /**
     * @var float $startRate Price of the commodity on the start date.
     */
    #[JsonProperty('startRate')]
    public float $startRate;

    /**
     * @var float $endRate Price of the commodity on the end date.
     */
    #[JsonProperty('endRate')]
    public float $endRate;

    /**
     * @var float $change Absolute price difference between end and start dates. May be negative.
     */
    #[JsonProperty('change')]
    public float $change;

    /**
     * @var float $changePercent Percentage price change from start to end date. May be negative.
     */
    #[JsonProperty('changePercent')]
    public float $changePercent;

    /**
     * @param array{
     *   startRate: float,
     *   endRate: float,
     *   change: float,
     *   changePercent: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->startRate = $values['startRate'];
        $this->endRate = $values['endRate'];
        $this->change = $values['change'];
        $this->changePercent = $values['changePercent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
