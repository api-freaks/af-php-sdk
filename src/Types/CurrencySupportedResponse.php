<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencySupportedResponse extends JsonSerializableType
{
    /**
     * @var array<string, CurrencySupportedResponseSupportedCurrenciesMapValue> $supportedCurrenciesMap A map of all supported currencies, keyed by currency code.
     */
    #[JsonProperty('supportedCurrenciesMap'), ArrayType(['string' => CurrencySupportedResponseSupportedCurrenciesMapValue::class])]
    public array $supportedCurrenciesMap;

    /**
     * @param array{
     *   supportedCurrenciesMap: array<string, CurrencySupportedResponseSupportedCurrenciesMapValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->supportedCurrenciesMap = $values['supportedCurrenciesMap'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
