<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseTimeZoneDstEnd extends JsonSerializableType
{
    /**
     * @var ?string $utcTime
     */
    #[JsonProperty('utc_time')]
    public ?string $utcTime;

    /**
     * @var ?string $duration
     */
    #[JsonProperty('duration')]
    public ?string $duration;

    /**
     * @var ?bool $gap
     */
    #[JsonProperty('gap')]
    public ?bool $gap;

    /**
     * @var ?string $dateTimeAfter
     */
    #[JsonProperty('date_time_after')]
    public ?string $dateTimeAfter;

    /**
     * @var ?string $dateTimeBefore
     */
    #[JsonProperty('date_time_before')]
    public ?string $dateTimeBefore;

    /**
     * @var ?bool $overlap
     */
    #[JsonProperty('overlap')]
    public ?bool $overlap;

    /**
     * @param array{
     *   utcTime?: ?string,
     *   duration?: ?string,
     *   gap?: ?bool,
     *   dateTimeAfter?: ?string,
     *   dateTimeBefore?: ?string,
     *   overlap?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->utcTime = $values['utcTime'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->gap = $values['gap'] ?? null;
        $this->dateTimeAfter = $values['dateTimeAfter'] ?? null;
        $this->dateTimeBefore = $values['dateTimeBefore'] ?? null;
        $this->overlap = $values['overlap'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
