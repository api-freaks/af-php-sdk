<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Time zone information for the IP's location.
 */
class BulkGeolocationLookupV2ResponseItemAbuseTimeZone extends JsonSerializableType
{
    /**
     * @var string $name Time zone in IANA TZDB format.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var float $offset Standard time UTC offset in hours.
     */
    #[JsonProperty('offset')]
    public float $offset;

    /**
     * @var float $offsetWithDst Current effective UTC offset in hours, including DST.
     */
    #[JsonProperty('offset_with_dst')]
    public float $offsetWithDst;

    /**
     * @var string $currentTime Local date/time in YYYY-MM-DD HH:mm:ss.SSS±ZZZZ format.
     */
    #[JsonProperty('current_time')]
    public string $currentTime;

    /**
     * @var float $currentTimeUnix Local time as Unix epoch seconds.
     */
    #[JsonProperty('current_time_unix')]
    public float $currentTimeUnix;

    /**
     * @var ?string $currentTzAbbreviation Current time zone abbreviation.
     */
    #[JsonProperty('current_tz_abbreviation')]
    public ?string $currentTzAbbreviation;

    /**
     * @var ?string $currentTzFullName Current time zone full name.
     */
    #[JsonProperty('current_tz_full_name')]
    public ?string $currentTzFullName;

    /**
     * @var ?string $standardTzAbbreviation Standard (non-DST) abbreviation.
     */
    #[JsonProperty('standard_tz_abbreviation')]
    public ?string $standardTzAbbreviation;

    /**
     * @var ?string $standardTzFullName Standard (non-DST) full name.
     */
    #[JsonProperty('standard_tz_full_name')]
    public ?string $standardTzFullName;

    /**
     * @var bool $isDst true if DST is active.
     */
    #[JsonProperty('is_dst')]
    public bool $isDst;

    /**
     * @var float $dstSavings DST shift amount in hours.
     */
    #[JsonProperty('dst_savings')]
    public float $dstSavings;

    /**
     * @var bool $dstExists true if the time zone observes DST.
     */
    #[JsonProperty('dst_exists')]
    public bool $dstExists;

    /**
     * @var ?string $dstTzAbbreviation DST abbreviation when DST is active.
     */
    #[JsonProperty('dst_tz_abbreviation')]
    public ?string $dstTzAbbreviation;

    /**
     * @var ?string $dstTzFullName DST full name when DST is active.
     */
    #[JsonProperty('dst_tz_full_name')]
    public ?string $dstTzFullName;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstStart $dstStart DST transition details (used for both the DST start and DST end transitions).
     */
    #[JsonProperty('dst_start')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstStart $dstStart;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstEnd $dstEnd DST transition details (used for both the DST start and DST end transitions).
     */
    #[JsonProperty('dst_end')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstEnd $dstEnd;

    /**
     * @param array{
     *   name: string,
     *   offset: float,
     *   offsetWithDst: float,
     *   currentTime: string,
     *   currentTimeUnix: float,
     *   isDst: bool,
     *   dstSavings: float,
     *   dstExists: bool,
     *   currentTzAbbreviation?: ?string,
     *   currentTzFullName?: ?string,
     *   standardTzAbbreviation?: ?string,
     *   standardTzFullName?: ?string,
     *   dstTzAbbreviation?: ?string,
     *   dstTzFullName?: ?string,
     *   dstStart?: ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstStart,
     *   dstEnd?: ?BulkGeolocationLookupV2ResponseItemAbuseTimeZoneDstEnd,
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
        $this->currentTzAbbreviation = $values['currentTzAbbreviation'] ?? null;
        $this->currentTzFullName = $values['currentTzFullName'] ?? null;
        $this->standardTzAbbreviation = $values['standardTzAbbreviation'] ?? null;
        $this->standardTzFullName = $values['standardTzFullName'] ?? null;
        $this->isDst = $values['isDst'];
        $this->dstSavings = $values['dstSavings'];
        $this->dstExists = $values['dstExists'];
        $this->dstTzAbbreviation = $values['dstTzAbbreviation'] ?? null;
        $this->dstTzFullName = $values['dstTzFullName'] ?? null;
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
