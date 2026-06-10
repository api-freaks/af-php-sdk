<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkVatRateByCountryResponseCountriesItem extends JsonSerializableType
{
    /**
     * @var string $country Country identifier in Alpha-2 (US), Alpha-3 (USA), or full name (United_States). Case-insensitive and may use underscores.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $state Optional state identifier in Alpha-2 (NY) or full name (New_York). Required only for state-level taxation. Case-insensitive and may use underscores.
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $type Tax type applied for the country or state. Possible values include vat or none.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $currency ISO 4217 currency code.
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?float $standardRate Standard VAT or sales tax rate. Zero indicates no tax.
     */
    #[JsonProperty('standard_rate')]
    public ?float $standardRate;

    /**
     * @var ?array<float> $reducedRate Optional reduced VAT rates applicable in the country.
     */
    #[JsonProperty('reduced_rate'), ArrayType(['float'])]
    public ?array $reducedRate;

    /**
     * @var ?array<float> $superReducedRate Optional super-reduced VAT rates applicable in specific categories.
     */
    #[JsonProperty('super_reduced_rate'), ArrayType(['float'])]
    public ?array $superReducedRate;

    /**
     * @var ?float $parkingRate
     */
    #[JsonProperty('parking_rate')]
    public ?float $parkingRate;

    /**
     * @var ?array<string, float> $categories Optional category-wise VAT rates.
     */
    #[JsonProperty('categories'), ArrayType(['string' => 'float'])]
    public ?array $categories;

    /**
     * @param array{
     *   country: string,
     *   state?: ?string,
     *   type?: ?string,
     *   currency?: ?string,
     *   standardRate?: ?float,
     *   reducedRate?: ?array<float>,
     *   superReducedRate?: ?array<float>,
     *   parkingRate?: ?float,
     *   categories?: ?array<string, float>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->state = $values['state'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->standardRate = $values['standardRate'] ?? null;
        $this->reducedRate = $values['reducedRate'] ?? null;
        $this->superReducedRate = $values['superReducedRate'] ?? null;
        $this->parkingRate = $values['parkingRate'] ?? null;
        $this->categories = $values['categories'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
