<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AstronomyLookupResponse extends JsonSerializableType
{
    /**
     * @var ?string $ip
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var AstronomyLookupResponseLocation $location
     */
    #[JsonProperty('location')]
    public AstronomyLookupResponseLocation $location;

    /**
     * @var AstronomyLookupResponseAstronomy $astronomy
     */
    #[JsonProperty('astronomy')]
    public AstronomyLookupResponseAstronomy $astronomy;

    /**
     * @param array{
     *   location: AstronomyLookupResponseLocation,
     *   astronomy: AstronomyLookupResponseAstronomy,
     *   ip?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->location = $values['location'];
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
