<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * DST transition details (used for both the DST start and DST end transitions). Always present as a key on the parent TimeZone object; returned as an empty object {} when dst_exists is false, so none of its properties are required.
 */
class TimezoneLookupV2ResponseTimeZoneDstStart extends JsonSerializableType
{
    /**
     * @var ?string $utcTime DST transition moment in UTC.
     */
    #[JsonProperty('utc_time')]
    public ?string $utcTime;

    /**
     * @var ?string $duration Clock change at the DST transition, in hours.
     */
    #[JsonProperty('duration')]
    public ?string $duration;

    /**
     * @var ?bool $gap true if local time jumps forward (some times do not exist).
     */
    #[JsonProperty('gap')]
    public ?bool $gap;

    /**
     * @var ?string $dateTimeAfter Local date/time immediately after the DST transition.
     */
    #[JsonProperty('date_time_after')]
    public ?string $dateTimeAfter;

    /**
     * @var ?string $dateTimeBefore Local date/time immediately before the DST transition.
     */
    #[JsonProperty('date_time_before')]
    public ?string $dateTimeBefore;

    /**
     * @var ?bool $overlap true if local times repeat around the DST transition.
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
