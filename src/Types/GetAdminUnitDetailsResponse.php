<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Detailed information for a single administrative unit.
 */
class GetAdminUnitDetailsResponse extends JsonSerializableType
{
    /**
     * @var string $name Name of the administrative unit.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $adminCode Administrative code of the unit.
     */
    #[JsonProperty('admin_code')]
    public string $adminCode;

    /**
     * @var ?string $adminIso31662 The unit's full ISO 3166-2 code, formed as {country}-{admin_code} (e.g. US-CA, DE-BY).
     */
    #[JsonProperty('admin_iso3166_2')]
    public ?string $adminIso31662;

    /**
     * @var string $adminLevel Level or type of the administrative unit (e.g. land, province, state).
     */
    #[JsonProperty('admin_level')]
    public string $adminLevel;

    /**
     * @var string $countryIso31662 Country code in ISO 3166-1 alpha-2 format.
     */
    #[JsonProperty('country_iso3166_2')]
    public string $countryIso31662;

    /**
     * @var string $countryName Name of the country.
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @param array{
     *   name: string,
     *   adminCode: string,
     *   adminLevel: string,
     *   countryIso31662: string,
     *   countryName: string,
     *   adminIso31662?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->adminCode = $values['adminCode'];
        $this->adminIso31662 = $values['adminIso31662'] ?? null;
        $this->adminLevel = $values['adminLevel'];
        $this->countryIso31662 = $values['countryIso31662'];
        $this->countryName = $values['countryName'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
