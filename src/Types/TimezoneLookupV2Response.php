<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Timezone lookup result. time_zone is always present. Exactly which other object accompanies it depends on the lookup mode: tz name and lat/long coordinates return time_zone only (no location, no ip); location address returns a basic location object; ip param or client-IP fallback returns a rich location object plus top-level ip; iata_code/icao_code returns airport_details instead of location; lo_code returns lo_code_details instead of location.
 */
class TimezoneLookupV2Response extends JsonSerializableType
{
    /**
     * @var ?string $ip The IP address used for the timezone lookup. Present when queried using the ip parameter, or with no location-identifying parameter at all (client-IP fallback). Absent for every other lookup mode.
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var TimezoneLookupV2ResponseTimeZone $timeZone Timezone and date/time information for the location.
     */
    #[JsonProperty('time_zone')]
    public TimezoneLookupV2ResponseTimeZone $timeZone;

    /**
     * @var ?TimezoneLookupV2ResponseLocation $location Geographic location information. Only present for location (address) and ip (or client-IP fallback) lookups; absent for tz, lat/long, iata_code/icao_code, and lo_code lookups. Field set varies by mode: location returns location_string plus a basic field set (country_name, state_prov, city, locality, latitude, longitude); ip/default returns a richer geo-IP field set (continent_code, continent_name, country_code2, country_code3, country_name_official, is_eu, state_code, district, zipcode) plus the common fields, but never location_string or locality.
     */
    #[JsonProperty('location')]
    public ?TimezoneLookupV2ResponseLocation $location;

    /**
     * @var ?TimezoneLookupV2ResponseAirportDetails $airportDetails Airport information, present when queried by IATA or ICAO code.
     */
    #[JsonProperty('airport_details')]
    public ?TimezoneLookupV2ResponseAirportDetails $airportDetails;

    /**
     * @var ?TimezoneLookupV2ResponseLoCodeDetails $loCodeDetails UN/LOCODE location details, present when queried by LO code.
     */
    #[JsonProperty('lo_code_details')]
    public ?TimezoneLookupV2ResponseLoCodeDetails $loCodeDetails;

    /**
     * @param array{
     *   timeZone: TimezoneLookupV2ResponseTimeZone,
     *   ip?: ?string,
     *   location?: ?TimezoneLookupV2ResponseLocation,
     *   airportDetails?: ?TimezoneLookupV2ResponseAirportDetails,
     *   loCodeDetails?: ?TimezoneLookupV2ResponseLoCodeDetails,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->timeZone = $values['timeZone'];
        $this->location = $values['location'] ?? null;
        $this->airportDetails = $values['airportDetails'] ?? null;
        $this->loCodeDetails = $values['loCodeDetails'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
