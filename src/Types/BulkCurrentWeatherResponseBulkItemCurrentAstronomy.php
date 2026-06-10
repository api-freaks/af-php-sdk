<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use DateTime;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Date;

/**
 * Astronomical information including sunrise, sunset, and moon phases for the current date.
 */
class BulkCurrentWeatherResponseBulkItemCurrentAstronomy extends JsonSerializableType
{
    /**
     * @var DateTime $date Calendar date in YYYY-MM-DD format for the astronomical data.
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $midNight Time of true solar midnight in HH:MM format.
     */
    #[JsonProperty('mid_night')]
    public string $midNight;

    /**
     * @var string $nightEnd Time when astronomical twilight ends and dawn begins in HH:MM format.
     */
    #[JsonProperty('night_end')]
    public string $nightEnd;

    /**
     * @var string $sunrise Time when the Sun becomes visible above the horizon in HH:MM format.
     */
    #[JsonProperty('sunrise')]
    public string $sunrise;

    /**
     * @var string $solarNoon Time when the Sun reaches its highest point in the sky in HH:MM format.
     */
    #[JsonProperty('solar_noon')]
    public string $solarNoon;

    /**
     * @var string $sunset Time when the Sun disappears below the horizon in HH:MM format.
     */
    #[JsonProperty('sunset')]
    public string $sunset;

    /**
     * @var string $nightBegin Time when astronomical twilight begins and night starts in HH:MM format.
     */
    #[JsonProperty('night_begin')]
    public string $nightBegin;

    /**
     * @var string $dayLength Total duration of daylight in HH:MM format.
     */
    #[JsonProperty('day_length')]
    public string $dayLength;

    /**
     * @var string $sunStatus Current position of the Sun relative to the horizon (above_horizon, below_horizon, or -).
     */
    #[JsonProperty('sun_status')]
    public string $sunStatus;

    /**
     * @var string $moonPhase Current lunar phase (NEW_MOON, WAXING_CRESCENT, FULL_MOON, WANING_GIBBOUS, etc.).
     */
    #[JsonProperty('moon_phase')]
    public string $moonPhase;

    /**
     * @var string $moonrise Time when the Moon becomes visible above the horizon in HH:MM format.
     */
    #[JsonProperty('moonrise')]
    public string $moonrise;

    /**
     * @var string $moonset Time when the Moon disappears below the horizon in HH:MM format.
     */
    #[JsonProperty('moonset')]
    public string $moonset;

    /**
     * @var string $moonStatus Current visibility status of the Moon (visible, not_visible, or -).
     */
    #[JsonProperty('moon_status')]
    public string $moonStatus;

    /**
     * @param array{
     *   date: DateTime,
     *   midNight: string,
     *   nightEnd: string,
     *   sunrise: string,
     *   solarNoon: string,
     *   sunset: string,
     *   nightBegin: string,
     *   dayLength: string,
     *   sunStatus: string,
     *   moonPhase: string,
     *   moonrise: string,
     *   moonset: string,
     *   moonStatus: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->midNight = $values['midNight'];
        $this->nightEnd = $values['nightEnd'];
        $this->sunrise = $values['sunrise'];
        $this->solarNoon = $values['solarNoon'];
        $this->sunset = $values['sunset'];
        $this->nightBegin = $values['nightBegin'];
        $this->dayLength = $values['dayLength'];
        $this->sunStatus = $values['sunStatus'];
        $this->moonPhase = $values['moonPhase'];
        $this->moonrise = $values['moonrise'];
        $this->moonset = $values['moonset'];
        $this->moonStatus = $values['moonStatus'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
