<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencyTimeSeriesResponseHistoricalRatesListItem extends JsonSerializableType
{
    /**
     * @var string $date Date of the specific exchange rates.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var array<string, string> $rates A map of currency symbols to their respective exchange rates for the given date.
     */
    #[JsonProperty('rates'), ArrayType(['string' => 'string'])]
    public array $rates;

    /**
     * @param array{
     *   date: string,
     *   rates: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->rates = $values['rates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
