<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * The original request data provided by the client.
 */
class BulkPhoneValidateResponseItemRawInput extends JsonSerializableType
{
    /**
     * @var ?string $number The phone number as entered by the user.
     */
    #[JsonProperty('number')]
    public ?string $number;

    /**
     * @var ?string $region ISO-2 country code if provided in the request.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $dialerRegion ISO-2 dialing origin country code if provided.
     */
    #[JsonProperty('dialer_region')]
    public ?string $dialerRegion;

    /**
     * @param array{
     *   number?: ?string,
     *   region?: ?string,
     *   dialerRegion?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->number = $values['number'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->dialerRegion = $values['dialerRegion'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
