<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class PhoneValidateResponse extends JsonSerializableType
{
    /**
     * @var ?PhoneValidateResponseRawInput $rawInput The original request data provided by the client.
     */
    #[JsonProperty('raw_input')]
    public ?PhoneValidateResponseRawInput $rawInput;

    /**
     * @var ?bool $possible Whether the number passes length and format checks.
     */
    #[JsonProperty('possible')]
    public ?bool $possible;

    /**
     * @var ?bool $valid Whether the number is valid according to the numbering plan.
     */
    #[JsonProperty('valid')]
    public ?bool $valid;

    /**
     * @var ?int $countryPrefix International dialing prefix for the number's country.
     */
    #[JsonProperty('country_prefix')]
    public ?int $countryPrefix;

    /**
     * @var ?int $nationalNumber National significant number without the country code.
     */
    #[JsonProperty('national_number')]
    public ?int $nationalNumber;

    /**
     * @var ?string $countryCode ISO-2 country code inferred from the number.
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $carrier Carrier name associated with the number.
     */
    #[JsonProperty('carrier')]
    public ?string $carrier;

    /**
     * @var ?string $location Geographic description (city/region) for the number.
     */
    #[JsonProperty('location')]
    public ?string $location;

    /**
     * @var ?array<string> $timeZones Array of possible IANA time zones associated with the number.
     */
    #[JsonProperty('time_zones'), ArrayType(['string'])]
    public ?array $timeZones;

    /**
     * @var ?value-of<PhoneValidateResponseLineType> $lineType Classification of the phone line.
     */
    #[JsonProperty('line_type')]
    public ?string $lineType;

    /**
     * @var ?PhoneValidateResponseFormats $formats The number represented in four standardized formats. Only returned for valid numbers.
     */
    #[JsonProperty('formats')]
    public ?PhoneValidateResponseFormats $formats;

    /**
     * @var ?int $areaCodeLength Length of the geographic area code. Only for geographically-assigned numbers.
     */
    #[JsonProperty('area_code_length')]
    public ?int $areaCodeLength;

    /**
     * @var ?int $ndcLength Length of the National Destination Code.
     */
    #[JsonProperty('ndc_length')]
    public ?int $ndcLength;

    /**
     * @var ?bool $canBeInternationallyDialled Whether the number can be dialled internationally.
     */
    #[JsonProperty('can_be_internationally_dialled')]
    public ?bool $canBeInternationallyDialled;

    /**
     * @param array{
     *   rawInput?: ?PhoneValidateResponseRawInput,
     *   possible?: ?bool,
     *   valid?: ?bool,
     *   countryPrefix?: ?int,
     *   nationalNumber?: ?int,
     *   countryCode?: ?string,
     *   carrier?: ?string,
     *   location?: ?string,
     *   timeZones?: ?array<string>,
     *   lineType?: ?value-of<PhoneValidateResponseLineType>,
     *   formats?: ?PhoneValidateResponseFormats,
     *   areaCodeLength?: ?int,
     *   ndcLength?: ?int,
     *   canBeInternationallyDialled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->rawInput = $values['rawInput'] ?? null;
        $this->possible = $values['possible'] ?? null;
        $this->valid = $values['valid'] ?? null;
        $this->countryPrefix = $values['countryPrefix'] ?? null;
        $this->nationalNumber = $values['nationalNumber'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->carrier = $values['carrier'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->timeZones = $values['timeZones'] ?? null;
        $this->lineType = $values['lineType'] ?? null;
        $this->formats = $values['formats'] ?? null;
        $this->areaCodeLength = $values['areaCodeLength'] ?? null;
        $this->ndcLength = $values['ndcLength'] ?? null;
        $this->canBeInternationallyDialled = $values['canBeInternationallyDialled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
