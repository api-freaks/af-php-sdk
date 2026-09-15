<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Complete astronomical data for the specified location and date.
 */
class AstronomyLookupV2ResponseAstronomy extends JsonSerializableType
{
    /**
     * @var ?string $timeZone Appears (with the provided value) only when the user includes a time_zone in the query to specify which time to observe.
     */
    #[JsonProperty('time_zone')]
    public ?string $timeZone;

    /**
     * @var string $date The date astronomy data was calculated for. Defaults to today's date; reflects the date query parameter's value when that parameter is supplied.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $currentTime The current time
     */
    #[JsonProperty('current_time')]
    public string $currentTime;

    /**
     * @var string $midNight The time of midnight (solar-based)
     */
    #[JsonProperty('mid_night')]
    public string $midNight;

    /**
     * @var string $nightEnd The time when night ends (start of astronomical twilight)
     */
    #[JsonProperty('night_end')]
    public string $nightEnd;

    /**
     * @var AstronomyLookupV2ResponseAstronomyMorning $morning Morning astronomical data including twilight, blue hour, and golden hour times.
     */
    #[JsonProperty('morning')]
    public AstronomyLookupV2ResponseAstronomyMorning $morning;

    /**
     * @var string $sunrise The time of sunrise
     */
    #[JsonProperty('sunrise')]
    public string $sunrise;

    /**
     * @var string $sunset The time of sunset
     */
    #[JsonProperty('sunset')]
    public string $sunset;

    /**
     * @var AstronomyLookupV2ResponseAstronomyEvening $evening Evening astronomical data including golden hour, blue hour, and twilight times.
     */
    #[JsonProperty('evening')]
    public AstronomyLookupV2ResponseAstronomyEvening $evening;

    /**
     * @var string $nightBegin The time when night begins (end of astronomical twilight)
     */
    #[JsonProperty('night_begin')]
    public string $nightBegin;

    /**
     * @var string $sunStatus The current status of the sun (e.g., "rising", "setting", "-")
     */
    #[JsonProperty('sun_status')]
    public string $sunStatus;

    /**
     * @var string $solarNoon The time when the sun reaches its highest point in the sky
     */
    #[JsonProperty('solar_noon')]
    public string $solarNoon;

    /**
     * @var string $dayLength The total duration of daylight
     */
    #[JsonProperty('day_length')]
    public string $dayLength;

    /**
     * @var float $sunAltitude The altitude angle of the sun above the horizon in degrees
     */
    #[JsonProperty('sun_altitude')]
    public float $sunAltitude;

    /**
     * @var float $sunDistance The distance from the Earth to the sun in kilometers
     */
    #[JsonProperty('sun_distance')]
    public float $sunDistance;

    /**
     * @var float $sunAzimuth The azimuth angle of the sun in degrees from true north
     */
    #[JsonProperty('sun_azimuth')]
    public float $sunAzimuth;

    /**
     * @var string $moonPhase The current phase of the moon (e.g., "WAXING_GIBBOUS")
     */
    #[JsonProperty('moon_phase')]
    public string $moonPhase;

    /**
     * @var string $moonrise The time of moonrise
     */
    #[JsonProperty('moonrise')]
    public string $moonrise;

    /**
     * @var string $moonset The time of moonset
     */
    #[JsonProperty('moonset')]
    public string $moonset;

    /**
     * @var string $moonStatus The current status of the moon (e.g., "rising", "setting", "-")
     */
    #[JsonProperty('moon_status')]
    public string $moonStatus;

    /**
     * @var float $moonAltitude The altitude angle of the moon above the horizon in degrees
     */
    #[JsonProperty('moon_altitude')]
    public float $moonAltitude;

    /**
     * @var float $moonDistance The distance from the Earth to the moon in kilometers
     */
    #[JsonProperty('moon_distance')]
    public float $moonDistance;

    /**
     * @var float $moonAzimuth The azimuth angle of the moon in degrees from true north
     */
    #[JsonProperty('moon_azimuth')]
    public float $moonAzimuth;

    /**
     * @var float $moonParallacticAngle The parallactic angle of the moon in degrees
     */
    #[JsonProperty('moon_parallactic_angle')]
    public float $moonParallacticAngle;

    /**
     * @var string $moonIlluminationPercentage The percentage of the moon illuminated by sunlight. A negative value indicates the moon is in a waning phase.
     */
    #[JsonProperty('moon_illumination_percentage')]
    public string $moonIlluminationPercentage;

    /**
     * @var float $moonAngle The geometric angle of the moon relative to the observer
     */
    #[JsonProperty('moon_angle')]
    public float $moonAngle;

    /**
     * @param array{
     *   date: string,
     *   currentTime: string,
     *   midNight: string,
     *   nightEnd: string,
     *   morning: AstronomyLookupV2ResponseAstronomyMorning,
     *   sunrise: string,
     *   sunset: string,
     *   evening: AstronomyLookupV2ResponseAstronomyEvening,
     *   nightBegin: string,
     *   sunStatus: string,
     *   solarNoon: string,
     *   dayLength: string,
     *   sunAltitude: float,
     *   sunDistance: float,
     *   sunAzimuth: float,
     *   moonPhase: string,
     *   moonrise: string,
     *   moonset: string,
     *   moonStatus: string,
     *   moonAltitude: float,
     *   moonDistance: float,
     *   moonAzimuth: float,
     *   moonParallacticAngle: float,
     *   moonIlluminationPercentage: string,
     *   moonAngle: float,
     *   timeZone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timeZone = $values['timeZone'] ?? null;
        $this->date = $values['date'];
        $this->currentTime = $values['currentTime'];
        $this->midNight = $values['midNight'];
        $this->nightEnd = $values['nightEnd'];
        $this->morning = $values['morning'];
        $this->sunrise = $values['sunrise'];
        $this->sunset = $values['sunset'];
        $this->evening = $values['evening'];
        $this->nightBegin = $values['nightBegin'];
        $this->sunStatus = $values['sunStatus'];
        $this->solarNoon = $values['solarNoon'];
        $this->dayLength = $values['dayLength'];
        $this->sunAltitude = $values['sunAltitude'];
        $this->sunDistance = $values['sunDistance'];
        $this->sunAzimuth = $values['sunAzimuth'];
        $this->moonPhase = $values['moonPhase'];
        $this->moonrise = $values['moonrise'];
        $this->moonset = $values['moonset'];
        $this->moonStatus = $values['moonStatus'];
        $this->moonAltitude = $values['moonAltitude'];
        $this->moonDistance = $values['moonDistance'];
        $this->moonAzimuth = $values['moonAzimuth'];
        $this->moonParallacticAngle = $values['moonParallacticAngle'];
        $this->moonIlluminationPercentage = $values['moonIlluminationPercentage'];
        $this->moonAngle = $values['moonAngle'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
