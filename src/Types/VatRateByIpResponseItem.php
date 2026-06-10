<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class VatRateByIpResponseItem extends JsonSerializableType
{
    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var float $standardRate
     */
    #[JsonProperty('standard_rate')]
    public float $standardRate;

    /**
     * @var array<float> $reducedRate
     */
    #[JsonProperty('reduced_rate'), ArrayType(['float'])]
    public array $reducedRate;

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
     * @var array<string, float> $categories
     */
    #[JsonProperty('categories'), ArrayType(['string' => 'float'])]
    public array $categories;

    /**
     * @param array{
     *   country: string,
     *   type: string,
     *   currency: string,
     *   standardRate: float,
     *   reducedRate: array<float>,
     *   categories: array<string, float>,
     *   superReducedRate?: ?array<float>,
     *   parkingRate?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->type = $values['type'];
        $this->currency = $values['currency'];
        $this->standardRate = $values['standardRate'];
        $this->reducedRate = $values['reducedRate'];
        $this->superReducedRate = $values['superReducedRate'] ?? null;
        $this->parkingRate = $values['parkingRate'] ?? null;
        $this->categories = $values['categories'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
