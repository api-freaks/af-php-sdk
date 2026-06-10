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
     * @var string $isoAlpha2
     */
    #[JsonProperty('iso_alpha_2')]
    public string $isoAlpha2;

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
     *   isoAlpha2: string,
     *   countryName: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->adminCode = $values['adminCode'];
        $this->adminLevel = $values['adminLevel'];
        $this->isoAlpha2 = $values['isoAlpha2'];
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
