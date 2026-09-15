<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommoditySymbolsV2Response extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var array<CommoditySymbolsV2ResponseSymbolsItem> $symbols An array of commodity symbol objects.
     */
    #[JsonProperty('symbols'), ArrayType([CommoditySymbolsV2ResponseSymbolsItem::class])]
    public array $symbols;

    /**
     * @param array{
     *   success: bool,
     *   symbols: array<CommoditySymbolsV2ResponseSymbolsItem>,
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
