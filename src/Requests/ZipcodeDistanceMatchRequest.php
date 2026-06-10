<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeDistanceMatchRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Types\ZipcodeDistanceMatchRequestUnit;

class ZipcodeDistanceMatchRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeDistanceMatchRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<string> $codes Comma-separated list of postal/zip codes. Maximum 100 values allowed.
     */
    #[JsonProperty('codes'), ArrayType(['string'])]
    public array $codes;

    /**
     * @var string $country Country code in ISO 3166-1 alpha-2 format.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?float $distance Maximum allowed distance between postal code pairs.
     */
    #[JsonProperty('distance')]
    public ?float $distance;

    /**
     * @var ?value-of<ZipcodeDistanceMatchRequestUnit> $unit Supported distance units are m, km, mi, ft, yd, in.
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @param array{
     *   apiKey: string,
     *   codes: array<string>,
     *   country: string,
     *   format?: ?value-of<ZipcodeDistanceMatchRequestFormat>,
     *   distance?: ?float,
     *   unit?: ?value-of<ZipcodeDistanceMatchRequestUnit>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->codes = $values['codes'];
        $this->country = $values['country'];
        $this->distance = $values['distance'] ?? null;
        $this->unit = $values['unit'] ?? null;
    }
}
