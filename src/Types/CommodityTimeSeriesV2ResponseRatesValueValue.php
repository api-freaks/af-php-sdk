<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityTimeSeriesV2ResponseRatesValueValue extends JsonSerializableType
{
    /**
     * @var float $open Opening price on the given date. 0 for monthly-updated commodities.
     */
    #[JsonProperty('open')]
    public float $open;

    /**
     * @var float $high Highest price on the given date. 0 for monthly-updated commodities.
     */
    #[JsonProperty('high')]
    public float $high;

    /**
     * @var float $low Lowest price on the given date. 0 for monthly-updated commodities.
     */
    #[JsonProperty('low')]
    public float $low;

    /**
     * @var float $close Closing price on the given date.
     */
    #[JsonProperty('close')]
    public float $close;

    /**
     * @param array{
     *   open: float,
     *   high: float,
     *   low: float,
     *   close: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->open = $values['open'];
        $this->high = $values['high'];
        $this->low = $values['low'];
        $this->close = $values['close'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
