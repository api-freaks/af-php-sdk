<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\WeatherTimeSeriesRequestFormat;
use DateTime;
use Apifreaks\Types\WeatherTimeSeriesRequestPrecision;

class WeatherTimeSeriesRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<WeatherTimeSeriesRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var DateTime $startDate Starting date for the data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards. For precision=daily, the difference between endDate and startDate must not exceed 90 days. For precision=hourly, the difference must not exceed 7 days.
     */
    public DateTime $startDate;

    /**
     * @var DateTime $endDate End date for the data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards. For precision=daily, the difference between endDate and startDate must not exceed 90 days. For precision=hourly, the difference must not exceed 7 days.
     */
    public DateTime $endDate;

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
     * @var ?value-of<WeatherTimeSeriesRequestPrecision> $precision Precision of the data.
     */
    public ?string $precision;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @param array{
     *   apiKey: string,
     *   startDate: DateTime,
     *   endDate: DateTime,
     *   format?: ?value-of<WeatherTimeSeriesRequestFormat>,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   precision?: ?value-of<WeatherTimeSeriesRequestPrecision>,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->precision = $values['precision'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
