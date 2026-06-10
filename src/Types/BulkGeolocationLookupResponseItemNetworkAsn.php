<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkGeolocationLookupResponseItemNetworkAsn extends JsonSerializableType
{
    /**
     * @var ?string $asNumber The AS number
     */
    #[JsonProperty('as_number')]
    public ?string $asNumber;

    /**
     * @var ?string $organization The organization name
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $country The country code
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $asnName The ASN name
     */
    #[JsonProperty('asn_name')]
    public ?string $asnName;

    /**
     * @var ?string $type The type of the ASN
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $domain The domain associated with the ASN
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $dateAllocated The date when the ASN was allocated
     */
    #[JsonProperty('date_allocated')]
    public ?string $dateAllocated;

    /**
     * @var ?string $allocationStatus The allocation status of the ASN
     */
    #[JsonProperty('allocation_status')]
    public ?string $allocationStatus;

    /**
     * @var ?string $numOfIpv4Routes The number of IPv4 routes associated with the ASN
     */
    #[JsonProperty('num_of_ipv4_routes')]
    public ?string $numOfIpv4Routes;

    /**
     * @var ?string $numOfIpv6Routes The number of IPv6 routes associated with the ASN
     */
    #[JsonProperty('num_of_ipv6_routes')]
    public ?string $numOfIpv6Routes;

    /**
     * @var ?string $rir The Regional Internet Registry (RIR) of the ASN
     */
    #[JsonProperty('rir')]
    public ?string $rir;

    /**
     * @param array{
     *   asNumber?: ?string,
     *   organization?: ?string,
     *   country?: ?string,
     *   asnName?: ?string,
     *   type?: ?string,
     *   domain?: ?string,
     *   dateAllocated?: ?string,
     *   allocationStatus?: ?string,
     *   numOfIpv4Routes?: ?string,
     *   numOfIpv6Routes?: ?string,
     *   rir?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asNumber = $values['asNumber'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->asnName = $values['asnName'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->domain = $values['domain'] ?? null;
        $this->dateAllocated = $values['dateAllocated'] ?? null;
        $this->allocationStatus = $values['allocationStatus'] ?? null;
        $this->numOfIpv4Routes = $values['numOfIpv4Routes'] ?? null;
        $this->numOfIpv6Routes = $values['numOfIpv6Routes'] ?? null;
        $this->rir = $values['rir'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
