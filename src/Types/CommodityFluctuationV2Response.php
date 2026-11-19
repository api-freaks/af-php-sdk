<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityFluctuationV2Response extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

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
     * @var array<string, CommodityFluctuationV2ResponseRatesValue> $rates Map keyed by commodity symbol; value contains fluctuation metrics.
     */
    #[JsonProperty('rates'), ArrayType(['string' => CommodityFluctuationV2ResponseRatesValue::class])]
    public array $rates;

    /**
     * @var ?array<string, CommodityFluctuationV2ResponseUnresolvedValue> $unresolved Present only on a 206 Partial Content response, when some requested symbols could not be resolved. Map of each unresolved symbol to a detail message and optional close-match suggestions.
     */
    #[JsonProperty('unresolved'), ArrayType(['string' => CommodityFluctuationV2ResponseUnresolvedValue::class])]
    public ?array $unresolved;

    /**
     * @param array{
     *   success: bool,
     *   startDate: string,
     *   endDate: string,
     *   rates: array<string, CommodityFluctuationV2ResponseRatesValue>,
     *   unresolved?: ?array<string, CommodityFluctuationV2ResponseUnresolvedValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->rates = $values['rates'];
        $this->unresolved = $values['unresolved'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
