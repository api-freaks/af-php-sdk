<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetCountriesRequestFormat;

class GetCountriesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetCountriesRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var ?string $region Optional filter to return countries within a specific region from the region endpoint.
     */
    public ?string $region;

    /**
     * @var ?string $subregion Optional filter to return countries within a specific subregion from the subregion endpoint.
     */
    public ?string $subregion;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<GetCountriesRequestFormat>,
     *   region?: ?string,
     *   subregion?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->subregion = $values['subregion'] ?? null;
    }
}
