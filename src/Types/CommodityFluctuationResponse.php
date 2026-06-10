<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityFluctuationResponse extends JsonSerializableType
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
     * @var ?array<string, CommodityFluctuationResponseMetadataValue> $metadata Map containing detailed information for all the requested commodities keyed by commodity symbol.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => CommodityFluctuationResponseMetadataValue::class])]
    public ?array $metadata;

    /**
     * @var string $startDate The start date of the fluctuation interval in YYYY-MM-DD format.
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var string $endDate The end date of the fluctuation interval in YYYY-MM-DD format.
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var array<string, CommodityFluctuationResponseRatesValue> $rates Map keyed by commodity symbol; value contains fluctuation metrics.
     */
    #[JsonProperty('rates'), ArrayType(['string' => CommodityFluctuationResponseRatesValue::class])]
    public array $rates;

    /**
     * @param array{
     *   success: bool,
     *   startDate: string,
     *   endDate: string,
     *   rates: array<string, CommodityFluctuationResponseRatesValue>,
     *   timestamp?: ?float,
     *   metadata?: ?array<string, CommodityFluctuationResponseMetadataValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
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
