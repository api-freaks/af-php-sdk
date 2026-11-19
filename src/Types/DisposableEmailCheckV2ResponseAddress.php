<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geolocation and security enrichment data for the IP address.
 */
class DisposableEmailCheckV2ResponseAddress extends JsonSerializableType
{
    /**
     * @var ?bool $validIpAddress IP recognized/reachable by the geolocation provider.
     */
    #[JsonProperty('validIpAddress')]
    public ?bool $validIpAddress;

    /**
     * @var ?DisposableEmailCheckV2ResponseAddressLocation $location Geolocation data derived from the IP address.
     */
    #[JsonProperty('location')]
    public ?DisposableEmailCheckV2ResponseAddressLocation $location;

    /**
     * @var ?DisposableEmailCheckV2ResponseAddressSecurity $security Threat and anonymity profile for the IP address.
     */
    #[JsonProperty('security')]
    public ?DisposableEmailCheckV2ResponseAddressSecurity $security;

    /**
     * @param array{
     *   validIpAddress?: ?bool,
     *   location?: ?DisposableEmailCheckV2ResponseAddressLocation,
     *   security?: ?DisposableEmailCheckV2ResponseAddressSecurity,
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
