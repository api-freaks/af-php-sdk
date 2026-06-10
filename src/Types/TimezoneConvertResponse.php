<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

class TimezoneConvertResponse extends JsonSerializableType
{
    /**
     * @var DateTime $originalTime Original time before conversion
     */
    #[JsonProperty('original_time'), Date(Date::TYPE_DATETIME)]
    public DateTime $originalTime;

    /**
     * @var DateTime $convertedTime Time after conversion
     */
    #[JsonProperty('converted_time'), Date(Date::TYPE_DATETIME)]
    public DateTime $convertedTime;

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
     *   originalTime: DateTime,
     *   convertedTime: DateTime,
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
