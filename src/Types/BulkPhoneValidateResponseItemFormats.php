<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * The number represented in four standardized formats. Only returned for valid numbers.
 */
class BulkPhoneValidateResponseItemFormats extends JsonSerializableType
{
    /**
     * @var ?string $e164 E.164 format for storage and APIs.
     */
    #[JsonProperty('E164')]
    public ?string $e164;

    /**
     * @var ?string $international Human-readable international format.
     */
    #[JsonProperty('International')]
    public ?string $international;

    /**
     * @var ?string $national Local format as dialed within the country.
     */
    #[JsonProperty('National')]
    public ?string $national;

    /**
     * @var ?string $rfc3966 URI format for tel: links.
     */
    #[JsonProperty('RFC3966')]
    public ?string $rfc3966;

    /**
     * @param array{
     *   e164?: ?string,
     *   international?: ?string,
     *   national?: ?string,
     *   rfc3966?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->e164 = $values['e164'] ?? null;
        $this->international = $values['international'] ?? null;
        $this->national = $values['national'] ?? null;
        $this->rfc3966 = $values['rfc3966'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
