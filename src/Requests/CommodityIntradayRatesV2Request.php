<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityIntradayRatesV2RequestInterval;
use DateTime;

class CommodityIntradayRatesV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var string $symbols Exactly one commodity symbol. Case-insensitive. Sending two or more returns a 400. Only symbols updated every second, every minute, or every 10 minutes have intraday rates; symbols updated hourly or less often return a 400. Use the Commodity Symbols endpoint for all valid values.
     */
    public string $symbols;

    /**
     * @var value-of<CommodityIntradayRatesV2RequestInterval> $interval Spacing between points. Case-insensitive. Symbols updated every 10 minutes accept only `10m`, `30m`, `1h`, `2h`, `4h`, `8h`, `12h`, `1d`.
     */
    public string $interval;

    /**
     * @var DateTime $date The UTC day to read, in `YYYY-MM-DD` format. Cannot be in the future. For today, points stop at the current UTC minute.
     */
    public DateTime $date;

    /**
     * @var ?string $startTime First mark of the window, as a 24-hour UTC time in `HH:mm`. Must fall on a mark of the interval (for example, `14:30` works for `5m` or `30m`, but not for `1h`). For `1d` it can only be `00:00`.
     */
    public ?string $startTime;

    /**
     * @var ?bool $metadata Whether to include the `metadata` object. Pass `false` to receive only the prices.
     */
    public ?bool $metadata;

    /**
     * @param array{
     *   apiKey: string,
     *   symbols: string,
     *   interval: value-of<CommodityIntradayRatesV2RequestInterval>,
     *   date: DateTime,
     *   startTime?: ?string,
     *   metadata?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->symbols = $values['symbols'];
        $this->interval = $values['interval'];
        $this->date = $values['date'];
        $this->startTime = $values['startTime'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
    }
}
