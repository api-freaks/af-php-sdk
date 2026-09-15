<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Autonomous System details for the IP.
 */
class BulkGeolocationLookupV2ResponseItemAbuseAsn extends JsonSerializableType
{
    /**
     * @var ?string $asNumber ASN identifier in AS<number> format associated with the IP's network.
     */
    #[JsonProperty('as_number')]
    public ?string $asNumber;

    /**
     * @var ?string $organization ASN operator name.
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $country ASN registration country as ISO 3166-1 alpha-2.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $type ASN category (ISP, HOSTING, BUSINESS, etc.).
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $domain ASN operator domain name.
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $dateAllocated ASN allocation date in YYYY-MM-DD format.
     */
    #[JsonProperty('date_allocated')]
    public ?string $dateAllocated;

    /**
     * @var ?string $rir Regional Internet Registry that allocated the ASN.
     */
    #[JsonProperty('rir')]
    public ?string $rir;

    /**
     * @param array{
     *   asNumber?: ?string,
     *   organization?: ?string,
     *   country?: ?string,
     *   type?: ?string,
     *   domain?: ?string,
     *   dateAllocated?: ?string,
     *   rir?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asNumber = $values['asNumber'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->domain = $values['domain'] ?? null;
        $this->dateAllocated = $values['dateAllocated'] ?? null;
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
