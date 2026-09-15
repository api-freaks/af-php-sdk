<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Currency information for the IP's country.
 */
class GeolocationLookupV2ResponseCurrency extends JsonSerializableType
{
    /**
     * @var ?string $code Currency code (ISO 4217).
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $name Currency name (ISO 4217).
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $symbol Currency symbol.
     */
    #[JsonProperty('symbol')]
    public ?string $symbol;

    /**
     * @param array{
     *   code?: ?string,
     *   name?: ?string,
     *   symbol?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->symbol = $values['symbol'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
