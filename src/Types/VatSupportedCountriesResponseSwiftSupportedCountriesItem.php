<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A single country supported by the SWIFT/BIC Code Lookup and Finder APIs.
 */
class VatSupportedCountriesResponseSwiftSupportedCountriesItem extends JsonSerializableType
{
    /**
     * @var string $name Full country name.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $countryCode ISO 3166-1 alpha-2 country code.
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @param array{
     *   name: string,
     *   countryCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->countryCode = $values['countryCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
