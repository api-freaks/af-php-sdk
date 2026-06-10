<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Daily flood forecast data for the date.
 */
class FloodForecastResponseForecastValueDaily extends JsonSerializableType
{
    /**
     * @var ?DateTime $timestamp ISO 8601 formatted timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?float $riverDischarge The observed river discharge value (m³/s)
     */
    #[JsonProperty('river_discharge')]
    public ?float $riverDischarge;

    /**
     * @var ?float $riverDischargeMean The mean river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_mean')]
    public ?float $riverDischargeMean;

    /**
     * @var ?float $riverDischargeMedian The median river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_median')]
    public ?float $riverDischargeMedian;

    /**
     * @var ?float $riverDischargeMax The maximum river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_max')]
    public ?float $riverDischargeMax;

    /**
     * @var ?float $riverDischargeMin The minimum river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_min')]
    public ?float $riverDischargeMin;

    /**
     * @var ?float $riverDischargeP25 The 25th percentile of river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_p25')]
    public ?float $riverDischargeP25;

    /**
     * @var ?float $riverDischargeP75 The 75th percentile of river discharge (m³/s)
     */
    #[JsonProperty('river_discharge_p75')]
    public ?float $riverDischargeP75;

    /**
     * @param array{
     *   timestamp?: ?DateTime,
     *   riverDischarge?: ?float,
     *   riverDischargeMean?: ?float,
     *   riverDischargeMedian?: ?float,
     *   riverDischargeMax?: ?float,
     *   riverDischargeMin?: ?float,
     *   riverDischargeP25?: ?float,
     *   riverDischargeP75?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->riverDischarge = $values['riverDischarge'] ?? null;
        $this->riverDischargeMean = $values['riverDischargeMean'] ?? null;
        $this->riverDischargeMedian = $values['riverDischargeMedian'] ?? null;
        $this->riverDischargeMax = $values['riverDischargeMax'] ?? null;
        $this->riverDischargeMin = $values['riverDischargeMin'] ?? null;
        $this->riverDischargeP25 = $values['riverDischargeP25'] ?? null;
        $this->riverDischargeP75 = $values['riverDischargeP75'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
