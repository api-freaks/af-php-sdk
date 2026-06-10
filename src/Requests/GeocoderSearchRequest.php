<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GeocoderSearchRequestFormat;

class GeocoderSearchRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<GeocoderSearchRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $query Free-form search query, e.g. Wembley Stadium, London
     */
    public string $query;

    /**
     * @var ?int $limit Max number of results to return (1–40). May return fewer if matches are weak.
     */
    public ?int $limit;

    /**
     * @var ?float $minLat Minimum latitude for the viewbox. Must be ≤ max_lat and between -90 and 90.
     */
    public ?float $minLat;

    /**
     * @var ?float $maxLat Maximum latitude for the viewbox. Must be ≥ min_lat and between -90 and 90.
     */
    public ?float $maxLat;

    /**
     * @var ?float $minLon Minimum longitude for the viewbox. Must be ≤ max_lon and between -180 and 180.
     */
    public ?float $minLon;

    /**
     * @var ?float $maxLon Maximum longitude for the viewbox. Must be ≥ min_lon and between -180 and 180.
     */
    public ?float $maxLon;

    /**
     * @var ?string $acceptLanguage Preferred language order for showing search results. This may either be a simple comma-separated list of language codes or a single entry. The results will be in the 1st language which is matched from the header. As a fallback if the results are not supported in the given language, 'en' will be used.
     */
    public ?string $acceptLanguage;

    /**
     * @param array{
     *   apiKey: string,
     *   query: string,
     *   format?: ?value-of<GeocoderSearchRequestFormat>,
     *   limit?: ?int,
     *   minLat?: ?float,
     *   maxLat?: ?float,
     *   minLon?: ?float,
     *   maxLon?: ?float,
     *   acceptLanguage?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->query = $values['query'];
        $this->limit = $values['limit'] ?? null;
        $this->minLat = $values['minLat'] ?? null;
        $this->maxLat = $values['maxLat'] ?? null;
        $this->minLon = $values['minLon'] ?? null;
        $this->maxLon = $values['maxLon'] ?? null;
        $this->acceptLanguage = $values['acceptLanguage'] ?? null;
    }
}
