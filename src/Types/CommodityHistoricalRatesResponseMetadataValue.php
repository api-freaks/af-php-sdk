<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class CommodityHistoricalRatesResponseMetadataValue extends JsonSerializableType
{
    /**
     * @var string $unit Unit of the respective commodity.
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var string $quote Quote currency of the respective commodity.
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
