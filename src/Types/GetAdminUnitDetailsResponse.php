<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetAdminUnitDetailsResponse extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $adminCode
     */
    #[JsonProperty('admin_code')]
    public string $adminCode;

    /**
     * @var string $adminLevel
     */
    #[JsonProperty('admin_level')]
    public string $adminLevel;

    /**
     * @var string $adminIso31662
     */
    #[JsonProperty('admin_iso3166_2')]
    public string $adminIso31662;

    /**
     * @var string $countryIso31662
     */
    #[JsonProperty('country_iso3166_2')]
    public string $countryIso31662;

    /**
     * @var string $countryName
     */
    #[JsonProperty('country_name')]
    public string $countryName;

    /**
     * @param array{
     *   name: string,
     *   adminCode: string,
     *   adminLevel: string,
     *   adminIso31662: string,
     *   countryIso31662: string,
     *   countryName: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->adminCode = $values['adminCode'];
        $this->adminLevel = $values['adminLevel'];
        $this->adminIso31662 = $values['adminIso31662'];
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
