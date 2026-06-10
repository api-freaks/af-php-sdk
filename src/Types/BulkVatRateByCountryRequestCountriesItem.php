<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkVatRateByCountryRequestCountriesItem extends JsonSerializableType
{
    /**
     * @var string $country Country identifier in Alpha-2 (US), Alpha-3 (USA), or full name (United_States). Pair with "state" for regional lookup; values are case-insensitive and may use underscores.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $state Optional state identifier in Alpha-2 (NY) or full name (New_York). Use with the country field for state-level VAT; values are case-insensitive and may use underscores.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @param array{
     *   country: string,
     *   state?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->state = $values['state'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
