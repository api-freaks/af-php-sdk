<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityHistoricalRatesV2RequestFormat;
use DateTime;

class CommodityHistoricalRatesV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityHistoricalRatesV2RequestFormat> $format Response format. Currently only `json` is supported.
     */
    public ?string $format;

    /**
     * @var ?array<string> $symbols Comma-separated list of commodity symbols. Case-insensitive; duplicates are deduplicated server-side, with one response entry and one credit charge per unique symbol.
     */
    public ?array $symbols;

    /**
     * @var DateTime $date Date in YYYY-MM-DD format. Data available from 1990 onwards.
     */
    public DateTime $date;

    /**
     * @param array{
     *   apiKey: string,
     *   date: DateTime,
     *   format?: ?value-of<CommodityHistoricalRatesV2RequestFormat>,
     *   symbols?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
        $this->date = $values['date'];
    }
}
