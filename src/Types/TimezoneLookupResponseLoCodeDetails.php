<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseLoCodeDetails extends JsonSerializableType
{
    /**
     * @var string $loCode
     */
    #[JsonProperty('lo_code')]
    public string $loCode;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $longitude
     */
    #[JsonProperty('longitude')]
    public string $longitude;

    /**
     * @var string $latitude
     */
    #[JsonProperty('latitude')]
    public string $latitude;

    /**
     * @var string $stateCode
     */
    #[JsonProperty('state_code')]
    public string $stateCode;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('country_code')]
    public string $countryCode;

    /**
     * @var string $countryName
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var string $locationType
     */
    #[JsonProperty('location_type')]
    public string $locationType;

    /**
     * @param array{
     *   loCode: string,
     *   city: string,
     *   longitude: string,
     *   latitude: string,
     *   stateCode: string,
     *   countryCode: string,
     *   countryName: string,
     *   locationType: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->loCode = $values['loCode'];
        $this->city = $values['city'];
        $this->longitude = $values['longitude'];
        $this->latitude = $values['latitude'];
        $this->stateCode = $values['stateCode'];
        $this->countryCode = $values['countryCode'];
        $this->countryName = $values['countryName'];
        $this->locationType = $values['locationType'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
