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
     * @var ?value-of<VatSupportedCountriesRequestType> $type Type of supported country. Supported values: IBAN, SWIFT, VAT. By default, it returns all supported countries for all types.
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
