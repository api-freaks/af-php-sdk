<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseAirportDetails extends JsonSerializableType
{
    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $longitude
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?float $latitude
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?float $elevationFt
     */
    #[JsonProperty('elevation_ft')]
    public ?float $elevationFt;

    /**
     * @var ?string $continentCode
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $stateCode
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $iataCode
     */
    #[JsonProperty('iata_code')]
    public ?string $iataCode;

    /**
     * @var ?string $icaoCode
     */
    #[JsonProperty('icao_code')]
    public ?string $icaoCode;

    /**
     * @var ?string $faaCode
     */
    #[JsonProperty('faa_code')]
    public ?string $faaCode;

    /**
     * @param array{
     *   type?: ?string,
     *   name?: ?string,
     *   longitude?: ?float,
     *   latitude?: ?float,
     *   elevationFt?: ?float,
     *   continentCode?: ?string,
     *   countryCode?: ?string,
     *   stateCode?: ?string,
     *   city?: ?string,
     *   iataCode?: ?string,
     *   icaoCode?: ?string,
     *   faaCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->elevationFt = $values['elevationFt'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->iataCode = $values['iataCode'] ?? null;
        $this->icaoCode = $values['icaoCode'] ?? null;
        $this->faaCode = $values['faaCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
