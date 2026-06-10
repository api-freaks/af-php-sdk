<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkCurrentWeatherResponseBulkItemLocationContinentCode extends JsonSerializableType
{
    /**
     * @var string $continentCode Two-letter continent code (e.g., NA for North America, EU for Europe, AS for Asia).
     */
    #[JsonProperty('continent_code')]
    public string $continentCode;

    /**
     * @var string $continentName Full name of the continent where the IP address is registered.
     */
    #[JsonProperty('continent_name')]
    public string $continentName;

    /**
     * @var string $countryCode2 ISO 3166-1 alpha-2 two-letter country code (e.g., US, GB, FR).
     */
    #[JsonProperty('country_code2')]
    public string $countryCode2;

    /**
     * @var string $countryCode3 ISO 3166-1 alpha-3 three-letter country code (e.g., USA, GBR, FRA).
     */
    #[JsonProperty('country_code3')]
    public string $countryCode3;

    /**
     * @var string $countryName Common name of the country associated with the IP address.
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var string $countryNameOfficial Official long-form country name as recognized internationally (e.g., United States of America).
     */
    #[JsonProperty('country_name_official')]
    public string $countryNameOfficial;

    /**
     * @var ?bool $isEu Boolean flag indicating whether the country is a member state of the European Union.
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @var string $stateProv State, province, or primary administrative division associated with the IP location.
     */
    #[JsonProperty('state_prov')]
    public string $stateProv;

    /**
     * @var ?string $stateCode ISO 3166-2 subdivision code for the state or province (e.g., CA for California).
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district District, county, or secondary administrative division within the region.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var string $city City or urban area name where the IP address is geographically registered.
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var ?string $zipcode Postal code or ZIP code for the approximate location of the IP address.
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var float $latitude Geographic latitude in decimal degrees for the IP geolocation, ranging from -90 to +90.
     */
    #[JsonProperty('latitude')]
    public float $latitude;

    /**
     * @var float $longitude Geographic longitude in decimal degrees for the IP geolocation, ranging from -180 to +180.
     */
    #[JsonProperty('longitude')]
    public float $longitude;

    /**
     * @var ?string $locality Specific locality, neighborhood, or small area designation within the city.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?float $elevation Elevation above mean sea level in meters for the IP geolocation.
     */
    #[JsonProperty('elevation')]
    public ?float $elevation;

    /**
     * @var string $timezone IANA timezone database identifier for the IP location (e.g., America/Chicago, Asia/Tokyo).
     */
    #[JsonProperty('timezone')]
    public string $timezone;

    /**
     * @var string $timezoneAbbreviation Current timezone abbreviation based on local offset (e.g., CST, JST, UTC).
     */
    #[JsonProperty('timezone_abbreviation')]
    public string $timezoneAbbreviation;

    /**
     * @param array{
     *   continentCode: string,
     *   continentName: string,
     *   countryCode2: string,
     *   countryCode3: string,
     *   countryName: string,
     *   countryNameOfficial: string,
     *   stateProv: string,
     *   city: string,
     *   latitude: float,
     *   longitude: float,
     *   timezone: string,
     *   timezoneAbbreviation: string,
     *   isEu?: ?bool,
     *   stateCode?: ?string,
     *   district?: ?string,
     *   zipcode?: ?string,
     *   locality?: ?string,
     *   elevation?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->continentCode = $values['continentCode'];
        $this->continentName = $values['continentName'];
        $this->countryCode2 = $values['countryCode2'];
        $this->countryCode3 = $values['countryCode3'];
        $this->countryName = $values['countryName'];
        $this->countryNameOfficial = $values['countryNameOfficial'];
        $this->isEu = $values['isEu'] ?? null;
        $this->stateProv = $values['stateProv'];
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'];
        $this->zipcode = $values['zipcode'] ?? null;
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->locality = $values['locality'] ?? null;
        $this->elevation = $values['elevation'] ?? null;
        $this->timezone = $values['timezone'];
        $this->timezoneAbbreviation = $values['timezoneAbbreviation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
