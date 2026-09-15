<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Morning astronomical data including twilight, blue hour, and golden hour times.
 */
class AstronomyLookupV2ResponseAstronomyMorning extends JsonSerializableType
{
    /**
     * @var string $astronomicalTwilightBegin The start time of astronomical twilight in the morning
     */
    #[JsonProperty('astronomical_twilight_begin')]
    public string $astronomicalTwilightBegin;

    /**
     * @var string $astronomicalTwilightEnd The end time of astronomical twilight in the morning
     */
    #[JsonProperty('astronomical_twilight_end')]
    public string $astronomicalTwilightEnd;

    /**
     * @var string $nauticalTwilightBegin The start time of nautical twilight in the morning
     */
    #[JsonProperty('nautical_twilight_begin')]
    public string $nauticalTwilightBegin;

    /**
     * @var string $nauticalTwilightEnd The end time of nautical twilight in the morning
     */
    #[JsonProperty('nautical_twilight_end')]
    public string $nauticalTwilightEnd;

    /**
     * @var string $civilTwilightBegin The start time of civil twilight in the morning
     */
    #[JsonProperty('civil_twilight_begin')]
    public string $civilTwilightBegin;

    /**
     * @var string $civilTwilightEnd The end time of civil twilight in the morning
     */
    #[JsonProperty('civil_twilight_end')]
    public string $civilTwilightEnd;

    /**
     * @var string $blueHourBegin The beginning of the blue hour in the morning
     */
    #[JsonProperty('blue_hour_begin')]
    public string $blueHourBegin;

    /**
     * @var string $blueHourEnd The end of the blue hour in the morning
     */
    #[JsonProperty('blue_hour_end')]
    public string $blueHourEnd;

    /**
     * @var string $goldenHourBegin The beginning of the golden hour in the morning
     */
    #[JsonProperty('golden_hour_begin')]
    public string $goldenHourBegin;

    /**
     * @var string $goldenHourEnd The end of the golden hour in the morning
     */
    #[JsonProperty('golden_hour_end')]
    public string $goldenHourEnd;

    /**
     * @param array{
     *   astronomicalTwilightBegin: string,
     *   astronomicalTwilightEnd: string,
     *   nauticalTwilightBegin: string,
     *   nauticalTwilightEnd: string,
     *   civilTwilightBegin: string,
     *   civilTwilightEnd: string,
     *   blueHourBegin: string,
     *   blueHourEnd: string,
     *   goldenHourBegin: string,
     *   goldenHourEnd: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->astronomicalTwilightBegin = $values['astronomicalTwilightBegin'];
        $this->astronomicalTwilightEnd = $values['astronomicalTwilightEnd'];
        $this->nauticalTwilightBegin = $values['nauticalTwilightBegin'];
        $this->nauticalTwilightEnd = $values['nauticalTwilightEnd'];
        $this->civilTwilightBegin = $values['civilTwilightBegin'];
        $this->civilTwilightEnd = $values['civilTwilightEnd'];
        $this->blueHourBegin = $values['blueHourBegin'];
        $this->blueHourEnd = $values['blueHourEnd'];
        $this->goldenHourBegin = $values['goldenHourBegin'];
        $this->goldenHourEnd = $values['goldenHourEnd'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
