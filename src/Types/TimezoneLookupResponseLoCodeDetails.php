<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseLoCodeDetails extends JsonSerializableType
{
    /**
     * @var ?string $loCode
     */
    #[JsonProperty('lo_code')]
    public ?string $loCode;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?float $longitude
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?float $latitude
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?string $stateCode
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $countryName
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $locationType
     */
    #[JsonProperty('location_type')]
    public ?string $locationType;

    /**
     * @param array{
     *   loCode?: ?string,
     *   city?: ?string,
     *   longitude?: ?float,
     *   latitude?: ?float,
     *   stateCode?: ?string,
     *   countryCode?: ?string,
     *   countryName?: ?string,
     *   locationType?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->loCode = $values['loCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->locationType = $values['locationType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
