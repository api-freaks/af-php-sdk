<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkPhoneValidateRequestNumbersItem extends JsonSerializableType
{
    /**
     * @var string $number Phone number to validate.
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var ?string $region Two-letter ISO country code. Required for local format numbers. Cannot be used together with dialer_region.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $dialerRegion Two-letter ISO country code of the dialing origin. Required for IDD format numbers. Cannot be used together with region.
     */
    #[JsonProperty('dialer_region')]
    public ?string $dialerRegion;

    /**
     * @param array{
     *   number: string,
     *   region?: ?string,
     *   dialerRegion?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->number = $values['number'];
        $this->region = $values['region'] ?? null;
        $this->dialerRegion = $values['dialerRegion'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
