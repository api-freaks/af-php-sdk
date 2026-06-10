<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetCitiesRequestFormat;

class GetCitiesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GetCitiesRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @var ?string $adminUnit Administrative unit code used to filter cities within a specific region.
     */
    public ?string $adminUnit;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   format?: ?value-of<GetCitiesRequestFormat>,
     *   adminUnit?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->adminUnit = $values['adminUnit'] ?? null;
    }
}
