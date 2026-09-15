<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyConvertHistoricalRequestFormat;
use DateTime;

class CurrencyConvertHistoricalRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyConvertHistoricalRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $from From currency symbol
     */
    public string $from;

    /**
     * @var string $to To currency symbol
     */
    public string $to;

    /**
     * @var ?float $amount The Amount to be converted
     */
    public ?float $amount;

    /**
     * @var DateTime $date specific date (format YYYY-MM-DD) of which exchange rates is used.
     */
    public DateTime $date;

    /**
     * @param array{
     *   apiKey: string,
     *   from: string,
     *   to: string,
     *   date: DateTime,
     *   format?: ?value-of<CurrencyConvertHistoricalRequestFormat>,
     *   amount?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->amount = $values['amount'] ?? null;
        $this->date = $values['date'];
    }
}
