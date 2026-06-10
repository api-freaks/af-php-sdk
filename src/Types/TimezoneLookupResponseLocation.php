<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseLocation extends JsonSerializableType
{
    /**
     * @var ?string $locationString
     */
    #[JsonProperty('location_string')]
    public ?string $locationString;

    /**
     * @var ?string $countryName
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $stateProv
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

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
     * @var ?string $latitude
     */
    #[JsonProperty('latitude')]
    public ?string $latitude;

    /**
     * @var ?string $longitude
     */
    #[JsonProperty('longitude')]
    public ?string $longitude;

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
     * @var ?string $zipcode
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @param array{
     *   locationString?: ?string,
     *   countryName?: ?string,
     *   stateProv?: ?string,
     *   city?: ?string,
     *   locality?: ?string,
     *   latitude?: ?string,
     *   longitude?: ?string,
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
        array $values = [],
    ) {
        $this->locationString = $values['locationString'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
