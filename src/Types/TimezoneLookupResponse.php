<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponse extends JsonSerializableType
{
    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?TimezoneLookupResponseLocation $location
     */
    #[JsonProperty('location')]
    public ?TimezoneLookupResponseLocation $location;

    /**
     * @var TimezoneLookupResponseTimeZone $timeZone
     */
    #[JsonProperty('time_zone')]
    public TimezoneLookupResponseTimeZone $timeZone;

    /**
     * @var ?TimezoneLookupResponseAirportDetails $airportDetails
     */
    #[JsonProperty('airport_details')]
    public ?TimezoneLookupResponseAirportDetails $airportDetails;

    /**
     * @var ?TimezoneLookupResponseLoCodeDetails $loCodeDetails
     */
    #[JsonProperty('lo_code_details')]
    public ?TimezoneLookupResponseLoCodeDetails $loCodeDetails;

    /**
     * @param array{
     *   timeZone: TimezoneLookupResponseTimeZone,
     *   ip?: ?string,
     *   location?: ?TimezoneLookupResponseLocation,
     *   airportDetails?: ?TimezoneLookupResponseAirportDetails,
     *   loCodeDetails?: ?TimezoneLookupResponseLoCodeDetails,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->timeZone = $values['timeZone'];
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
