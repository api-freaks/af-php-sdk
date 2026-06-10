<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\HistoricalWeatherRequestFormat;
use DateTime;
use Apifreaks\Types\HistoricalWeatherRequestPrecision;

class HistoricalWeatherRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<HistoricalWeatherRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var DateTime $date Specific date for which to fetch weather data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards.
     */
    public DateTime $date;

    /**
     * @var ?string $location City name, place name, or full address.
     */
    public ?string $location;

    /**
     * @var ?float $lat Latitude of the location.
     */
    public ?float $lat;

    /**
     * @var ?float $long Longitude of the location.
     */
    public ?float $long;

    /**
     * @var ?string $ip IP(v4 or v6) address for location inference.
     */
    public ?string $ip;

    /**
     * @var ?value-of<HistoricalWeatherRequestPrecision> $precision Precision of the historical data. **Note:** 'daily' returns daily aggregates, 'hourly' returns hourly data.
     */
    public ?string $precision;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @param array{
     *   apiKey: string,
     *   date: DateTime,
     *   format?: ?value-of<HistoricalWeatherRequestFormat>,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   precision?: ?value-of<HistoricalWeatherRequestPrecision>,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->date = $values['date'];
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->precision = $values['precision'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
