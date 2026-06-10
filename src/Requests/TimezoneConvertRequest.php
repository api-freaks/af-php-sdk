<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\TimezoneConvertRequestFormat;

class TimezoneConvertRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<TimezoneConvertRequestFormat> $format Format of the response .
     */
    public ?string $format;

    /**
     * @var ?string $time Time to convert in `yyyy-MM-dd HH:mm` or `yyyy-MM-dd HH:mm:ss` format.
     */
    public ?string $time;

    /**
     * @var ?string $tzFrom Source timezone name (e.g., `Asia/Kolkata`).
     */
    public ?string $tzFrom;

    /**
     * @var ?string $tzTo Target timezone name (e.g., `America/New_York`).
     */
    public ?string $tzTo;

    /**
     * @var ?float $latFrom Latitude of source location.
     */
    public ?float $latFrom;

    /**
     * @var ?float $longFrom Longitude of source location.
     */
    public ?float $longFrom;

    /**
     * @var ?float $latTo Latitude of target location.
     */
    public ?float $latTo;

    /**
     * @var ?float $longTo Longitude of target location.
     */
    public ?float $longTo;

    /**
     * @var ?string $locationFrom From location (city/country).
     */
    public ?string $locationFrom;

    /**
     * @var ?string $locationTo To location (city/country).
     */
    public ?string $locationTo;

    /**
     * @var ?string $iataFrom From IATA airport code (e.g., JFK).
     */
    public ?string $iataFrom;

    /**
     * @var ?string $iataTo To IATA airport code.
     */
    public ?string $iataTo;

    /**
     * @var ?string $icaoFrom From ICAO airport code (e.g., KJFK).
     */
    public ?string $icaoFrom;

    /**
     * @var ?string $icaoTo To ICAO airport code.
     */
    public ?string $icaoTo;

    /**
     * @var ?string $locodeFrom From UN/LO CODE.
     */
    public ?string $locodeFrom;

    /**
     * @var ?string $locodeTo To UN/LO CODE.
     */
    public ?string $locodeTo;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<TimezoneConvertRequestFormat>,
     *   time?: ?string,
     *   tzFrom?: ?string,
     *   tzTo?: ?string,
     *   latFrom?: ?float,
     *   longFrom?: ?float,
     *   latTo?: ?float,
     *   longTo?: ?float,
     *   locationFrom?: ?string,
     *   locationTo?: ?string,
     *   iataFrom?: ?string,
     *   iataTo?: ?string,
     *   icaoFrom?: ?string,
     *   icaoTo?: ?string,
     *   locodeFrom?: ?string,
     *   locodeTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->time = $values['time'] ?? null;
        $this->tzFrom = $values['tzFrom'] ?? null;
        $this->tzTo = $values['tzTo'] ?? null;
        $this->latFrom = $values['latFrom'] ?? null;
        $this->longFrom = $values['longFrom'] ?? null;
        $this->latTo = $values['latTo'] ?? null;
        $this->longTo = $values['longTo'] ?? null;
        $this->locationFrom = $values['locationFrom'] ?? null;
        $this->locationTo = $values['locationTo'] ?? null;
        $this->iataFrom = $values['iataFrom'] ?? null;
        $this->iataTo = $values['iataTo'] ?? null;
        $this->icaoFrom = $values['icaoFrom'] ?? null;
        $this->icaoTo = $values['icaoTo'] ?? null;
        $this->locodeFrom = $values['locodeFrom'] ?? null;
        $this->locodeTo = $values['locodeTo'] ?? null;
    }
}
