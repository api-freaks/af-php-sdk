<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CurrencyFluctuationResponseRateFluctuationsValue extends JsonSerializableType
{
    /**
     * @var string $startRate Starting rate of the currency during the interval.
     */
    #[JsonProperty('startRate')]
    public string $startRate;

    /**
     * @var string $endRate Ending rate of the currency during the interval.
     */
    #[JsonProperty('endRate')]
    public string $endRate;

    /**
     * @var string $change Absolute change in currency rate over the interval.
     */
    #[JsonProperty('change')]
    public string $change;

    /**
     * @var string $percentChange Percentage change in currency rate over the interval.
     */
    #[JsonProperty('percentChange')]
    public string $percentChange;

    /**
     * @param array{
     *   startRate: string,
     *   endRate: string,
     *   change: string,
     *   percentChange: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->startRate = $values['startRate'];
        $this->endRate = $values['endRate'];
        $this->change = $values['change'];
        $this->percentChange = $values['percentChange'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
