<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkZipcodeLookupResponseResultsItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $region
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $regionCode
     */
    #[JsonProperty('region_code')]
    public ?string $regionCode;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $locality
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?float $latitude
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?float $longitude
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @param array{
     *   code?: ?string,
     *   countryCode?: ?string,
     *   region?: ?string,
     *   regionCode?: ?string,
     *   city?: ?string,
     *   locality?: ?string,
     *   latitude?: ?float,
     *   longitude?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->regionCode = $values['regionCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
