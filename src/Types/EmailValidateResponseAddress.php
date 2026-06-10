<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class EmailValidateResponseAddress extends JsonSerializableType
{
    /**
     * @var ?EmailValidateResponseAddressSecurity $security
     */
    #[JsonProperty('security')]
    public ?EmailValidateResponseAddressSecurity $security;

    /**
     * @var ?EmailValidateResponseAddressLocation $location
     */
    #[JsonProperty('location')]
    public ?EmailValidateResponseAddressLocation $location;

    /**
     * @var ?bool $validIpAddress
     */
    #[JsonProperty('validIpAddress')]
    public ?bool $validIpAddress;

    /**
     * @param array{
     *   security?: ?EmailValidateResponseAddressSecurity,
     *   location?: ?EmailValidateResponseAddressLocation,
     *   validIpAddress?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->security = $values['security'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->validIpAddress = $values['validIpAddress'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
