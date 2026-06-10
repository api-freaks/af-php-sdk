<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeSearchByRegionRequestFormat;

class ZipcodeSearchByRegionRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeSearchByRegionRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @var string $region Name of the region, state or province associated with the country.
     */
    public string $region;

    /**
     * @var ?int $page Page no. to retrieve paginated results.
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   region: string,
     *   format?: ?value-of<ZipcodeSearchByRegionRequestFormat>,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->region = $values['region'];
        $this->page = $values['page'] ?? null;
    }
}
