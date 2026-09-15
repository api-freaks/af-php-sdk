<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailResponseItemAddress extends JsonSerializableType
{
    /**
     * @var ?BulkEmailValidateResponseEmailResponseItemAddressSecurity $security
     */
    #[JsonProperty('security')]
    public ?BulkEmailValidateResponseEmailResponseItemAddressSecurity $security;

    /**
     * @var ?BulkEmailValidateResponseEmailResponseItemAddressLocation $location
     */
    #[JsonProperty('location')]
    public ?BulkEmailValidateResponseEmailResponseItemAddressLocation $location;

    /**
     * @var ?bool $validIpAddress
     */
    #[JsonProperty('validIpAddress')]
    public ?bool $validIpAddress;

    /**
     * @param array{
     *   security?: ?BulkEmailValidateResponseEmailResponseItemAddressSecurity,
     *   location?: ?BulkEmailValidateResponseEmailResponseItemAddressLocation,
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
