<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GeolocationLookupResponseCountryMetadata extends JsonSerializableType
{
    /**
     * @var ?string $callingCode The calling code of the country
     */
    #[JsonProperty('calling_code')]
    public ?string $callingCode;

    /**
     * @var ?string $tld The top level domain of the country
     */
    #[JsonProperty('tld')]
    public ?string $tld;

    /**
     * @var ?array<string> $languages The languages spoken in the country
     */
    #[JsonProperty('languages'), ArrayType(['string'])]
    public ?array $languages;

    /**
     * @param array{
     *   callingCode?: ?string,
     *   tld?: ?string,
     *   languages?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->callingCode = $values['callingCode'] ?? null;
        $this->tld = $values['tld'] ?? null;
        $this->languages = $values['languages'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
