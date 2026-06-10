<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailValidationResponsesItemAddressLocation extends JsonSerializableType
{
    /**
     * @var ?string $city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $district
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $confidence
     */
    #[JsonProperty('confidence')]
    public ?string $confidence;

    /**
     * @var ?string $zipcode
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var ?string $stateProv
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $countryName
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $continentName
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $continentCode
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

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
     * @var ?string $countryNameOfficial
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?string $accuracyRadius
     */
    #[JsonProperty('accuracy_radius')]
    public ?string $accuracyRadius;

    /**
     * @var ?bool $isEu
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @param array{
     *   city?: ?string,
     *   district?: ?string,
     *   confidence?: ?string,
     *   zipcode?: ?string,
     *   stateProv?: ?string,
     *   countryName?: ?string,
     *   continentName?: ?string,
     *   continentCode?: ?string,
     *   countryCode2?: ?string,
     *   countryCode3?: ?string,
     *   countryNameOfficial?: ?string,
     *   accuracyRadius?: ?string,
     *   isEu?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->city = $values['city'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->confidence = $values['confidence'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->accuracyRadius = $values['accuracyRadius'] ?? null;
        $this->isEu = $values['isEu'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
