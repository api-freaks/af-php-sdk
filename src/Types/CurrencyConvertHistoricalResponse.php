<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CurrencyConvertHistoricalResponse extends JsonSerializableType
{
    /**
     * @var string $date For the latest rates converter, it is the date and time with timezone (UTC) when the rate was recorded. For historical converter, it is the date provided in the input (format: YYYY-MM-DD).
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $from Base currency code (the currency being converted from).
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to Desired currency code (the currency to convert to).
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var string $rate Conversion rate from base currency to desired currency.
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var string $givenAmount The amount in base currency to be converted.
     */
    #[JsonProperty('givenAmount')]
    public string $givenAmount;

    /**
     * @var string $convertedAmount The result of the conversion in the desired currency.
     */
    #[JsonProperty('convertedAmount')]
    public string $convertedAmount;

    /**
     * @param array{
     *   date: string,
     *   from: string,
     *   to: string,
     *   rate: string,
     *   givenAmount: string,
     *   convertedAmount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->rate = $values['rate'];
        $this->givenAmount = $values['givenAmount'];
        $this->convertedAmount = $values['convertedAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
