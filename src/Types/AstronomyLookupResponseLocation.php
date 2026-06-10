<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AstronomyLookupResponseLocation extends JsonSerializableType
{
    /**
     * @var ?string $locationString The complete geographical location (returned when looking up by the location parameter).
     */
    #[JsonProperty('location_string')]
    public ?string $locationString;

    /**
     * @var ?string $continentCode
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $continentName
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $countryCode2
     */
    #[JsonProperty('country_code2')]
    public ?string $countryCode2;

    /**
     * @var ?string $countryCode3
     */
    #[JsonProperty('country_code3')]
    public ?string $countryCode3;

    /**
     * @var string $countryName
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var ?string $countryNameOfficial
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?bool $isEu
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @var string $stateProv
     */
    #[JsonProperty('state_prov')]
    public string $stateProv;

    /**
     * @var ?string $stateCode
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var ?string $zipcode
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var string $latitude
     */
    #[JsonProperty('latitude')]
    public string $latitude;

    /**
     * @var string $longitude
     */
    #[JsonProperty('longitude')]
    public string $longitude;

    /**
     * @var string $locality
     */
    #[JsonProperty('locality')]
    public string $locality;

    /**
     * @var string $elevation
     */
    #[JsonProperty('elevation')]
    public string $elevation;

    /**
     * @param array{
     *   countryName: string,
     *   stateProv: string,
     *   city: string,
     *   latitude: string,
     *   longitude: string,
     *   locality: string,
     *   elevation: string,
     *   locationString?: ?string,
     *   continentCode?: ?string,
     *   continentName?: ?string,
     *   countryCode2?: ?string,
     *   countryCode3?: ?string,
     *   countryNameOfficial?: ?string,
     *   isEu?: ?bool,
     *   stateCode?: ?string,
     *   district?: ?string,
     *   zipcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->locationString = $values['locationString'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->countryName = $values['countryName'];
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
        $this->stateProv = $values['stateProv'];
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'];
        $this->zipcode = $values['zipcode'] ?? null;
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->locality = $values['locality'];
        $this->elevation = $values['elevation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
