<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneConvertResponse extends JsonSerializableType
{
    /**
     * @var string $originalTime Original time before conversion (format YYYY-MM-DD HH:mm:ss, not ISO 8601).
     */
    #[JsonProperty('original_time')]
    public string $originalTime;

    /**
     * @var string $convertedTime Time after conversion (format YYYY-MM-DD HH:mm:ss, not ISO 8601).
     */
    #[JsonProperty('converted_time')]
    public string $convertedTime;

    /**
     * @var float $diffHour Difference in hours
     */
    #[JsonProperty('diff_hour')]
    public float $diffHour;

    /**
     * @var float $diffMin Difference in minutes
     */
    #[JsonProperty('diff_min')]
    public float $diffMin;

    /**
     * @param array{
     *   originalTime: string,
     *   convertedTime: string,
     *   diffHour: float,
     *   diffMin: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->originalTime = $values['originalTime'];
        $this->convertedTime = $values['convertedTime'];
        $this->diffHour = $values['diffHour'];
        $this->diffMin = $values['diffMin'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
