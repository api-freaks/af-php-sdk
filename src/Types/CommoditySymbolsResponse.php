<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommoditySymbolsResponse extends JsonSerializableType
{
    /**
     * @var bool $success Indicates whether the API request was successful.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var array<CommoditySymbolsResponseSymbolsItem> $symbols An array of commodity symbol objects.
     */
    #[JsonProperty('symbols'), ArrayType([CommoditySymbolsResponseSymbolsItem::class])]
    public array $symbols;

    /**
     * @param array{
     *   success: bool,
     *   symbols: array<CommoditySymbolsResponseSymbolsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->symbols = $values['symbols'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
