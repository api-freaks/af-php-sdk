<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Countries and organizations that have flags available.
 */
class GetSupportedFlagsResponse extends JsonSerializableType
{
    /**
     * @var array<GetSupportedFlagsResponseSupportedCountriesItem> $supportedCountries Countries with a flag, each with its name and ISO 3166-1 alpha-2/alpha-3 codes.
     */
    #[JsonProperty('supported_countries'), ArrayType([GetSupportedFlagsResponseSupportedCountriesItem::class])]
    public array $supportedCountries;

    /**
     * @var array<string> $supportedOrganizations Identifiers of supported organizations, usable as the flag lookup key.
     */
    #[JsonProperty('supported_organizations'), ArrayType(['string'])]
    public array $supportedOrganizations;

    /**
     * @param array{
     *   supportedCountries: array<GetSupportedFlagsResponseSupportedCountriesItem>,
     *   supportedOrganizations: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->supportedCountries = $values['supportedCountries'];
        $this->supportedOrganizations = $values['supportedOrganizations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
