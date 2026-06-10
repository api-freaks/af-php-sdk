<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseAirportDetails extends JsonSerializableType
{
    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

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
     * @var float $elevationFt
     */
    #[JsonProperty('elevation_ft')]
    public float $elevationFt;

    /**
     * @var string $continentCode
     */
    #[JsonProperty('continent_code')]
    public string $continentCode;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('country_code')]
    public string $countryCode;

    /**
     * @var string $stateCode
     */
    #[JsonProperty('state_code')]
    public string $stateCode;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $iataCode
     */
    #[JsonProperty('iata_code')]
    public string $iataCode;

    /**
     * @var string $icaoCode
     */
    #[JsonProperty('icao_code')]
    public string $icaoCode;

    /**
     * @var string $faaCode
     */
    #[JsonProperty('faa_code')]
    public string $faaCode;

    /**
     * @param array{
     *   type: string,
     *   name: string,
     *   longitude: string,
     *   latitude: string,
     *   elevationFt: float,
     *   continentCode: string,
     *   countryCode: string,
     *   stateCode: string,
     *   city: string,
     *   iataCode: string,
     *   icaoCode: string,
     *   faaCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->name = $values['name'];
        $this->longitude = $values['longitude'];
        $this->latitude = $values['latitude'];
        $this->elevationFt = $values['elevationFt'];
        $this->continentCode = $values['continentCode'];
        $this->countryCode = $values['countryCode'];
        $this->stateCode = $values['stateCode'];
        $this->city = $values['city'];
        $this->iataCode = $values['iataCode'];
        $this->icaoCode = $values['icaoCode'];
        $this->faaCode = $values['faaCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
