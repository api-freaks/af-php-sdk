<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Daily flood forecast data for the date.
 */
class FloodForecastResponseForecastValueDaily extends JsonSerializableType
{
    /**
     * @var ?string $timestamp Local timestamp of this reading (format YYYY-MM-DDTHH:mm, not ISO 8601).
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

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
     *   timestamp?: ?string,
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
