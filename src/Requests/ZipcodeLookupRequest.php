<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeLookupRequestFormat;

class ZipcodeLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $code Comma separated list of postal / zip codes. Max. 100 values.
     */
    public string $code;

    /**
     * @var ?string $country Country code in ISO 3166-1 alpha-2 format. If not provided, search results will be returned from all countries.
     */
    public ?string $country;

    /**
     * @param array{
     *   apiKey: string,
     *   code: string,
     *   format?: ?value-of<ZipcodeLookupRequestFormat>,
     *   country?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->code = $values['code'];
        $this->country = $values['country'] ?? null;
    }
}
