<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetCountriesResponseCountriesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $isoAlpha2
     */
    #[JsonProperty('iso_alpha_2')]
    public string $isoAlpha2;

    /**
     * @var string $isoAlpha3
     */
    #[JsonProperty('iso_alpha_3')]
    public string $isoAlpha3;

    /**
     * @var int $isoNumeric
     */
    #[JsonProperty('iso_numeric')]
    public int $isoNumeric;

    /**
     * @var string $capital
     */
    #[JsonProperty('capital')]
    public string $capital;

    /**
     * @var string $region
     */
    #[JsonProperty('region')]
    public string $region;

    /**
     * @var string $subregion
     */
    #[JsonProperty('subregion')]
    public string $subregion;

    /**
     * @param array{
     *   name: string,
     *   isoAlpha2: string,
     *   isoAlpha3: string,
     *   isoNumeric: int,
     *   capital: string,
     *   region: string,
     *   subregion: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->isoAlpha2 = $values['isoAlpha2'];
        $this->isoAlpha3 = $values['isoAlpha3'];
        $this->isoNumeric = $values['isoNumeric'];
        $this->capital = $values['capital'];
        $this->region = $values['region'];
        $this->subregion = $values['subregion'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
