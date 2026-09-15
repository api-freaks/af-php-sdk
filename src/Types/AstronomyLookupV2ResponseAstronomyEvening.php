<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Evening astronomical data including golden hour, blue hour, and twilight times.
 */
class AstronomyLookupV2ResponseAstronomyEvening extends JsonSerializableType
{
    /**
     * @var string $goldenHourBegin The beginning of the golden hour in the evening
     */
    #[JsonProperty('golden_hour_begin')]
    public string $goldenHourBegin;

    /**
     * @var string $goldenHourEnd The end of the golden hour in the evening
     */
    #[JsonProperty('golden_hour_end')]
    public string $goldenHourEnd;

    /**
     * @var string $blueHourBegin The beginning of the blue hour in the evening
     */
    #[JsonProperty('blue_hour_begin')]
    public string $blueHourBegin;

    /**
     * @var string $blueHourEnd The end of the blue hour in the evening
     */
    #[JsonProperty('blue_hour_end')]
    public string $blueHourEnd;

    /**
     * @var string $civilTwilightBegin The start of civil twilight in the evening
     */
    #[JsonProperty('civil_twilight_begin')]
    public string $civilTwilightBegin;

    /**
     * @var string $civilTwilightEnd The end of civil twilight in the evening
     */
    #[JsonProperty('civil_twilight_end')]
    public string $civilTwilightEnd;

    /**
     * @var string $nauticalTwilightBegin The start of nautical twilight in the evening
     */
    #[JsonProperty('nautical_twilight_begin')]
    public string $nauticalTwilightBegin;

    /**
     * @var string $nauticalTwilightEnd The end of nautical twilight in the evening
     */
    #[JsonProperty('nautical_twilight_end')]
    public string $nauticalTwilightEnd;

    /**
     * @var string $astronomicalTwilightBegin The start of astronomical twilight in the evening
     */
    #[JsonProperty('astronomical_twilight_begin')]
    public string $astronomicalTwilightBegin;

    /**
     * @var string $astronomicalTwilightEnd The end of astronomical twilight in the evening
     */
    #[JsonProperty('astronomical_twilight_end')]
    public string $astronomicalTwilightEnd;

    /**
     * @param array{
     *   goldenHourBegin: string,
     *   goldenHourEnd: string,
     *   blueHourBegin: string,
     *   blueHourEnd: string,
     *   civilTwilightBegin: string,
     *   civilTwilightEnd: string,
     *   nauticalTwilightBegin: string,
     *   nauticalTwilightEnd: string,
     *   astronomicalTwilightBegin: string,
     *   astronomicalTwilightEnd: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->goldenHourBegin = $values['goldenHourBegin'];
        $this->goldenHourEnd = $values['goldenHourEnd'];
        $this->blueHourBegin = $values['blueHourBegin'];
        $this->blueHourEnd = $values['blueHourEnd'];
        $this->civilTwilightBegin = $values['civilTwilightBegin'];
        $this->civilTwilightEnd = $values['civilTwilightEnd'];
        $this->nauticalTwilightBegin = $values['nauticalTwilightBegin'];
        $this->nauticalTwilightEnd = $values['nauticalTwilightEnd'];
        $this->astronomicalTwilightBegin = $values['astronomicalTwilightBegin'];
        $this->astronomicalTwilightEnd = $values['astronomicalTwilightEnd'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
