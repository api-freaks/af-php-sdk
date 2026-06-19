<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityTimeSeriesRequestFormat;
use DateTime;

class CommodityTimeSeriesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityTimeSeriesRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $symbols Comma-separated list of commodity symbols
     */
    public array $symbols;

    /**
     * @var DateTime $startDate Start date (YYYY-MM-DD)
     */
    public DateTime $startDate;

    /**
     * @var DateTime $endDate End date (YYYY-MM-DD)
     */
    public DateTime $endDate;

    /**
     * @param array{
     *   apiKey: string,
     *   startDate: DateTime,
     *   endDate: DateTime,
     *   symbols: array<string>,
     *   format?: ?value-of<CommodityTimeSeriesRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->symbols = $values['symbols'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
    }
}
