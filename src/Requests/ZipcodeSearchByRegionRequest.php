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
     * @var ?string $region Name of the region, state or province associated with the country. Either region or region_code is required; region_code takes priority if both are given.
     */
    public ?string $region;

    /**
     * @var ?int $page Page no. to retrieve paginated results.
     */
    public ?int $page;

    /**
     * @var ?string $regionCode ISO code of the region, state, or province associated with the country. Either region or region_code is required. region_code takes priority if both are given.
     */
    public ?string $regionCode;

    /**
     * @param array{
     *   apiKey: string,
     *   country: string,
     *   format?: ?value-of<ZipcodeSearchByRegionRequestFormat>,
     *   region?: ?string,
     *   page?: ?int,
     *   regionCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->country = $values['country'];
        $this->region = $values['region'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->regionCode = $values['regionCode'] ?? null;
    }
}
