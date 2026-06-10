<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencyHistoricalLimitsResponse extends JsonSerializableType
{
    /**
     * @var array<string, string> $availabilityPeriod Availability date range per currency, formatted "YYYY-MM-DD to YYYY-MM-DD".
     */
    #[JsonProperty('availabilityPeriod'), ArrayType(['string' => 'string'])]
    public array $availabilityPeriod;

    /**
     * @param array{
     *   availabilityPeriod: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->availabilityPeriod = $values['availabilityPeriod'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
