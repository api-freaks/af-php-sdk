<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityFluctuationResponseRatesValue extends JsonSerializableType
{
    /**
     * @var float $startRate The price of the commodity on the start date of the interval.
     */
    #[JsonProperty('startRate')]
    public float $startRate;

    /**
     * @var float $endRate The price of the commodity on the end date of the interval.
     */
    #[JsonProperty('endRate')]
    public float $endRate;

    /**
     * @var float $change The absolute price difference between the end and start date. May be positive or negative.
     */
    #[JsonProperty('change')]
    public float $change;

    /**
     * @var float $changePercent The percentage change in price from start to end date. May be positive or negative.
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
