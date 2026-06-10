<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GeocoderReverseResponse extends JsonSerializableType
{
    /**
     * @var float $lat WGS84 latitude value for the location.
     */
    #[JsonProperty('lat')]
    public float $lat;

    /**
     * @var float $lon WGS84 longitude value for the location.
     */
    #[JsonProperty('lon')]
    public float $lon;

    /**
     * @var ?string $name Name for the primary place searched.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $category High-level category of the place, e.g. amenity, place, natural, building, highway.
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?string $type Specific kind within the category, e.g. fast_food, city, park, residential, house_number.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<GeocoderReverseResponsePoiItem> $poi Array describing the POI (point of interest) and closely related elements at this location.
     */
    #[JsonProperty('poi'), ArrayType([GeocoderReverseResponsePoiItem::class])]
    public ?array $poi;

    /**
     * @var ?string $street Street or road name.
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * @var ?string $area Intra-city area below city level, e.g. suburb, borough, quarter, ward, district, sector, zone, tehsil, taluka, neighbourhood.
     */
    #[JsonProperty('area')]
    public ?string $area;

    /**
     * @var ?string $postcode Postal code of the area.
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @var ?string $city Settlement label appropriate to the country, e.g. city, town, municipality.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $county Second-tier administrative area, e.g. county, district, shire, prefecture.
     */
    #[JsonProperty('county')]
    public ?string $county;

    /**
     * @var ?string $stateCode Subdivision code when available, typically ISO-3166-2 like US-TX or PK-PB.
     */
    #[JsonProperty('state_code')]
    public ?string $stateCode;

    /**
     * @var ?string $state First-tier administrative area; varies by country, e.g. state, region, province, division, autonomous community.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var string $countryCode Two-letter country code in upper case, ISO-3166-1 alpha-2.
     */
    #[JsonProperty('country_code')]
    public string $countryCode;

    /**
     * @var string $country Country name of the searched place.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $fullAddress Single-line, human-readable address of the location.
     */
    #[JsonProperty('full_address')]
    public string $fullAddress;

    /**
     * @var array<string> $boundingBox Extent of the feature as `[lat_min, lat_max, lon_min, lon_max]` (south, north, west, east) in WGS84 decimal degrees.
     */
    #[JsonProperty('bounding_box'), ArrayType(['string'])]
    public array $boundingBox;

    /**
     * @param array{
     *   lat: float,
     *   lon: float,
     *   countryCode: string,
     *   country: string,
     *   fullAddress: string,
     *   boundingBox: array<string>,
     *   name?: ?string,
     *   category?: ?string,
     *   type?: ?string,
     *   poi?: ?array<GeocoderReverseResponsePoiItem>,
     *   street?: ?string,
     *   area?: ?string,
     *   postcode?: ?string,
     *   city?: ?string,
     *   county?: ?string,
     *   stateCode?: ?string,
     *   state?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lat = $values['lat'];
        $this->lon = $values['lon'];
        $this->name = $values['name'] ?? null;
        $this->category = $values['category'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->poi = $values['poi'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->area = $values['area'] ?? null;
        $this->postcode = $values['postcode'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->county = $values['county'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->countryCode = $values['countryCode'];
        $this->country = $values['country'];
        $this->fullAddress = $values['fullAddress'];
        $this->boundingBox = $values['boundingBox'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
