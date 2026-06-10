<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AstronomyLookupResponseAstronomyMorning extends JsonSerializableType
{
    /**
     * @var ?string $astronomicalTwilightBegin
     */
    #[JsonProperty('astronomical_twilight_begin')]
    public ?string $astronomicalTwilightBegin;

    /**
     * @var ?string $astronomicalTwilightEnd
     */
    #[JsonProperty('astronomical_twilight_end')]
    public ?string $astronomicalTwilightEnd;

    /**
     * @var ?string $nauticalTwilightBegin
     */
    #[JsonProperty('nautical_twilight_begin')]
    public ?string $nauticalTwilightBegin;

    /**
     * @var ?string $nauticalTwilightEnd
     */
    #[JsonProperty('nautical_twilight_end')]
    public ?string $nauticalTwilightEnd;

    /**
     * @var ?string $civilTwilightBegin
     */
    #[JsonProperty('civil_twilight_begin')]
    public ?string $civilTwilightBegin;

    /**
     * @var ?string $civilTwilightEnd
     */
    #[JsonProperty('civil_twilight_end')]
    public ?string $civilTwilightEnd;

    /**
     * @var ?string $blueHourBegin
     */
    #[JsonProperty('blue_hour_begin')]
    public ?string $blueHourBegin;

    /**
     * @var ?string $blueHourEnd
     */
    #[JsonProperty('blue_hour_end')]
    public ?string $blueHourEnd;

    /**
     * @var ?string $goldenHourBegin
     */
    #[JsonProperty('golden_hour_begin')]
    public ?string $goldenHourBegin;

    /**
     * @var ?string $goldenHourEnd
     */
    #[JsonProperty('golden_hour_end')]
    public ?string $goldenHourEnd;

    /**
     * @param array{
     *   astronomicalTwilightBegin?: ?string,
     *   astronomicalTwilightEnd?: ?string,
     *   nauticalTwilightBegin?: ?string,
     *   nauticalTwilightEnd?: ?string,
     *   civilTwilightBegin?: ?string,
     *   civilTwilightEnd?: ?string,
     *   blueHourBegin?: ?string,
     *   blueHourEnd?: ?string,
     *   goldenHourBegin?: ?string,
     *   goldenHourEnd?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->astronomicalTwilightBegin = $values['astronomicalTwilightBegin'] ?? null;
        $this->astronomicalTwilightEnd = $values['astronomicalTwilightEnd'] ?? null;
        $this->nauticalTwilightBegin = $values['nauticalTwilightBegin'] ?? null;
        $this->nauticalTwilightEnd = $values['nauticalTwilightEnd'] ?? null;
        $this->civilTwilightBegin = $values['civilTwilightBegin'] ?? null;
        $this->civilTwilightEnd = $values['civilTwilightEnd'] ?? null;
        $this->blueHourBegin = $values['blueHourBegin'] ?? null;
        $this->blueHourEnd = $values['blueHourEnd'] ?? null;
        $this->goldenHourBegin = $values['goldenHourBegin'] ?? null;
        $this->goldenHourEnd = $values['goldenHourEnd'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
