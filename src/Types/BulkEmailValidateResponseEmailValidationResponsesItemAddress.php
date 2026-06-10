<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailValidationResponsesItemAddress extends JsonSerializableType
{
    /**
     * @var ?BulkEmailValidateResponseEmailValidationResponsesItemAddressSecurity $security
     */
    #[JsonProperty('security')]
    public ?BulkEmailValidateResponseEmailValidationResponsesItemAddressSecurity $security;

    /**
     * @var ?BulkEmailValidateResponseEmailValidationResponsesItemAddressLocation $location
     */
    #[JsonProperty('location')]
    public ?BulkEmailValidateResponseEmailValidationResponsesItemAddressLocation $location;

    /**
     * @var ?bool $validIpAddress
     */
    #[JsonProperty('validIpAddress')]
    public ?bool $validIpAddress;

    /**
     * @param array{
     *   security?: ?BulkEmailValidateResponseEmailValidationResponsesItemAddressSecurity,
     *   location?: ?BulkEmailValidateResponseEmailValidationResponsesItemAddressLocation,
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
