<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetCountryDetailsRequestFormat;

class GetCountryDetailsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetCountryDetailsRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   format?: ?value-of<GetCountryDetailsRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
    }
}
