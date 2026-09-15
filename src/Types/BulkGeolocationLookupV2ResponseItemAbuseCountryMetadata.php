<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Country-specific metadata.
 */
class BulkGeolocationLookupV2ResponseItemAbuseCountryMetadata extends JsonSerializableType
{
    /**
     * @var string $callingCode Calling code/Dialing code of the country.
     */
    #[JsonProperty('calling_code')]
    public string $callingCode;

    /**
     * @var string $tld Top Level Domain Name (TLD) of the country, which is also called ccTLD.
     */
    #[JsonProperty('tld')]
    public string $tld;

    /**
     * @var array<string> $languages List of the languages' codes, spoken in the country.
     */
    #[JsonProperty('languages'), ArrayType(['string'])]
    public array $languages;

    /**
     * @param array{
     *   callingCode: string,
     *   tld: string,
     *   languages: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->callingCode = $values['callingCode'];
        $this->tld = $values['tld'];
        $this->languages = $values['languages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
