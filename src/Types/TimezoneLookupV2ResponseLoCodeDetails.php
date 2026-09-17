<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * UN/LOCODE location details, present when queried by LO code.
 */
class TimezoneLookupV2ResponseLoCodeDetails extends JsonSerializableType
{
    /**
     * @var ?string $loCode A unique identifier for the location, often used in logistics and shipping (e.g., USNYC).
     */
    #[JsonProperty('lo_code')]
    public ?string $loCode;

    /**
     * @var ?string $city The name of the city or location associated with the LO code.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $stateCode The code for the state, province or region.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $countryCode The ISO 3166-1 alpha-2 country code (e.g., US).
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $countryName The name of the country in an administrative context.
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $locationType The type of location as comma-separated list of facilities (e.g., Port, Rail Terminal, Road Terminal, Airport).
     */
    #[JsonProperty('location_type')]
    public ?string $locationType;

    /**
     * @var ?string $latitude The latitude coordinate of the location.
     */
    #[JsonProperty('latitude')]
    public ?string $latitude;

    /**
     * @var ?string $longitude The longitude coordinate of the location.
     */
    #[JsonProperty('longitude')]
    public ?string $longitude;

    /**
     * @param array{
     *   loCode?: ?string,
     *   city?: ?string,
     *   stateCode?: ?string,
     *   countryCode?: ?string,
     *   countryName?: ?string,
     *   locationType?: ?string,
     *   latitude?: ?string,
     *   longitude?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->loCode = $values['loCode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->locationType = $values['locationType'] ?? null;
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
