<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkVatRateByCountryRequestFormat;
use Apifreaks\Types\BulkVatRateByCountryRequestCountriesItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkVatRateByCountryRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkVatRateByCountryRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var array<BulkVatRateByCountryRequestCountriesItem> $countries
     */
    #[JsonProperty('countries'), ArrayType([BulkVatRateByCountryRequestCountriesItem::class])]
    public array $countries;

    /**
     * @param array{
     *   apiKey: string,
     *   countries: array<BulkVatRateByCountryRequestCountriesItem>,
     *   format?: ?value-of<BulkVatRateByCountryRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->countries = $values['countries'];
    }
}
