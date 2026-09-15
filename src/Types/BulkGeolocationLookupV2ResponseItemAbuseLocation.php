<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geographic location information for the IP.
 */
class BulkGeolocationLookupV2ResponseItemAbuseLocation extends JsonSerializableType
{
    /**
     * @var string $continentCode 2-letter code of the continent.
     */
    #[JsonProperty('continent_code')]
    public string $continentCode;

    /**
     * @var string $continentName Name of the continent.
     */
    #[JsonProperty('continent_name')]
    public string $continentName;

    /**
     * @var string $countryCode2 Country code (ISO 3166-1 alpha-2) of the country.
     */
    #[JsonProperty('country_code2')]
    public string $countryCode2;

    /**
     * @var string $countryCode3 Country code (ISO 3166-1 alpha-3) of the country.
     */
    #[JsonProperty('country_code3')]
    public string $countryCode3;

    /**
     * @var string $countryName Name of the country.
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @var string $countryNameOfficial Official name (ISO 3166) of the country.
     */
    #[JsonProperty('country_name_official')]
    public string $countryNameOfficial;

    /**
     * @var string $countryCapital Name of the country's capital.
     */
    #[JsonProperty('country_capital')]
    public string $countryCapital;

    /**
     * @var ?string $stateProv Name of the state/province/region.
     */
    #[JsonProperty('state_prov')]
    public ?string $stateProv;

    /**
     * @var ?string $stateCode Code of the state/province/region.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $district Name of the district or county.
     */
    #[JsonProperty('district')]
    public ?string $district;

    /**
     * @var ?string $city Name of the city.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $locality A more specific area in city or it can be same as city.
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $accuracyRadius Circular radius in Km, where the IP address location can be found.
     */
    #[JsonProperty('accuracy_radius')]
    public ?string $accuracyRadius;

    /**
     * @var ?string $confidence Confidence level of the location match (e.g., low, medium, high).
     */
    #[JsonProperty('confidence')]
    public ?string $confidence;

    /**
     * @var ?string $dmaCode Designated Market Area (DMA) code used in the United States for media marketing.
     */
    #[JsonProperty('dma_code')]
    public ?string $dmaCode;

    /**
     * @var ?string $zipcode ZIP/Postal code of the place.
     */
    #[JsonProperty('zipcode')]
    public ?string $zipcode;

    /**
     * @var string $latitude Latitude of the place.
     */
    #[JsonProperty('latitude')]
    public string $latitude;

    /**
     * @var string $longitude Longitude of the place.
     */
    #[JsonProperty('longitude')]
    public string $longitude;

    /**
     * @var bool $isEu Is the country belong to European Union?
     */
    #[JsonProperty('is_eu')]
    public bool $isEu;

    /**
     * @var string $countryFlag URL to get the country flag.
     */
    #[JsonProperty('country_flag')]
    public string $countryFlag;

    /**
     * @var ?string $geonameId Geoname ID of the place from geonames.org.
     */
    #[JsonProperty('geoname_id')]
    public ?string $geonameId;

    /**
     * @var ?string $countryEmoji Emoji of the Country flag.
     */
    #[JsonProperty('country_emoji')]
    public ?string $countryEmoji;

    /**
     * @param array{
     *   continentCode: string,
     *   continentName: string,
     *   countryCode2: string,
     *   countryCode3: string,
     *   countryName: string,
     *   countryNameOfficial: string,
     *   countryCapital: string,
     *   latitude: string,
     *   longitude: string,
     *   isEu: bool,
     *   countryFlag: string,
     *   stateProv?: ?string,
     *   stateCode?: ?string,
     *   district?: ?string,
     *   city?: ?string,
     *   locality?: ?string,
     *   accuracyRadius?: ?string,
     *   confidence?: ?string,
     *   dmaCode?: ?string,
     *   zipcode?: ?string,
     *   geonameId?: ?string,
     *   countryEmoji?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->continentCode = $values['continentCode'];
        $this->continentName = $values['continentName'];
        $this->countryCode2 = $values['countryCode2'];
        $this->countryCode3 = $values['countryCode3'];
        $this->countryName = $values['countryName'];
        $this->countryNameOfficial = $values['countryNameOfficial'];
        $this->countryCapital = $values['countryCapital'];
        $this->stateProv = $values['stateProv'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->district = $values['district'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->accuracyRadius = $values['accuracyRadius'] ?? null;
        $this->confidence = $values['confidence'] ?? null;
        $this->dmaCode = $values['dmaCode'] ?? null;
        $this->zipcode = $values['zipcode'] ?? null;
        $this->latitude = $values['latitude'];
        $this->longitude = $values['longitude'];
        $this->isEu = $values['isEu'];
        $this->countryFlag = $values['countryFlag'];
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
