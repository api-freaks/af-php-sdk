<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommoditySymbolsRequestFormat;

class CommoditySymbolsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommoditySymbolsRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<CommoditySymbolsRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
    }
}
