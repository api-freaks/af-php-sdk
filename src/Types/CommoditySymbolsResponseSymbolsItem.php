<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommoditySymbolsResponseSymbolsItem extends JsonSerializableType
{
    /**
     * @var string $symbol The unique ticker symbol for the commodity (e.g., "XAU", "NG-FUT").
     */
    #[JsonProperty('symbol')]
    public string $symbol;

    /**
     * @var string $name The full name of the commodity (e.g., "Gold", "Natural Gas Futures").
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $category The category the commodity belongs to (e.g., "Metals", "Energy").
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $status The current status of the commodity. Possible value: "active".
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<CommoditySymbolsResponseSymbolsItemUpdateInterval> $updateInterval The rate at which this commodity's price is updated.
     */
    #[JsonProperty('updateInterval')]
    public string $updateInterval;

    /**
     * @var CommoditySymbolsResponseSymbolsItemCurrency $currency
     */
    #[JsonProperty('currency')]
    public CommoditySymbolsResponseSymbolsItemCurrency $currency;

    /**
     * @var CommoditySymbolsResponseSymbolsItemUnit $unit
     */
    #[JsonProperty('unit')]
    public CommoditySymbolsResponseSymbolsItemUnit $unit;

    /**
     * @param array{
     *   symbol: string,
     *   name: string,
     *   category: string,
     *   status: string,
     *   updateInterval: value-of<CommoditySymbolsResponseSymbolsItemUpdateInterval>,
     *   currency: CommoditySymbolsResponseSymbolsItemCurrency,
     *   unit: CommoditySymbolsResponseSymbolsItemUnit,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->symbol = $values['symbol'];
        $this->name = $values['name'];
        $this->category = $values['category'];
        $this->status = $values['status'];
        $this->updateInterval = $values['updateInterval'];
        $this->currency = $values['currency'];
        $this->unit = $values['unit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
