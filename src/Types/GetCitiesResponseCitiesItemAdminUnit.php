<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetCitiesResponseCitiesItemAdminUnit extends JsonSerializableType
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
     * @param array{
     *   name: string,
     *   adminCode: string,
     *   adminLevel: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->adminCode = $values['adminCode'];
        $this->adminLevel = $values['adminLevel'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
