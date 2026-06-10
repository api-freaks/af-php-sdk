<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeolocationLookupResponseLocation extends JsonSerializableType
{
    /**
     * @var ?string $continentCode
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $continentName
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $countryCode2
     */
    #[JsonProperty('country_code2')]
    public ?string $countryCode2;

    /**
     * @var ?string $countryCode3
     */
    #[JsonProperty('country_code3')]
    public ?string $countryCode3;

    /**
     * @var ?string $countryName
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryNameOfficial
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?string $countryCapital
     */
    #[JsonProperty('country_capital')]
    public ?string $countryCapital;

    /**
     * @var ?string $stateProv
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $stateCode
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $locality
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $accuracyRadius
     */
    #[JsonProperty('accuracy_radius')]
    public ?string $accuracyRadius;

    /**
     * @var ?string $confidence
     */
    #[JsonProperty('confidence')]
    public ?string $confidence;

    /**
     * @var ?string $dmaCode
     */
    #[JsonProperty('dma_code')]
    public ?string $dmaCode;

    /**
     * @var ?string $zipcode
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var ?string $latitude
     */
    #[JsonProperty('latitude')]
    public ?string $latitude;

    /**
     * @var ?string $longitude
     */
    #[JsonProperty('longitude')]
    public ?string $longitude;

    /**
     * @var ?bool $isEu
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @var ?string $countryFlag
     */
    #[JsonProperty('country_flag')]
    public ?string $countryFlag;

    /**
     * @var ?string $geonameId
     */
    #[JsonProperty('geoname_id')]
    public ?string $geonameId;

    /**
     * @var ?string $countryEmoji
     */
    #[JsonProperty('country_emoji')]
    public ?string $countryEmoji;

    /**
     * @param array{
     *   continentCode?: ?string,
     *   continentName?: ?string,
     *   countryCode2?: ?string,
     *   countryCode3?: ?string,
     *   countryName?: ?string,
     *   countryNameOfficial?: ?string,
     *   countryCapital?: ?string,
     *   stateProv?: ?string,
     *   stateCode?: ?string,
     *   district?: ?string,
     *   city?: ?string,
     *   locality?: ?string,
     *   accuracyRadius?: ?string,
     *   confidence?: ?string,
     *   dmaCode?: ?string,
     *   zipcode?: ?string,
     *   latitude?: ?string,
     *   longitude?: ?string,
     *   isEu?: ?bool,
     *   countryFlag?: ?string,
     *   geonameId?: ?string,
     *   countryEmoji?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->continentCode = $values['continentCode'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->countryCapital = $values['countryCapital'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->accuracyRadius = $values['accuracyRadius'] ?? null;
        $this->confidence = $values['confidence'] ?? null;
        $this->dmaCode = $values['dmaCode'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
        $this->countryFlag = $values['countryFlag'] ?? null;
        $this->geonameId = $values['geonameId'] ?? null;
        $this->countryEmoji = $values['countryEmoji'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
