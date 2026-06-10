<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkCurrentWeatherRequestFormat;
use Apifreaks\Types\BulkCurrentWeatherRequestLocationsItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkCurrentWeatherRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkCurrentWeatherRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @var array<BulkCurrentWeatherRequestLocationsItem> $locations Array of locations to fetch weather data for
     */
    #[JsonProperty('locations'), ArrayType([BulkCurrentWeatherRequestLocationsItem::class])]
    public array $locations;

    /**
     * @param array{
     *   apiKey: string,
     *   locations: array<BulkCurrentWeatherRequestLocationsItem>,
     *   format?: ?value-of<BulkCurrentWeatherRequestFormat>,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
        $this->locations = $values['locations'];
    }
}
