<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityLatestRatesV2RequestFormat;

class CommodityLatestRatesV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityLatestRatesV2RequestFormat> $format Response format. Currently only `json` is supported.
     */
    public ?string $format;

    /**
     * @var ?array<string> $symbols Comma-separated list of commodity symbols (e.g., XAU, WTIOIL-SPOT). Case-insensitive; duplicates are deduplicated server-side, with one response entry and one credit charge per unique symbol.
     */
    public ?array $symbols;

    /**
     * @var ?string $quote Target currency for the exchange rate. If omitted (or set to `default`), the default quote currency of each commodity is used. Requires a premium plan; ignored on lower-tier plans.
     */
    public ?string $quote;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<CommodityLatestRatesV2RequestFormat>,
     *   symbols?: ?array<string>,
     *   quote?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
        $this->quote = $values['quote'] ?? null;
    }
}
