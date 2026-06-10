<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkGeolocationLookupResponseItem extends JsonSerializableType
{
    /**
     * @var ?string $ip The IP address
     */
    #[JsonProperty('ip')]
    public ?string $ip;

    /**
     * @var ?string $hostname The hostname (if available)
     */
    #[JsonProperty('hostname')]
    public ?string $hostname;

    /**
     * @var ?BulkGeolocationLookupResponseItemLocation $location
     */
    #[JsonProperty('location')]
    public ?BulkGeolocationLookupResponseItemLocation $location;

    /**
     * @var ?BulkGeolocationLookupResponseItemCountryMetadata $countryMetadata
     */
    #[JsonProperty('country_metadata')]
    public ?BulkGeolocationLookupResponseItemCountryMetadata $countryMetadata;

    /**
     * @var ?BulkGeolocationLookupResponseItemNetwork $network
     */
    #[JsonProperty('network')]
    public ?BulkGeolocationLookupResponseItemNetwork $network;

    /**
     * @var ?BulkGeolocationLookupResponseItemCurrency $currency
     */
    #[JsonProperty('currency')]
    public ?BulkGeolocationLookupResponseItemCurrency $currency;

    /**
     * @var ?BulkGeolocationLookupResponseItemSecurity $security
     */
    #[JsonProperty('security')]
    public ?BulkGeolocationLookupResponseItemSecurity $security;

    /**
     * @var ?array<BulkGeolocationLookupResponseItemAbuseItem> $abuse
     */
    #[JsonProperty('abuse'), ArrayType([BulkGeolocationLookupResponseItemAbuseItem::class])]
    public ?array $abuse;

    /**
     * @var ?BulkGeolocationLookupResponseItemTimeZone $timeZone
     */
    #[JsonProperty('time_zone')]
    public ?BulkGeolocationLookupResponseItemTimeZone $timeZone;

    /**
     * @var ?BulkGeolocationLookupResponseItemUserAgent $userAgent
     */
    #[JsonProperty('user_agent')]
    public ?BulkGeolocationLookupResponseItemUserAgent $userAgent;

    /**
     * @param array{
     *   ip?: ?string,
     *   hostname?: ?string,
     *   location?: ?BulkGeolocationLookupResponseItemLocation,
     *   countryMetadata?: ?BulkGeolocationLookupResponseItemCountryMetadata,
     *   network?: ?BulkGeolocationLookupResponseItemNetwork,
     *   currency?: ?BulkGeolocationLookupResponseItemCurrency,
     *   security?: ?BulkGeolocationLookupResponseItemSecurity,
     *   abuse?: ?array<BulkGeolocationLookupResponseItemAbuseItem>,
     *   timeZone?: ?BulkGeolocationLookupResponseItemTimeZone,
     *   userAgent?: ?BulkGeolocationLookupResponseItemUserAgent,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ip = $values['ip'] ?? null;
        $this->hostname = $values['hostname'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->countryMetadata = $values['countryMetadata'] ?? null;
        $this->network = $values['network'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->security = $values['security'] ?? null;
        $this->abuse = $values['abuse'] ?? null;
        $this->timeZone = $values['timeZone'] ?? null;
        $this->userAgent = $values['userAgent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
