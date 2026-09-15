<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityHistoricalRatesResponse extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var ?float $timestamp Unix timestamp indicating when the response was generated.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * @var ?array<string, CommodityHistoricalRatesResponseMetadataValue> $metadata Map containing detailed information for all the requested commodities keyed by commodity symbol.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => CommodityHistoricalRatesResponseMetadataValue::class])]
    public ?array $metadata;

    /**
     * @var string $date Date for which the user requested the commodity price. Format: YYYY-MM-DD.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var array<string, CommodityHistoricalRatesResponseRatesValue> $rates Map containing rate data for each available requested commodity symbol, keyed by symbol.
     */
    #[JsonProperty('rates'), ArrayType(['string' => CommodityHistoricalRatesResponseRatesValue::class])]
    public array $rates;

    /**
     * @param array{
     *   success: bool,
     *   date: string,
     *   rates: array<string, CommodityHistoricalRatesResponseRatesValue>,
     *   timestamp?: ?float,
     *   metadata?: ?array<string, CommodityHistoricalRatesResponseMetadataValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->date = $values['date'];
        $this->rates = $values['rates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
