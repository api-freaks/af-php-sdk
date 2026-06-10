<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyConvertByIpRequestFormat;
use Apifreaks\Types\CurrencyConvertByIpRequestUpdates;

class CurrencyConvertByIpRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyConvertByIpRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?value-of<CurrencyConvertByIpRequestUpdates> $updates Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)
     */
    public ?string $updates;

    /**
     * @var string $from From currency symbol
     */
    public string $from;

    /**
     * @var ?string $ip IPv4 or IPv6 geolocated currency
     */
    public ?string $ip;

    /**
     * @var ?float $amount Amount to convert
     */
    public ?float $amount;

    /**
     * @param array{
     *   apiKey: string,
     *   from: string,
     *   format?: ?value-of<CurrencyConvertByIpRequestFormat>,
     *   updates?: ?value-of<CurrencyConvertByIpRequestUpdates>,
     *   ip?: ?string,
     *   amount?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->updates = $values['updates'] ?? null;
        $this->from = $values['from'];
        $this->ip = $values['ip'] ?? null;
        $this->amount = $values['amount'] ?? null;
    }
}
