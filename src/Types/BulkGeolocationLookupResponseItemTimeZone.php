<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkGeolocationLookupResponseItemTimeZone extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $offset
     */
    #[JsonProperty('offset')]
    public ?float $offset;

    /**
     * @var ?float $offsetWithDst
     */
    #[JsonProperty('offset_with_dst')]
    public ?float $offsetWithDst;

    /**
     * @var ?string $currentTime
     */
    #[JsonProperty('current_time')]
    public ?string $currentTime;

    /**
     * @var ?float $currentTimeUnix
     */
    #[JsonProperty('current_time_unix')]
    public ?float $currentTimeUnix;

    /**
     * @var ?string $currentTzAbbreviation
     */
    #[JsonProperty('current_tz_abbreviation')]
    public ?string $currentTzAbbreviation;

    /**
     * @var ?string $currentTzFullName
     */
    #[JsonProperty('current_tz_full_name')]
    public ?string $currentTzFullName;

    /**
     * @var ?string $standardTzAbbreviation
     */
    #[JsonProperty('standard_tz_abbreviation')]
    public ?string $standardTzAbbreviation;

    /**
     * @var ?string $standardTzFullName
     */
    #[JsonProperty('standard_tz_full_name')]
    public ?string $standardTzFullName;

    /**
     * @var ?bool $isDst
     */
    #[JsonProperty('is_dst')]
    public ?bool $isDst;

    /**
     * @var ?float $dstSavings
     */
    #[JsonProperty('dst_savings')]
    public ?float $dstSavings;

    /**
     * @var ?bool $dstExists
     */
    #[JsonProperty('dst_exists')]
    public ?bool $dstExists;

    /**
     * @var ?string $dstTzAbbreviation
     */
    #[JsonProperty('dst_tz_abbreviation')]
    public ?string $dstTzAbbreviation;

    /**
     * @var ?string $dstTzFullName
     */
    #[JsonProperty('dst_tz_full_name')]
    public ?string $dstTzFullName;

    /**
     * @var ?BulkGeolocationLookupResponseItemTimeZoneDstStart $dstStart
     */
    #[JsonProperty('dst_start')]
    public ?BulkGeolocationLookupResponseItemTimeZoneDstStart $dstStart;

    /**
     * @var ?BulkGeolocationLookupResponseItemTimeZoneDstEnd $dstEnd
     */
    #[JsonProperty('dst_end')]
    public ?BulkGeolocationLookupResponseItemTimeZoneDstEnd $dstEnd;

    /**
     * @param array{
     *   name?: ?string,
     *   offset?: ?float,
     *   offsetWithDst?: ?float,
     *   currentTime?: ?string,
     *   currentTimeUnix?: ?float,
     *   currentTzAbbreviation?: ?string,
     *   currentTzFullName?: ?string,
     *   standardTzAbbreviation?: ?string,
     *   standardTzFullName?: ?string,
     *   isDst?: ?bool,
     *   dstSavings?: ?float,
     *   dstExists?: ?bool,
     *   dstTzAbbreviation?: ?string,
     *   dstTzFullName?: ?string,
     *   dstStart?: ?BulkGeolocationLookupResponseItemTimeZoneDstStart,
     *   dstEnd?: ?BulkGeolocationLookupResponseItemTimeZoneDstEnd,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->offsetWithDst = $values['offsetWithDst'] ?? null;
        $this->currentTime = $values['currentTime'] ?? null;
        $this->currentTimeUnix = $values['currentTimeUnix'] ?? null;
        $this->currentTzAbbreviation = $values['currentTzAbbreviation'] ?? null;
        $this->currentTzFullName = $values['currentTzFullName'] ?? null;
        $this->standardTzAbbreviation = $values['standardTzAbbreviation'] ?? null;
        $this->standardTzFullName = $values['standardTzFullName'] ?? null;
        $this->isDst = $values['isDst'] ?? null;
        $this->dstSavings = $values['dstSavings'] ?? null;
        $this->dstExists = $values['dstExists'] ?? null;
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
