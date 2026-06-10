<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyTimeSeriesRequestFormat;
use DateTime;

class CurrencyTimeSeriesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyTimeSeriesRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var DateTime $startDate Start date (format YYYY-MM-DD) of the preferred time frame
     */
    public DateTime $startDate;

    /**
     * @var ?DateTime $endDate End date (format YYYY-MM-DD) of the preferred time frame
     */
    public ?DateTime $endDate;

    /**
     * @var ?string $base Base currency
     */
    public ?string $base;

    /**
     * @var ?array<string> $symbols comma separated list of desired currencies/ commodities symbols
     */
    public ?array $symbols;

    /**
     * @param array{
     *   apiKey: string,
     *   startDate: DateTime,
     *   format?: ?value-of<CurrencyTimeSeriesRequestFormat>,
     *   endDate?: ?DateTime,
     *   base?: ?string,
     *   symbols?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->base = $values['base'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
    }
}
