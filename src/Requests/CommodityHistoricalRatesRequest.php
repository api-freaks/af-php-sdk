<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityHistoricalRatesRequestFormat;
use DateTime;

class CommodityHistoricalRatesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityHistoricalRatesRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var DateTime $date Historical date (YYYY-MM-DD)
     */
    public DateTime $date;

    /**
     * @var ?array<string> $symbols Comma-separated list of commodity symbols
     */
    public ?array $symbols;

    /**
     * @param array{
     *   apiKey: string,
     *   date: DateTime,
     *   format?: ?value-of<CommodityHistoricalRatesRequestFormat>,
     *   symbols?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->date = $values['date'];
        $this->symbols = $values['symbols'] ?? null;
    }
}
