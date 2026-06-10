<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\AirQualityRequestFormat;
use DateTime;
use Apifreaks\Types\AirQualityRequestPrecision;

class AirQualityRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<AirQualityRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var ?DateTime $startDate Starting date for AQI forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 5 days.
     */
    public ?DateTime $startDate;

    /**
     * @var ?DateTime $endDate End date for AQI forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 5 days.
     */
    public ?DateTime $endDate;

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
     * @var ?value-of<AirQualityRequestPrecision> $precision Only hourly precision is supported; returns hourly AQI data for the selected date range.
     */
    public ?string $precision;

    /**
     * @var ?string $timezone Timezone for the results.
     */
    public ?string $timezone;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<AirQualityRequestFormat>,
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   location?: ?string,
     *   lat?: ?float,
     *   long?: ?float,
     *   ip?: ?string,
     *   precision?: ?value-of<AirQualityRequestPrecision>,
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
        $this->location = $values['location'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->long = $values['long'] ?? null;
        $this->ip = $values['ip'] ?? null;
        $this->precision = $values['precision'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
