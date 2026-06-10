<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetCountryDetailsResponse extends JsonSerializableType
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
     * @var int $phoneCode
     */
    #[JsonProperty('phone_code')]
    public int $phoneCode;

    /**
     * @var string $capital
     */
    #[JsonProperty('capital')]
    public string $capital;

    /**
     * @var string $topLevelDomain
     */
    #[JsonProperty('top_level_domain')]
    public string $topLevelDomain;

    /**
     * @var string $nativeName
     */
    #[JsonProperty('native_name')]
    public string $nativeName;

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
     * @var string $nationality
     */
    #[JsonProperty('nationality')]
    public string $nationality;

    /**
     * @var string $flagEmoji
     */
    #[JsonProperty('flag_emoji')]
    public string $flagEmoji;

    /**
     * @var string $currencyCode
     */
    #[JsonProperty('currency_code')]
    public string $currencyCode;

    /**
     * @var string $currencyName
     */
    #[JsonProperty('currency_name')]
    public string $currencyName;

    /**
     * @var string $currencySymbol
     */
    #[JsonProperty('currency_symbol')]
    public string $currencySymbol;

    /**
     * @param array{
     *   name: string,
     *   isoAlpha2: string,
     *   isoAlpha3: string,
     *   isoNumeric: int,
     *   phoneCode: int,
     *   capital: string,
     *   topLevelDomain: string,
     *   nativeName: string,
     *   region: string,
     *   subregion: string,
     *   nationality: string,
     *   flagEmoji: string,
     *   currencyCode: string,
     *   currencyName: string,
     *   currencySymbol: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->isoAlpha2 = $values['isoAlpha2'];
        $this->isoAlpha3 = $values['isoAlpha3'];
        $this->isoNumeric = $values['isoNumeric'];
        $this->phoneCode = $values['phoneCode'];
        $this->capital = $values['capital'];
        $this->topLevelDomain = $values['topLevelDomain'];
        $this->nativeName = $values['nativeName'];
        $this->region = $values['region'];
        $this->subregion = $values['subregion'];
        $this->nationality = $values['nationality'];
        $this->flagEmoji = $values['flagEmoji'];
        $this->currencyCode = $values['currencyCode'];
        $this->currencyName = $values['currencyName'];
        $this->currencySymbol = $values['currencySymbol'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
