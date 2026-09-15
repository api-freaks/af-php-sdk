<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\CommodityFluctuationRequestFormat;
use DateTime;

class CommodityFluctuationRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<CommodityFluctuationRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?array<string> $symbols Comma-separated list of commodity symbols
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
     *   format?: ?value-of<CommodityFluctuationRequestFormat>,
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
