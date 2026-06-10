<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ZipcodeSearchByRadiusResponseResultsItem extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

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
     * @var ?string $district
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?float $distance
     */
    #[JsonProperty('distance')]
    public ?float $distance;

    /**
     * @param array{
     *   code?: ?string,
     *   region?: ?string,
     *   regionCode?: ?string,
     *   city?: ?string,
     *   district?: ?string,
     *   distance?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->regionCode = $values['regionCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->distance = $values['distance'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
