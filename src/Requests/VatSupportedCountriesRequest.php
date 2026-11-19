<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\VatSupportedCountriesRequestFormat;
use Apifreaks\Types\VatSupportedCountriesRequestType;

class VatSupportedCountriesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<VatSupportedCountriesRequestFormat> $format Format of the response. Default is JSON.
     */
    public ?string $format;

    /**
     * @var ?value-of<VatSupportedCountriesRequestType> $type Which list to return: VAT (`VAT_Supported_Countries_And_States`), IBAN (`IBAN_Supported_Countries`) or SWIFT (`SWIFT_Supported_Countries`). Each value returns only its own list. If omitted (or unknown), all three lists are returned.
     */
    public ?string $type;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<VatSupportedCountriesRequestFormat>,
     *   type?: ?value-of<VatSupportedCountriesRequestType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->type = $values['type'] ?? null;
    }
}
