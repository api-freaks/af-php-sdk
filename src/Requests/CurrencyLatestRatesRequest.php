<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CurrencyLatestRatesRequestFormat;
use Apifreaks\Types\CurrencyLatestRatesRequestUpdates;

class CurrencyLatestRatesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CurrencyLatestRatesRequestFormat> $format Format of the response.
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
     * @var ?value-of<CurrencyLatestRatesRequestUpdates> $updates Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)
     */
    public ?string $updates;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<CurrencyLatestRatesRequestFormat>,
     *   base?: ?string,
     *   symbols?: ?array<string>,
     *   updates?: ?value-of<CurrencyLatestRatesRequestUpdates>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->base = $values['base'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
        $this->updates = $values['updates'] ?? null;
    }
}
