<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AstronomyLookupResponseAstronomy extends JsonSerializableType
{
    /**
     * @var ?string $timeZone Time zone to receive all time-based data in your preferred local time.
     */
    #[JsonProperty('time_zone')]
    public ?string $timeZone;

    /**
     * @var string $date Date for astronomy data (YYYY-MM-DD)
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $currentTime Current time (HH:mm:ss.SSS)
     */
    #[JsonProperty('current_time')]
    public string $currentTime;

    /**
     * @var string $midNight Midnight time (HH:mm)
     */
    #[JsonProperty('mid_night')]
    public string $midNight;

    /**
     * @var string $nightEnd Time when night ends (HH:mm)
     */
    #[JsonProperty('night_end')]
    public string $nightEnd;

    /**
     * @var AstronomyLookupResponseAstronomyMorning $morning
     */
    #[JsonProperty('morning')]
    public AstronomyLookupResponseAstronomyMorning $morning;

    /**
     * @var string $sunrise Sunrise time (HH:mm)
     */
    #[JsonProperty('sunrise')]
    public string $sunrise;

    /**
     * @var string $sunset Sunset time (HH:mm)
     */
    #[JsonProperty('sunset')]
    public string $sunset;

    /**
     * @var AstronomyLookupResponseAstronomyEvening $evening
     */
    #[JsonProperty('evening')]
    public AstronomyLookupResponseAstronomyEvening $evening;

    /**
     * @var string $nightBegin Time when night begins (HH:mm)
     */
    #[JsonProperty('night_begin')]
    public string $nightBegin;

    /**
     * @var string $sunStatus Current status of the sun
     */
    #[JsonProperty('sun_status')]
    public string $sunStatus;

    /**
     * @var string $solarNoon Solar noon time (HH:mm)
     */
    #[JsonProperty('solar_noon')]
    public string $solarNoon;

    /**
     * @var string $dayLength Length of the day (HH:mm)
     */
    #[JsonProperty('day_length')]
    public string $dayLength;

    /**
     * @var float $sunAltitude Sun altitude angle
     */
    #[JsonProperty('sun_altitude')]
    public float $sunAltitude;

    /**
     * @var float $sunDistance Distance from Earth to Sun
     */
    #[JsonProperty('sun_distance')]
    public float $sunDistance;

    /**
     * @var float $sunAzimuth Sun azimuth angle
     */
    #[JsonProperty('sun_azimuth')]
    public float $sunAzimuth;

    /**
     * @var string $moonPhase Moon phase
     */
    #[JsonProperty('moon_phase')]
    public string $moonPhase;

    /**
     * @var string $moonrise Moonrise time (HH:mm)
     */
    #[JsonProperty('moonrise')]
    public string $moonrise;

    /**
     * @var string $moonset Moonset time (HH:mm)
     */
    #[JsonProperty('moonset')]
    public string $moonset;

    /**
     * @var string $moonStatus Current status of the moon
     */
    #[JsonProperty('moon_status')]
    public string $moonStatus;

    /**
     * @var float $moonAltitude Moon altitude angle
     */
    #[JsonProperty('moon_altitude')]
    public float $moonAltitude;

    /**
     * @var float $moonDistance Distance from Earth to Moon
     */
    #[JsonProperty('moon_distance')]
    public float $moonDistance;

    /**
     * @var float $moonAzimuth Moon azimuth angle
     */
    #[JsonProperty('moon_azimuth')]
    public float $moonAzimuth;

    /**
     * @var float $moonParallacticAngle Moon parallactic angle
     */
    #[JsonProperty('moon_parallactic_angle')]
    public float $moonParallacticAngle;

    /**
     * @var string $moonIlluminationPercentage Moon illumination percentage
     */
    #[JsonProperty('moon_illumination_percentage')]
    public string $moonIlluminationPercentage;

    /**
     * @var float $moonAngle Moon angle
     */
    #[JsonProperty('moon_angle')]
    public float $moonAngle;

    /**
     * @param array{
     *   date: string,
     *   currentTime: string,
     *   midNight: string,
     *   nightEnd: string,
     *   morning: AstronomyLookupResponseAstronomyMorning,
     *   sunrise: string,
     *   sunset: string,
     *   evening: AstronomyLookupResponseAstronomyEvening,
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
