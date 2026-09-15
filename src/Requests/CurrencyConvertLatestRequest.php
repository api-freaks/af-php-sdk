<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyConvertLatestRequestFormat;
use Apifreaks\Types\CurrencyConvertLatestRequestUpdates;

class CurrencyConvertLatestRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyConvertLatestRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $from Source currency code
     */
    public string $from;

    /**
     * @var string $to Target currency code
     */
    public string $to;

    /**
     * @var ?float $amount Amount to convert
     */
    public ?float $amount;

    /**
     * @var ?value-of<CurrencyConvertLatestRequestUpdates> $updates Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)
     */
    public ?string $updates;

    /**
     * @param array{
     *   apiKey: string,
     *   from: string,
     *   to: string,
     *   format?: ?value-of<CurrencyConvertLatestRequestFormat>,
     *   amount?: ?float,
     *   updates?: ?value-of<CurrencyConvertLatestRequestUpdates>,
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
        $this->updates = $values['updates'] ?? null;
    }
}
