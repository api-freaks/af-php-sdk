<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityFluctuationV2RequestFormat;
use DateTime;

class CommodityFluctuationV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityFluctuationV2RequestFormat> $format Response format. Currently only `json` is supported.
     */
    public ?string $format;

    /**
     * @var ?array<string> $symbols Comma-separated list of commodity symbols. Case-insensitive; duplicates are deduplicated server-side, with one response entry and one credit charge per unique symbol.
     */
    public ?array $symbols;

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
     *   format?: ?value-of<CommodityFluctuationV2RequestFormat>,
     *   symbols?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->symbols = $values['symbols'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
    }
}
