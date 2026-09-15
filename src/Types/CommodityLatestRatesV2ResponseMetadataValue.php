<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityLatestRatesV2ResponseMetadataValue extends JsonSerializableType
{
    /**
     * @var string $unit Unit of measurement for the commodity (e.g., Bbl, T.oz).
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var string $quote Quote currency used for this commodity's price.
     */
    #[JsonProperty('quote')]
    public string $quote;

    /**
     * @param array{
     *   unit: string,
     *   quote: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->unit = $values['unit'];
        $this->quote = $values['quote'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
