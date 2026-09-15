<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Timezone and date/time information for the location.
 */
class TimezoneLookupV2ResponseTimeZone extends JsonSerializableType
{
    /**
     * @var string $name The IANA timezone name/identifier for the location.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var float $offset The Standard time zone offset from UTC in hours.
     */
    #[JsonProperty('offset')]
    public float $offset;

    /**
     * @var float $offsetWithDst The time zone offset from UTC in hours, accounting for DST.
     */
    #[JsonProperty('offset_with_dst')]
    public float $offsetWithDst;

    /**
     * @var string $currentTime The current date and time with timezone offset in YYYY-MM-DD HH:mm:ss.SSS±ZZZZ format.
     */
    #[JsonProperty('current_time')]
    public string $currentTime;

    /**
     * @var float $currentTimeUnix The Unix timestamp representing the date and time in seconds.
     */
    #[JsonProperty('current_time_unix')]
    public float $currentTimeUnix;

    /**
     * @var string $date The current date in YYYY-MM-DD format.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $dateTime The current date and time in YYYY-MM-DD HH:mm:ss format.
     */
    #[JsonProperty('date_time')]
    public string $dateTime;

    /**
     * @var string $dateTimeTxt The current date and time in descriptive format EEEE, MMMM dd, yyyy HH:mm:ss.
     */
    #[JsonProperty('date_time_txt')]
    public string $dateTimeTxt;

    /**
     * @var string $dateTimeWti The date and time with time zone information in EEE, dd MMM yyyy HH:mm:ss Z format.
     */
    #[JsonProperty('date_time_wti')]
    public string $dateTimeWti;

    /**
     * @var string $dateTimeYmd The date and time with timezone offset in ISO 8601 format YYYY-MM-DDTHH:mm:ss±HHMM.
     */
    #[JsonProperty('date_time_ymd')]
    public string $dateTimeYmd;

    /**
     * @var string $time24 The current time in 24-hour format HH:mm:ss.
     */
    #[JsonProperty('time_24')]
    public string $time24;

    /**
     * @var string $time12 The current time in 12-hour format with AM/PM notation.
     */
    #[JsonProperty('time_12')]
    public string $time12;

    /**
     * @var int $week The week number of the year (1-52).
     */
    #[JsonProperty('week')]
    public int $week;

    /**
     * @var int $month The current month as a number (1-12).
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var int $year The four-digit current year.
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $yearAbbr The two-digit abbreviation for the year.
     */
    #[JsonProperty('year_abbr')]
    public string $yearAbbr;

    /**
     * @var string $currentTzAbbreviation Abbreviation of the time zone currently in effect (standard or DST).
     */
    #[JsonProperty('current_tz_abbreviation')]
    public string $currentTzAbbreviation;

    /**
     * @var string $currentTzFullName Full name of the time zone currently in effect.
     */
    #[JsonProperty('current_tz_full_name')]
    public string $currentTzFullName;

    /**
     * @var string $standardTzAbbreviation Abbreviation of the standard (non-DST) time zone.
     */
    #[JsonProperty('standard_tz_abbreviation')]
    public string $standardTzAbbreviation;

    /**
     * @var string $standardTzFullName Full name of the standard (non-DST) time zone.
     */
    #[JsonProperty('standard_tz_full_name')]
    public string $standardTzFullName;

    /**
     * @var bool $isDst Is the time zone in daylight savings?
     */
    #[JsonProperty('is_dst')]
    public bool $isDst;

    /**
     * @var ?string $dstTzAbbreviation Abbreviation of the DST time zone. Always present as a key; holds an empty string when dst_exists is false.
     */
    #[JsonProperty('dst_tz_abbreviation')]
    public ?string $dstTzAbbreviation;

    /**
     * @var ?string $dstTzFullName Full name of the DST time zone. Always present as a key; holds an empty string when dst_exists is false.
     */
    #[JsonProperty('dst_tz_full_name')]
    public ?string $dstTzFullName;

    /**
     * @var float $dstSavings The amount of time added for daylight saving in hours.
     */
    #[JsonProperty('dst_savings')]
    public float $dstSavings;

    /**
     * @var bool $dstExists Indicates whether DST is observed in the region.
     */
    #[JsonProperty('dst_exists')]
    public bool $dstExists;

    /**
     * @var ?TimezoneLookupV2ResponseTimeZoneDstStart $dstStart DST transition details (used for both the DST start and DST end transitions). Always present as a key on the parent TimeZone object; returned as an empty object {} when dst_exists is false, so none of its properties are required.
     */
    #[JsonProperty('dst_start')]
    public ?TimezoneLookupV2ResponseTimeZoneDstStart $dstStart;

    /**
     * @var ?TimezoneLookupV2ResponseTimeZoneDstEnd $dstEnd DST transition details (used for both the DST start and DST end transitions). Always present as a key on the parent TimeZone object; returned as an empty object {} when dst_exists is false, so none of its properties are required.
     */
    #[JsonProperty('dst_end')]
    public ?TimezoneLookupV2ResponseTimeZoneDstEnd $dstEnd;

    /**
     * @param array{
     *   name: string,
     *   offset: float,
     *   offsetWithDst: float,
     *   currentTime: string,
     *   currentTimeUnix: float,
     *   date: string,
     *   dateTime: string,
     *   dateTimeTxt: string,
     *   dateTimeWti: string,
     *   dateTimeYmd: string,
     *   time24: string,
     *   time12: string,
     *   week: int,
     *   month: int,
     *   year: int,
     *   yearAbbr: string,
     *   currentTzAbbreviation: string,
     *   currentTzFullName: string,
     *   standardTzAbbreviation: string,
     *   standardTzFullName: string,
     *   isDst: bool,
     *   dstSavings: float,
     *   dstExists: bool,
     *   dstTzAbbreviation?: ?string,
     *   dstTzFullName?: ?string,
     *   dstStart?: ?TimezoneLookupV2ResponseTimeZoneDstStart,
     *   dstEnd?: ?TimezoneLookupV2ResponseTimeZoneDstEnd,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->offset = $values['offset'];
        $this->offsetWithDst = $values['offsetWithDst'];
        $this->currentTime = $values['currentTime'];
        $this->currentTimeUnix = $values['currentTimeUnix'];
        $this->date = $values['date'];
        $this->dateTime = $values['dateTime'];
        $this->dateTimeTxt = $values['dateTimeTxt'];
        $this->dateTimeWti = $values['dateTimeWti'];
        $this->dateTimeYmd = $values['dateTimeYmd'];
        $this->time24 = $values['time24'];
        $this->time12 = $values['time12'];
        $this->week = $values['week'];
        $this->month = $values['month'];
        $this->year = $values['year'];
        $this->yearAbbr = $values['yearAbbr'];
        $this->currentTzAbbreviation = $values['currentTzAbbreviation'];
        $this->currentTzFullName = $values['currentTzFullName'];
        $this->standardTzAbbreviation = $values['standardTzAbbreviation'];
        $this->standardTzFullName = $values['standardTzFullName'];
        $this->isDst = $values['isDst'];
        $this->dstTzAbbreviation = $values['dstTzAbbreviation'] ?? null;
        $this->dstTzFullName = $values['dstTzFullName'] ?? null;
        $this->dstSavings = $values['dstSavings'];
        $this->dstExists = $values['dstExists'];
        $this->dstStart = $values['dstStart'] ?? null;
        $this->dstEnd = $values['dstEnd'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
