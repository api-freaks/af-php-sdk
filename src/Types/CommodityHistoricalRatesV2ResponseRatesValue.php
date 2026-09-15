<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityHistoricalRatesV2ResponseRatesValue extends JsonSerializableType
{
    /**
     * @var string $date Date for which prices were fetched (YYYY-MM-DD). May differ from the requested date when the API falls back to the last available rate before it, or snaps to the first day of the month for monthly-updated commodities.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var float $open Opening price on the given date. 0 for monthly-updated commodities.
     */
    #[JsonProperty('open')]
    public float $open;

    /**
     * @var float $high Highest price recorded on the given date. 0 for monthly-updated commodities.
     */
    #[JsonProperty('high')]
    public float $high;

    /**
     * @var float $low Lowest price recorded on the given date. 0 for monthly-updated commodities.
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
     *   date: string,
     *   open: float,
     *   high: float,
     *   low: float,
     *   close: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
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
