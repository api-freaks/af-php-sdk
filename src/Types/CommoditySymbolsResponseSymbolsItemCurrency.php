<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommoditySymbolsResponseSymbolsItemCurrency extends JsonSerializableType
{
    /**
     * @var string $code The ISO 4217 currency code (e.g., "USD").
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name The full name of the currency (e.g., "US Dollar").
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $symbol The symbol of the currency (e.g., "$").
     */
    #[JsonProperty('symbol')]
    public string $symbol;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   symbol: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->symbol = $values['symbol'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
