<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\WeatherForecastRequestFormat;
use DateTime;
use Apifreaks\Types\WeatherForecastRequestPrecision;

class WeatherForecastRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<WeatherForecastRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var ?DateTime $startDate Start date for the forecast in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between startDate and endDate must not exceed 16 days.
     */
    public ?DateTime $startDate;

    /**
     * @var ?DateTime $endDate End date for the forecast in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between startDate and endDate must not exceed 16 days.
     */
    public ?DateTime $endDate;

    /**
     * @var ?int $forecastDays Number of days for the forecast, from 1 to 16. Default is 7. Maximum value is 16.
     */
    public ?int $forecastDays;

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
     * @var ?value-of<WeatherForecastRequestPrecision> $precision Precision of the forecast data.
     */
    public ?string $precision;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<WeatherForecastRequestFormat>,
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   forecastDays?: ?int,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   precision?: ?value-of<WeatherForecastRequestPrecision>,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->forecastDays = $values['forecastDays'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->precision = $values['precision'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
