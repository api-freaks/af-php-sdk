<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AirQualityResponseLocationCity extends JsonSerializableType
{
    /**
     * @var string $locationString Original location query string as submitted, including full address or place name.
     */
    #[JsonProperty('location_string')]
    public string $locationString;

    /**
     * @var string $countryName Resolved country name derived from the geocoded location query.
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var string $stateProv State, province, or primary administrative division identified from the location.
     */
    #[JsonProperty('state_prov')]
    public string $stateProv;

    /**
     * @var string $city City or municipal area name extracted from the geocoded location.
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var ?string $locality Specific locality, neighborhood, suburb, or village within the geocoded area.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var float $latitude Geocoded latitude coordinate in decimal degrees, ranging from -90 to +90.
     */
    #[JsonProperty('latitude')]
    public float $latitude;

    /**
     * @var float $longitude Geocoded longitude coordinate in decimal degrees, ranging from -180 to +180.
     */
    #[JsonProperty('longitude')]
    public float $longitude;

    /**
     * @var ?float $elevation Elevation above mean sea level in meters at the geocoded coordinates.
     */
    #[JsonProperty('elevation')]
    public ?float $elevation;

    /**
     * @var string $timezone IANA timezone database identifier for the geocoded location (e.g., America/Los_Angeles).
     */
    #[JsonProperty('timezone')]
    public string $timezone;

    /**
     * @var string $timezoneAbbreviation Current timezone abbreviation for the location based on local offset (e.g., PDT, CET).
     */
    #[JsonProperty('timezone_abbreviation')]
    public string $timezoneAbbreviation;

    /**
     * @param array{
     *   locationString: string,
     *   countryName: string,
     *   stateProv: string,
     *   city: string,
     *   latitude: float,
     *   longitude: float,
     *   timezone: string,
     *   timezoneAbbreviation: string,
     *   locality?: ?string,
     *   elevation?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->locationString = $values['locationString'];
        $this->countryName = $values['countryName'];
        $this->stateProv = $values['stateProv'];
        $this->city = $values['city'];
        $this->locality = $values['locality'] ?? null;
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
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
