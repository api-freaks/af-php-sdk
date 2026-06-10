<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class AsnWhoisLookupResponseDownstreamsItem extends JsonSerializableType
{
    /**
     * @var ?string $asNumber
     */
    #[JsonProperty('asNumber')]
    public ?string $asNumber;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @param array{
     *   asNumber?: ?string,
     *   description?: ?string,
     *   country?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asNumber = $values['asNumber'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->country = $values['country'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
