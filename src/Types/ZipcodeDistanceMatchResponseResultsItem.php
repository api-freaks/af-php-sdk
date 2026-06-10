<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ZipcodeDistanceMatchResponseResultsItem extends JsonSerializableType
{
    /**
     * @var ?string $code1 First ZIP/postal code in the pair
     */
    #[JsonProperty('code_1')]
    public ?string $code1;

    /**
     * @var ?string $code2 Second ZIP/postal code in the pair
     */
    #[JsonProperty('code_2')]
    public ?string $code2;

    /**
     * @var ?float $distance Distance between the ZIP/postal code pair
     */
    #[JsonProperty('distance')]
    public ?float $distance;

    /**
     * @param array{
     *   code1?: ?string,
     *   code2?: ?string,
     *   distance?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code1 = $values['code1'] ?? null;
        $this->code2 = $values['code2'] ?? null;
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
