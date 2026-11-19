<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geolocation data derived from the IP address.
 */
class BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressLocation extends JsonSerializableType
{
    /**
     * @var ?string $city Municipal or city name.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $district District or neighborhood.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $zipcode Postal or ZIP code.
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var ?string $stateProv State or province.
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $countryName Common country name.
     */
    #[JsonProperty('country_name')]
    public ?string $countryName;

    /**
     * @var ?string $countryNameOfficial Official country name.
     */
    #[JsonProperty('country_name_official')]
    public ?string $countryNameOfficial;

    /**
     * @var ?string $countryCode2 Two-character ISO country code.
     */
    #[JsonProperty('country_code2')]
    public ?string $countryCode2;

    /**
     * @var ?string $countryCode3 Three-character ISO country code.
     */
    #[JsonProperty('country_code3')]
    public ?string $countryCode3;

    /**
     * @var ?string $continentName Continental region name.
     */
    #[JsonProperty('continent_name')]
    public ?string $continentName;

    /**
     * @var ?string $continentCode Continental region identifier.
     */
    #[JsonProperty('continent_code')]
    public ?string $continentCode;

    /**
     * @var ?string $accuracyRadius Geolocation precision radius. Not included for every IP.
     */
    #[JsonProperty('accuracy_radius')]
    public ?string $accuracyRadius;

    /**
     * @var ?string $confidence Confidence score for geolocation accuracy. Not included for every IP.
     */
    #[JsonProperty('confidence')]
    public ?string $confidence;

    /**
     * @var ?bool $isEu European Union membership status.
     */
    #[JsonProperty('is_eu')]
    public ?bool $isEu;

    /**
     * @param array{
     *   city?: ?string,
     *   district?: ?string,
     *   zipcode?: ?string,
     *   stateProv?: ?string,
     *   countryName?: ?string,
     *   countryNameOfficial?: ?string,
     *   countryCode2?: ?string,
     *   countryCode3?: ?string,
     *   continentName?: ?string,
     *   continentCode?: ?string,
     *   accuracyRadius?: ?string,
     *   confidence?: ?string,
     *   isEu?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->city = $values['city'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
        $this->stateProv = $values['stateProv'] ?? null;
        $this->countryName = $values['countryName'] ?? null;
        $this->countryNameOfficial = $values['countryNameOfficial'] ?? null;
        $this->countryCode2 = $values['countryCode2'] ?? null;
        $this->countryCode3 = $values['countryCode3'] ?? null;
        $this->continentName = $values['continentName'] ?? null;
        $this->continentCode = $values['continentCode'] ?? null;
        $this->accuracyRadius = $values['accuracyRadius'] ?? null;
        $this->confidence = $values['confidence'] ?? null;
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
