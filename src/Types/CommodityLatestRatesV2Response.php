<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityLatestRatesV2Response extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var int $timestamp Unix timestamp (seconds) indicating when the response was generated.
     */
    #[JsonProperty('timestamp')]
    public int $timestamp;

    /**
     * @var array<string, float> $rates Map of requested commodity symbols to their current live price.
     */
    #[JsonProperty('rates'), ArrayType(['string' => 'float'])]
    public array $rates;

    /**
     * @var array<string, CommodityLatestRatesV2ResponseMetadataValue> $metadata Map containing unit and quote currency metadata for all requested commodities, keyed by commodity symbol.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => CommodityLatestRatesV2ResponseMetadataValue::class])]
    public array $metadata;

    /**
     * @var ?string $warning Present only when currency conversion for the requested `quote` is temporarily unavailable; rates are returned in each commodity's default currency instead.
     */
    #[JsonProperty('warning')]
    public ?string $warning;

    /**
     * @param array{
     *   success: bool,
     *   timestamp: int,
     *   rates: array<string, float>,
     *   metadata: array<string, CommodityLatestRatesV2ResponseMetadataValue>,
     *   warning?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->timestamp = $values['timestamp'];
        $this->rates = $values['rates'];
        $this->metadata = $values['metadata'];
        $this->warning = $values['warning'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
