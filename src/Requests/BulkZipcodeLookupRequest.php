<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkZipcodeLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkZipcodeLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkZipcodeLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $codes Comma separated list of postal / zip codes. Max. 100 values.
     */
    #[JsonProperty('codes'), ArrayType(['string'])]
    public array $codes;

    /**
     * @var ?string $country Country code in ISO 3166-1 alpha-2 format. If not provided, search results will be returned from all countries.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @param array{
     *   apiKey: string,
     *   codes: array<string>,
     *   format?: ?value-of<BulkZipcodeLookupRequestFormat>,
     *   country?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->codes = $values['codes'];
        $this->country = $values['country'] ?? null;
    }
}
