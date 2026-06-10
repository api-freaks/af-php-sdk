<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GeocoderReverseRequestFormat;

class GeocoderReverseRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GeocoderReverseRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var float $lat WGS84 latitude value ranging from -90 to 90.
     */
    public float $lat;

    /**
     * @var float $lon WGS84 longitude value ranging from -180 to 180.
     */
    public float $lon;

    /**
     * @var ?string $acceptLanguage Preferred language order for showing search results. This may either be a simple comma-separated list of language codes or a single entry. The results will be in the 1st language which is matched from the header. As a fallback if the results are not supported in the given language, en will be used.
     */
    public ?string $acceptLanguage;

    /**
     * @param array{
     *   apiKey: string,
     *   lat: float,
     *   lon: float,
     *   format?: ?value-of<GeocoderReverseRequestFormat>,
     *   acceptLanguage?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->lat = $values['lat'];
        $this->lon = $values['lon'];
        $this->acceptLanguage = $values['acceptLanguage'] ?? null;
    }
}
