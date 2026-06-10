<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetAdminUnitsResponse extends JsonSerializableType
{
    /**
     * @var array<GetAdminUnitsResponseAdminUnitsItem> $adminUnits
     */
    #[JsonProperty('admin_units'), ArrayType([GetAdminUnitsResponseAdminUnitsItem::class])]
    public array $adminUnits;

    /**
     * @param array{
     *   adminUnits: array<GetAdminUnitsResponseAdminUnitsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->adminUnits = $values['adminUnits'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
