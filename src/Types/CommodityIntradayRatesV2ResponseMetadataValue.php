<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Unit and currency of the prices for one commodity.
 */
class CommodityIntradayRatesV2ResponseMetadataValue extends JsonSerializableType
{
    /**
     * @var ?string $unit Unit the commodity is priced in (for example `T.oz` or `Bbl`).
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $quote Currency the prices are quoted in (for example `USD`).
     */
    #[JsonProperty('quote')]
    public ?string $quote;

    /**
     * @param array{
     *   unit?: ?string,
     *   quote?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->unit = $values['unit'] ?? null;
        $this->quote = $values['quote'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
