<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ZipcodeDistanceResponseResultsItem extends JsonSerializableType
{
    /**
     * @var ?string $code ZIP/postal code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?float $distance Distance from the base ZIP/postal code
     */
    #[JsonProperty('distance')]
    public ?float $distance;

    /**
     * @param array{
     *   code?: ?string,
     *   distance?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->distance = $values['distance'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
