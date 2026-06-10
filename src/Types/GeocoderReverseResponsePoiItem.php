<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeocoderReverseResponsePoiItem extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the POI of the searched place.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $category Category of the POI, e.g. amenity, place, natural, building, highway.
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?string $type Specific type of the category for the POI, e.g. fast_food, city, park, residential, house_number.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   name?: ?string,
     *   category?: ?string,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->category = $values['category'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
