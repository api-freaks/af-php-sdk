<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityHistoricalRatesResponseRatesValue extends JsonSerializableType
{
    /**
     * @var string $date Date for which commodity prices were fetched. Format: YYYY-MM-DD.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var float $open The opening price of the commodity on the given date.
     */
    #[JsonProperty('open')]
    public float $open;

    /**
     * @var float $high The highest price of the commodity recorded on the given date.
     */
    #[JsonProperty('high')]
    public float $high;

    /**
     * @var float $low The lowest price of the commodity recorded on the given date.
     */
    #[JsonProperty('low')]
    public float $low;

    /**
     * @var float $close The closing price of the commodity on the given date.
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
