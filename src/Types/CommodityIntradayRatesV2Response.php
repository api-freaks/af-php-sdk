<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Intraday response containing the prices of the requested symbol keyed by UTC timestamp.
 */
class CommodityIntradayRatesV2Response extends JsonSerializableType
{
    /**
     * @var bool $success `true` for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var string $symbol The symbol the prices belong to.
     */
    #[JsonProperty('symbol')]
    public string $symbol;

    /**
     * @var string $date The UTC day requested. Format: `YYYY-MM-DD`.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var value-of<CommodityIntradayRatesV2ResponseInterval> $interval The interval used, in lowercase form (`5M` comes back as `5m`).
     */
    #[JsonProperty('interval')]
    public string $interval;

    /**
     * @var string $startTime First mark of the window, `HH:mm` UTC.
     */
    #[JsonProperty('startTime')]
    public string $startTime;

    /**
     * @var int $count Number of points in `rates` (at most 100).
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var ?string $nextStartTime `HH:mm` value to pass as `startTime` for the next page, or `null` when the window reached the end of the day (or the current minute, for today).
     */
    #[JsonProperty('nextStartTime')]
    public ?string $nextStartTime;

    /**
     * @var array<string, float> $rates Prices keyed by ISO 8601 UTC timestamp (for example `2026-10-14T18:00:00Z`), in ascending order. Values are rounded to two decimals. A mark with no recorded price is left out rather than filled in.
     */
    #[JsonProperty('rates'), ArrayType(['string' => 'float'])]
    public array $rates;

    /**
     * @var ?array<string, CommodityIntradayRatesV2ResponseMetadataValue> $metadata Unit and currency of the prices, keyed by the requested symbol. Omitted when the request sets `metadata=false`.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => CommodityIntradayRatesV2ResponseMetadataValue::class])]
    public ?array $metadata;

    /**
     * @var ?array<string, CommodityIntradayRatesV2ResponseUnresolvedValue> $unresolved Present when the symbol you sent was matched to a single alternative (200, with `resolvedTo`, for example `GOLD` answered as `XAU`), or not recognized at all (404, with a `suggestions` array when close matches exist).
     */
    #[JsonProperty('unresolved'), ArrayType(['string' => CommodityIntradayRatesV2ResponseUnresolvedValue::class])]
    public ?array $unresolved;

    /**
     * @param array{
     *   success: bool,
     *   symbol: string,
     *   date: string,
     *   interval: value-of<CommodityIntradayRatesV2ResponseInterval>,
     *   startTime: string,
     *   count: int,
     *   rates: array<string, float>,
     *   nextStartTime?: ?string,
     *   metadata?: ?array<string, CommodityIntradayRatesV2ResponseMetadataValue>,
     *   unresolved?: ?array<string, CommodityIntradayRatesV2ResponseUnresolvedValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->symbol = $values['symbol'];
        $this->date = $values['date'];
        $this->interval = $values['interval'];
        $this->startTime = $values['startTime'];
        $this->count = $values['count'];
        $this->nextStartTime = $values['nextStartTime'] ?? null;
        $this->rates = $values['rates'];
        $this->metadata = $values['metadata'] ?? null;
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
