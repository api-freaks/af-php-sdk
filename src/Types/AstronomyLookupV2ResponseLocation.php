<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geographic location information for the astronomy calculation. The set of populated fields depends on which lookup mode the request used: (1) location param (geocode-by-address) returns location_string plus a basic field set (country_name, state_prov, city, locality, latitude, longitude, elevation); (2) lat + long params (geocode-by-coordinates) returns the same basic field set minus location_string, and locality may be an empty string when the coordinates don't resolve to a named sub-area; (3) ip param, or no location/lat/long/ip param at all (falls back to geo-IP lookup of the client's IP), returns the full geo-IP field set — continent_code, continent_name, country_code2, country_code3, country_name_official, is_eu, state_code, district, zipcode — in addition to the basic fields, but never location_string. elevation can be an empty string when elevation data is unavailable for the resolved location.
 */
class AstronomyLookupV2ResponseLocation extends JsonSerializableType
{
    /**
     * @var ?string $locationString The location query parameter echoed back as-is. Present only for geocode-by-address lookups (location param); absent for lat/long and ip-based lookups.
     */
    #[JsonProperty('location_string')]
    public ?string $locationString;

    /**
     * @var ?string $continentCode The two-letter code of the continent (e.g., "NA"). Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $continentName The full name of the continent (e.g., "North America"). Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $countryCode2 The ISO 3166-1 alpha-2 two-letter country code (e.g., "US"). Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('country_code2')]
    public ?string $countryCode2;

    /**
     * @var ?string $countryCode3 The ISO 3166-1 alpha-3 three-letter country code (e.g., "USA"). Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('country_code3')]
    public ?string $countryCode3;

    /**
     * @var ?string $countryName The common name of the country (e.g., "United States"). Present in all lookup modes.
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryNameOfficial The official full name of the country (e.g., "United States of America"). Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?bool $isEu Whether the country belongs to the European Union. Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @var ?string $stateProv Name of the state/province/region. Present in all lookup modes.
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $stateCode Code of the state/province/region. Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district Name of the district or county. Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $city Name of the city. Present in all lookup modes.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $zipcode ZIP/Postal code of the place. Geo-IP field only: present for ip param or default client-IP lookups; absent for location/lat/long geocode lookups.
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var string $latitude The geographic latitude of the location. Present in all lookup modes.
     */
    #[JsonProperty('latitude')]
    public string $latitude;

    /**
     * @var string $longitude The geographic longitude of the location. Present in all lookup modes.
     */
    #[JsonProperty('longitude')]
    public string $longitude;

    /**
     * @var ?string $locality Smaller area, part or region of a city. Present in all lookup modes, but may be an empty string for lat/long or geo-IP lookups when no named sub-area resolves.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $elevation The elevation of the geographical location, in meters. Present in all lookup modes, but may be an empty string when elevation data is unavailable for the resolved location.
     */
    #[JsonProperty('elevation')]
    public ?string $elevation;

    /**
     * @param array{
     *   latitude: string,
     *   longitude: string,
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
     *   zipcode?: ?string,
     *   locality?: ?string,
     *   elevation?: ?string,
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
        $this->countryName = $values['countryName'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->locality = $values['locality'] ?? null;
        $this->elevation = $values['elevation'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
