<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class TimezoneLookupResponseTimeZone extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var float $offset
     */
    #[JsonProperty('offset')]
    public float $offset;

    /**
     * @var float $offsetWithDst
     */
    #[JsonProperty('offset_with_dst')]
    public float $offsetWithDst;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $dateTime
     */
    #[JsonProperty('date_time')]
    public string $dateTime;

    /**
     * @var string $dateTimeTxt
     */
    #[JsonProperty('date_time_txt')]
    public string $dateTimeTxt;

    /**
     * @var string $dateTimeWti
     */
    #[JsonProperty('date_time_wti')]
    public string $dateTimeWti;

    /**
     * @var string $dateTimeYmd
     */
    #[JsonProperty('date_time_ymd')]
    public string $dateTimeYmd;

    /**
     * @var float $dateTimeUnix
     */
    #[JsonProperty('date_time_unix')]
    public float $dateTimeUnix;

    /**
     * @var string $time24
     */
    #[JsonProperty('time_24')]
    public string $time24;

    /**
     * @var string $time12
     */
    #[JsonProperty('time_12')]
    public string $time12;

    /**
     * @var int $week
     */
    #[JsonProperty('week')]
    public int $week;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $yearAbbr
     */
    #[JsonProperty('year_abbr')]
    public string $yearAbbr;

    /**
     * @var bool $isDst
     */
    #[JsonProperty('is_dst')]
    public bool $isDst;

    /**
     * @var float $dstSavings
     */
    #[JsonProperty('dst_savings')]
    public float $dstSavings;

    /**
     * @var bool $dstExists
     */
    #[JsonProperty('dst_exists')]
    public bool $dstExists;

    /**
     * @var TimezoneLookupResponseTimeZoneDstStart $dstStart
     */
    #[JsonProperty('dst_start')]
    public TimezoneLookupResponseTimeZoneDstStart $dstStart;

    /**
     * @var TimezoneLookupResponseTimeZoneDstEnd $dstEnd
     */
    #[JsonProperty('dst_end')]
    public TimezoneLookupResponseTimeZoneDstEnd $dstEnd;

    /**
     * @param array{
     *   name: string,
     *   offset: float,
     *   offsetWithDst: float,
     *   date: string,
     *   dateTime: string,
     *   dateTimeTxt: string,
     *   dateTimeWti: string,
     *   dateTimeYmd: string,
     *   dateTimeUnix: float,
     *   time24: string,
     *   time12: string,
     *   week: int,
     *   month: int,
     *   year: int,
     *   yearAbbr: string,
     *   isDst: bool,
     *   dstSavings: float,
     *   dstExists: bool,
     *   dstStart: TimezoneLookupResponseTimeZoneDstStart,
     *   dstEnd: TimezoneLookupResponseTimeZoneDstEnd,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->offset = $values['offset'];
        $this->offsetWithDst = $values['offsetWithDst'];
        $this->date = $values['date'];
        $this->dateTime = $values['dateTime'];
        $this->dateTimeTxt = $values['dateTimeTxt'];
        $this->dateTimeWti = $values['dateTimeWti'];
        $this->dateTimeYmd = $values['dateTimeYmd'];
        $this->dateTimeUnix = $values['dateTimeUnix'];
        $this->time24 = $values['time24'];
        $this->time12 = $values['time12'];
        $this->week = $values['week'];
        $this->month = $values['month'];
        $this->year = $values['year'];
        $this->yearAbbr = $values['yearAbbr'];
        $this->isDst = $values['isDst'];
        $this->dstSavings = $values['dstSavings'];
        $this->dstExists = $values['dstExists'];
        $this->dstStart = $values['dstStart'];
        $this->dstEnd = $values['dstEnd'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
