<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ZipcodeSearchByRadiusRequestFormat;
use Apifreaks\Types\ZipcodeSearchByRadiusRequestUnit;

class ZipcodeSearchByRadiusRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ZipcodeSearchByRadiusRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $code Postal/Zip code to be used as the center point for the search.
     */
    public ?string $code;

    /**
     * @var ?float $lat Latitude coordinate for the base location.
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude coordinate for the base location.
     */
    public ?float $long;

    /**
     * @var ?string $country Country code in ISO 3166-1 alpha-2 format. Required only when using the code parameter.
     */
    public ?string $country;

    /**
     * @var float $radius Search radius for the query. The maximum allowed values are: - 100 km - 100 mi - 109361 yd - 100000 m - 328084 ft - 3937007.75 in
     */
    public float $radius;

    /**
     * @var ?value-of<ZipcodeSearchByRadiusRequestUnit> $unit Supported distance units are m, km, mi, ft, yd, in.
     */
    public ?string $unit;

    /**
     * @var ?int $page Page no. to retrieve paginated results.
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   radius: float,
     *   format?: ?value-of<ZipcodeSearchByRadiusRequestFormat>,
     *   code?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   country?: ?string,
     *   unit?: ?value-of<ZipcodeSearchByRadiusRequestUnit>,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->radius = $values['radius'];
        $this->unit = $values['unit'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
