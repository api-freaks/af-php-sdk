<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

class CommoditySymbolsV2ResponseSymbolsItem extends JsonSerializableType
{
    /**
     * @var string $symbol Unique identifier/ticker symbol for the commodity (e.g., XAU, NG-FUT). Use this value in the symbols parameter of the rate endpoints.
     */
    #[JsonProperty('symbol')]
    public string $symbol;

    /**
     * @var string $name Full name of the commodity (e.g., Gold, Natural Gas Futures).
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description Short description of the commodity. May be an empty string for some symbols.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $category Category the commodity belongs to (e.g., Metals, Energy, Agriculture, Industrial, Raw Materials, Oils and Meals, Textiles, Meats, Poultry, Livestock).
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var value-of<CommoditySymbolsV2ResponseSymbolsItemStatus> $status Current status of the commodity. "inactive" means the symbol is deprecated - latest rates are unavailable, but historical rates remain available up to its deprecationDate.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<CommoditySymbolsV2ResponseSymbolsItemUpdateInterval> $updateInterval The rate at which this commodity's price is updated.
     */
    #[JsonProperty('updateInterval')]
    public string $updateInterval;

    /**
     * @var ?string $exchange Data source for the symbol (e.g., World Bank). Present only for some symbols.
     */
    #[JsonProperty('exchange')]
    public ?string $exchange;

    /**
     * @var ?DateTime $deprecationDate Present only when status is "inactive". Date the symbol was deprecated (YYYY-MM-DD).
     */
    #[JsonProperty('deprecationDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $deprecationDate;

    /**
     * @var CommoditySymbolsV2ResponseSymbolsItemCurrency $currency
     */
    #[JsonProperty('currency')]
    public CommoditySymbolsV2ResponseSymbolsItemCurrency $currency;

    /**
     * @var CommoditySymbolsV2ResponseSymbolsItemUnit $unit
     */
    #[JsonProperty('unit')]
    public CommoditySymbolsV2ResponseSymbolsItemUnit $unit;

    /**
     * @param array{
     *   symbol: string,
     *   name: string,
     *   category: string,
     *   status: value-of<CommoditySymbolsV2ResponseSymbolsItemStatus>,
     *   updateInterval: value-of<CommoditySymbolsV2ResponseSymbolsItemUpdateInterval>,
     *   currency: CommoditySymbolsV2ResponseSymbolsItemCurrency,
     *   unit: CommoditySymbolsV2ResponseSymbolsItemUnit,
     *   description?: ?string,
     *   exchange?: ?string,
     *   deprecationDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->symbol = $values['symbol'];
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->category = $values['category'];
        $this->status = $values['status'];
        $this->updateInterval = $values['updateInterval'];
        $this->exchange = $values['exchange'] ?? null;
        $this->deprecationDate = $values['deprecationDate'] ?? null;
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
