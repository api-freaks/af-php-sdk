<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeDistanceRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Types\ZipcodeDistanceRequestUnit;

class ZipcodeDistanceRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeDistanceRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $compare Comma separated list of postal / zip codes with which base point is compared w.r.t. Max 100 zip codes can be provided.
     */
    #[JsonProperty('compare'), ArrayType(['string'])]
    public array $compare;

    /**
     * @var ?string $code Postal/Zip code to be used as the base point.
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?float $lat Latitude coordinate for the base location.
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?float $long Longitude coordinate for the base location.
     */
    #[JsonProperty('long')]
    public ?float $long;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?value-of<ZipcodeDistanceRequestUnit> $unit Supported distance units are m, km, mi, ft, yd, in.
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @param array{
     *   apiKey: string,
     *   compare: array<string>,
     *   country: string,
     *   format?: ?value-of<ZipcodeDistanceRequestFormat>,
     *   code?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   unit?: ?value-of<ZipcodeDistanceRequestUnit>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->compare = $values['compare'];
        $this->code = $values['code'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->country = $values['country'];
        $this->unit = $values['unit'] ?? null;
    }
}
