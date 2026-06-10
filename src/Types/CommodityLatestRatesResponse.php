<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityLatestRatesResponse extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. 'true' for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var float $timestamp Unix timestamp indicating when the response was generated.
     */
    #[JsonProperty('timestamp')]
    public float $timestamp;

    /**
     * @var array<string, float> $rates Map containing rate data for all the requested commodities.
     */
    #[JsonProperty('rates'), ArrayType(['string' => 'float'])]
    public array $rates;

    /**
     * @var array<string, CommodityLatestRatesResponseMetadataValue> $metadata Map containing detailed information for all the requested commodities keyed by commodity symbol.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => CommodityLatestRatesResponseMetadataValue::class])]
    public array $metadata;

    /**
     * @param array{
     *   success: bool,
     *   timestamp: float,
     *   rates: array<string, float>,
     *   metadata: array<string, CommodityLatestRatesResponseMetadataValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->timestamp = $values['timestamp'];
        $this->rates = $values['rates'];
        $this->metadata = $values['metadata'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
