<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A single country supported by the IBAN Validation API.
 */
class VatSupportedCountriesResponseIbanSupportedCountriesItem extends JsonSerializableType
{
    /**
     * @var string $countryCode ISO 3166-1 alpha-2 country code.
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $name Full country name.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   countryCode: string,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
