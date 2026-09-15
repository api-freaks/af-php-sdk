<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Airport information, present when queried by IATA or ICAO code.
 */
class TimezoneLookupV2ResponseAirportDetails extends JsonSerializableType
{
    /**
     * @var ?string $type Classification of the airport based on size and traffic.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $name The full name of the airport.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $latitude The latitude coordinate of the airport.
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?float $longitude The longitude coordinate of the airport.
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?int $elevationFt The elevation of the airport above sea level, measured in feet.
     */
    #[JsonProperty('elevation_ft')]
    public ?int $elevationFt;

    /**
     * @var ?string $continentCode The two-letter code of the continent.
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $countryCode The ISO 3166-1 alpha-2 code for the country where the airport is located.
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $stateCode Code of the state/province/region where the airport is located.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $city The city or administrative region that the airport serves.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $iataCode The three-letter IATA airport code (e.g., LHR).
     */
    #[JsonProperty('iata_code')]
    public ?string $iataCode;

    /**
     * @var ?string $icaoCode The four-letter ICAO airport code (e.g., EGLL).
     */
    #[JsonProperty('icao_code')]
    public ?string $icaoCode;

    /**
     * @var ?string $faaCode The FAA location identifier, used primarily in the United States.
     */
    #[JsonProperty('faa_code')]
    public ?string $faaCode;

    /**
     * @param array{
     *   type?: ?string,
     *   name?: ?string,
     *   latitude?: ?float,
     *   longitude?: ?float,
     *   elevationFt?: ?int,
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
        array $values = [],
    ) {
        $this->type = $values['type'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
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
