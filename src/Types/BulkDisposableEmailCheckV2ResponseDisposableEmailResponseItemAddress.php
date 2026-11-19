<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geolocation and security enrichment data for the IP address.
 */
class BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddress extends JsonSerializableType
{
    /**
     * @var ?bool $validIpAddress IP recognized/reachable by the geolocation provider.
     */
    #[JsonProperty('validIpAddress')]
    public ?bool $validIpAddress;

    /**
     * @var ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressLocation $location Geolocation data derived from the IP address.
     */
    #[JsonProperty('location')]
    public ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressLocation $location;

    /**
     * @var ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressSecurity $security Threat and anonymity profile for the IP address.
     */
    #[JsonProperty('security')]
    public ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressSecurity $security;

    /**
     * @param array{
     *   validIpAddress?: ?bool,
     *   location?: ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressLocation,
     *   security?: ?BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItemAddressSecurity,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->validIpAddress = $values['validIpAddress'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->security = $values['security'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
