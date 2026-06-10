<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencyLatestRatesResponse extends JsonSerializableType
{
    /**
     * @var string $date For the latest currencies exchange rates endpoint, it is the date and time with timezone (UTC) at which these rates were recorded. For historical currencies exchange rates endpoint, it is the specific date in YYYY-MM-DD format.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $base Base currency used for calculating exchange rates.
     */
    #[JsonProperty('base')]
    public string $base;

    /**
     * @var array<string, string> $rates A map of currency codes to their exchange rate against the base currency.
     */
    #[JsonProperty('rates'), ArrayType(['string' => 'string'])]
    public array $rates;

    /**
     * @param array{
     *   date: string,
     *   base: string,
     *   rates: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->base = $values['base'];
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
