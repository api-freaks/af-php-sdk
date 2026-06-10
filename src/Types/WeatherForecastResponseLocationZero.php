<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WeatherForecastResponseLocationZero extends JsonSerializableType
{
    /**
     * @var float $latitude Geographic latitude coordinate in decimal degrees, ranging from -90 (South Pole) to +90 (North Pole).
     */
    #[JsonProperty('latitude')]
    public float $latitude;

    /**
     * @var float $longitude Geographic longitude coordinate in decimal degrees, ranging from -180 (West) to +180 (East).
     */
    #[JsonProperty('longitude')]
    public float $longitude;

    /**
     * @var string $countryName Full name of the country corresponding to the provided coordinates.
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var string $stateProv State, province, or primary administrative division name for the location.
     */
    #[JsonProperty('state_prov')]
    public string $stateProv;

    /**
     * @var string $city City or municipal area name associated with the coordinate location.
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var ?string $locality Specific locality, neighborhood, district, or village name within the broader area.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?float $elevation Height above mean sea level in meters for the specified coordinates.
     */
    #[JsonProperty('elevation')]
    public ?float $elevation;

    /**
     * @var string $timezone IANA timezone database identifier for the location (e.g., America/New_York, Europe/London).
     */
    #[JsonProperty('timezone')]
    public string $timezone;

    /**
     * @var string $timezoneAbbreviation Abbreviated timezone representation based on current offset (e.g., EST, GMT, PST).
     */
    #[JsonProperty('timezone_abbreviation')]
    public string $timezoneAbbreviation;

    /**
     * @param array{
     *   latitude: float,
     *   longitude: float,
     *   countryName: string,
     *   stateProv: string,
     *   city: string,
     *   timezone: string,
     *   timezoneAbbreviation: string,
     *   locality?: ?string,
     *   elevation?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->countryName = $values['countryName'];
        $this->stateProv = $values['stateProv'];
        $this->city = $values['city'];
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
