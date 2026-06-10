<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetAdminLevelsResponse extends JsonSerializableType
{
    /**
     * @var array<string> $adminLevels
     */
    #[JsonProperty('admin_levels'), ArrayType(['string'])]
    public array $adminLevels;

    /**
     * @param array{
     *   adminLevels: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->adminLevels = $values['adminLevels'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
