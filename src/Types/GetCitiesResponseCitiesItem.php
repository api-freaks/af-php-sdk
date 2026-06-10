<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetCitiesResponseCitiesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var float $latitude
     */
    #[JsonProperty('latitude')]
    public float $latitude;

    /**
     * @var float $longitude
     */
    #[JsonProperty('longitude')]
    public float $longitude;

    /**
     * @var GetCitiesResponseCitiesItemAdminUnit $adminUnit
     */
    #[JsonProperty('admin_unit')]
    public GetCitiesResponseCitiesItemAdminUnit $adminUnit;

    /**
     * @var string $isoAlpha2
     */
    #[JsonProperty('iso_alpha_2')]
    public string $isoAlpha2;

    /**
     * @param array{
     *   name: string,
     *   latitude: float,
     *   longitude: float,
     *   adminUnit: GetCitiesResponseCitiesItemAdminUnit,
     *   isoAlpha2: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->adminUnit = $values['adminUnit'];
        $this->isoAlpha2 = $values['isoAlpha2'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
