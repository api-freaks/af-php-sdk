<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class VatSupportedCountriesResponseVatSupportedCountriesAndStatesItemValue extends JsonSerializableType
{
    /**
     * @var string $code ISO 3166-1 alpha-2 country code, lowercase.
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var ?array<string, string> $states Sub-national regions with their own VAT data, keyed by name (e.g. `california`: `us:ca`).
     */
    #[JsonProperty('states'), ArrayType(['string' => 'string'])]
    public ?array $states;

    /**
     * @param array{
     *   code: string,
     *   states?: ?array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->states = $values['states'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
