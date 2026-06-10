<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CurrencyConvertByIpResponse extends JsonSerializableType
{
    /**
     * @var string $date Date and time with timezone (UTC) representing the exact time at which the conversion rate was recorded.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $from Base currency code whose amount will be converted.
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to Desired currency code for the converted amount.
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var string $rate Current conversion rate with the base currency as the desired converted currency and the quote currency as the 'from' currency code.
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var string $ipAddress IP Address whose country's currency will be extracted and used as 'to'. Defaults to the request IP if not provided.
     */
    #[JsonProperty('ipAddress')]
    public string $ipAddress;

    /**
     * @var string $givenAmount The amount to be converted.
     */
    #[JsonProperty('givenAmount')]
    public string $givenAmount;

    /**
     * @var string $convertedAmount Converted amount in the desired currency.
     */
    #[JsonProperty('convertedAmount')]
    public string $convertedAmount;

    /**
     * @param array{
     *   date: string,
     *   from: string,
     *   to: string,
     *   rate: string,
     *   ipAddress: string,
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
        $this->ipAddress = $values['ipAddress'];
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
