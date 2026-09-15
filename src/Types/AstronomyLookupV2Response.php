<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Astronomy data response containing location information and astronomical data.
 */
class AstronomyLookupV2Response extends JsonSerializableType
{
    /**
     * @var ?string $ip IPv4 or IPv6 address used for the geo-IP lookup. Present when the ip parameter is passed explicitly, or when no location, lat/long, or ip parameter is supplied at all (the API falls back to the requesting client's IP address). Absent when location or lat/long is used.
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?AstronomyLookupV2ResponseLocation $location Geographic location information for the astronomy calculation. The set of populated fields depends on which lookup mode the request used: (1) location param (geocode-by-address) returns location_string plus a basic field set (country_name, state_prov, city, locality, latitude, longitude, elevation); (2) lat + long params (geocode-by-coordinates) returns the same basic field set minus location_string, and locality may be an empty string when the coordinates don't resolve to a named sub-area; (3) ip param, or no location/lat/long/ip param at all (falls back to geo-IP lookup of the client's IP), returns the full geo-IP field set — continent_code, continent_name, country_code2, country_code3, country_name_official, is_eu, state_code, district, zipcode — in addition to the basic fields, but never location_string. elevation can be an empty string when elevation data is unavailable for the resolved location.
     */
    #[JsonProperty('location')]
    public ?AstronomyLookupV2ResponseLocation $location;

    /**
     * @var AstronomyLookupV2ResponseAstronomy $astronomy Complete astronomical data for the specified location and date.
     */
    #[JsonProperty('astronomy')]
    public AstronomyLookupV2ResponseAstronomy $astronomy;

    /**
     * @param array{
     *   astronomy: AstronomyLookupV2ResponseAstronomy,
     *   ip?: ?string,
     *   location?: ?AstronomyLookupV2ResponseLocation,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->astronomy = $values['astronomy'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
