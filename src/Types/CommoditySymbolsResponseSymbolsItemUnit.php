<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommoditySymbolsResponseSymbolsItemUnit extends JsonSerializableType
{
    /**
     * @var string $symbol The abbreviated unit symbol (e.g., "T.oz", "MMBtu").
     */
    #[JsonProperty('symbol')]
    public string $symbol;

    /**
     * @var string $name The full name of the unit of measurement.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   symbol: string,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->symbol = $values['symbol'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
