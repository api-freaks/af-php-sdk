<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityLatestRatesRequestFormat;
use Apifreaks\Types\CommodityLatestRatesRequestUpdates;

class CommodityLatestRatesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityLatestRatesRequestFormat> $format Format of the Response
     */
    public ?string $format;

    /**
     * @var ?array<string> $symbols Comma separated list of desired commodities symbols *(e.g. XAU,XAG,WTI,BRENT)* **Required**
     */
    public ?array $symbols;

    /**
     * @var value-of<CommodityLatestRatesRequestUpdates> $updates Exchange rates update period. Possible values are: (1) `10m` - 10 minute update (2) `1m` - 1 minute update **Required**
     */
    public string $updates;

    /**
     * @var ?string $quote Specifies the target currency for the exchange rate; default quote currency is the market currency of commodity *(e.g. USD, EUR, INR)*
     */
    public ?string $quote;

    /**
     * @param array{
     *   apiKey: string,
     *   updates: value-of<CommodityLatestRatesRequestUpdates>,
     *   format?: ?value-of<CommodityLatestRatesRequestFormat>,
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
        $this->updates = $values['updates'];
        $this->quote = $values['quote'] ?? null;
    }
}
