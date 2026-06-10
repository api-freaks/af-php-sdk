<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeSearchByCityRequestFormat;

class ZipcodeSearchByCityRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeSearchByCityRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $city Name of the city in which we want to find zipcodes in.
     */
    public string $city;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    public string $country;

    /**
     * @var ?string $stateName Name of the state or province associated with the country.
     */
    public ?string $stateName;

    /**
     * @var ?int $page Page number to retrieve paginated results.
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   city: string,
     *   country: string,
     *   format?: ?value-of<ZipcodeSearchByCityRequestFormat>,
     *   stateName?: ?string,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->city = $values['city'];
        $this->country = $values['country'];
        $this->stateName = $values['stateName'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
