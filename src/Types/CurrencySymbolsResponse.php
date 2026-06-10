<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencySymbolsResponse extends JsonSerializableType
{
    /**
     * @var array<string, string> $currencySymbols A map of all currency symbols keyed by currency code; value is the full currency name.
     */
    #[JsonProperty('currencySymbols'), ArrayType(['string' => 'string'])]
    public array $currencySymbols;

    /**
     * @param array{
     *   currencySymbols: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencySymbols = $values['currencySymbols'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
