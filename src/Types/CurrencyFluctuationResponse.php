<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencyFluctuationResponse extends JsonSerializableType
{
    /**
     * @var string $startDate Starting date of the interval (provided via input).
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var string $endDate Ending date of the interval (provided via input).
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var string $base Base currency with respect to which all fluctuations are calculated.
     */
    #[JsonProperty('base')]
    public string $base;

    /**
     * @var array<string, CurrencyFluctuationResponseRateFluctuationsValue> $rateFluctuations A map of currency symbols to their fluctuation details.
     */
    #[JsonProperty('rateFluctuations'), ArrayType(['string' => CurrencyFluctuationResponseRateFluctuationsValue::class])]
    public array $rateFluctuations;

    /**
     * @param array{
     *   startDate: string,
     *   endDate: string,
     *   base: string,
     *   rateFluctuations: array<string, CurrencyFluctuationResponseRateFluctuationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->base = $values['base'];
        $this->rateFluctuations = $values['rateFluctuations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
