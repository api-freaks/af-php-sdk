<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GetSupportedFlagsResponseItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $iso2
     */
    #[JsonProperty('iso2')]
    public string $iso2;

    /**
     * @var string $iso3
     */
    #[JsonProperty('iso3')]
    public string $iso3;

    /**
     * @param array{
     *   name: string,
     *   iso2: string,
     *   iso3: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->iso2 = $values['iso2'];
        $this->iso3 = $values['iso3'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
