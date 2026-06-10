<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyHistoricalRatesRequestFormat;
use DateTime;

class CurrencyHistoricalRatesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyHistoricalRatesRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $base Base currency for rate calculations
     */
    public ?string $base;

    /**
     * @var ?array<string> $symbols Comma separated list of desired currency codes
     */
    public ?array $symbols;

    /**
     * @var DateTime $date Specific date in YYYY-MM-DD format
     */
    public DateTime $date;

    /**
     * @param array{
     *   apiKey: string,
     *   date: DateTime,
     *   format?: ?value-of<CurrencyHistoricalRatesRequestFormat>,
     *   base?: ?string,
     *   symbols?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->base = $values['base'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
        $this->date = $values['date'];
    }
}
