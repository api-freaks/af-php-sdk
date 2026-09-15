<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geographic location information. Only present for location (address) and ip (or client-IP fallback) lookups; absent for tz, lat/long, iata_code/icao_code, and lo_code lookups. Field set varies by mode: location returns location_string plus a basic field set (country_name, state_prov, city, locality, latitude, longitude); ip/default returns a richer geo-IP field set (continent_code, continent_name, country_code2, country_code3, country_name_official, is_eu, state_code, district, zipcode) plus the common fields, but never location_string or locality.
 */
class TimezoneLookupV2ResponseLocation extends JsonSerializableType
{
    /**
     * @var ?string $locationString The provided location parameter as location. Present only for location (address) lookups; absent for ip lookups.
     */
    #[JsonProperty('location_string')]
    public ?string $locationString;

    /**
     * @var ?string $continentCode The two-letter code of the continent (e.g., NA). Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $continentName The full name of the continent (e.g., North America). Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $countryCode2 The ISO 3166-1 alpha-2 two-letter country code (e.g., US). Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('country_code2')]
    public ?string $countryCode2;

    /**
     * @var ?string $countryCode3 The ISO 3166-1 alpha-3 three-letter country code (e.g., USA). Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('country_code3')]
    public ?string $countryCode3;

    /**
     * @var ?string $countryName The common name of the country (e.g., United States). Present for both location and ip lookups.
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryNameOfficial The official full name of the country (e.g., United States of America). Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?bool $isEu Whether the country belongs to the European Union. Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @var ?string $stateProv Name of the state/province/region. Present for both location and ip lookups.
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $stateCode Code of the state/province/region. Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district Name of the district or county. Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $city Name of the city. Present for both location and ip lookups.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $locality Smaller area, part or region of a city. Only present for location (address) lookups (may be an empty string); absent for ip lookups.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $zipcode ZIP/Postal code of the place. Geo-IP field only: present for ip param or default client-IP lookups; absent for location lookups.
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var ?string $latitude The geographic latitude of the location. Present for both location and ip lookups.
     */
    #[JsonProperty('latitude')]
    public ?string $latitude;

    /**
     * @var ?string $longitude The geographic longitude of the location. Present for both location and ip lookups.
     */
    #[JsonProperty('longitude')]
    public ?string $longitude;

    /**
     * @param array{
     *   locationString?: ?string,
     *   continentCode?: ?string,
     *   continentName?: ?string,
     *   countryCode2?: ?string,
     *   countryCode3?: ?string,
     *   countryName?: ?string,
     *   countryNameOfficial?: ?string,
     *   isEu?: ?bool,
     *   stateProv?: ?string,
     *   stateCode?: ?string,
     *   district?: ?string,
     *   city?: ?string,
     *   locality?: ?string,
     *   zipcode?: ?string,
     *   latitude?: ?string,
     *   longitude?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locationString = $values['locationString'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
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
