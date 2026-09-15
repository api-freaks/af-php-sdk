<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Geolocation and threat intelligence result for one successfully resolved IP address.
 */
class BulkGeolocationLookupV2ResponseItemAbuse extends JsonSerializableType
{
    /**
     * @var string $ip The IP address used for the lookup (IPv4 or IPv6).
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * @var ?string $domain The input domain, returned only for domain-based lookups.
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $hostname Reverse DNS hostname (PTR) for the input IP; returns the input IP if not resolvable.
     */
    #[JsonProperty('hostname')]
    public ?string $hostname;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseLocation $location Geographic location information for the IP.
     */
    #[JsonProperty('location')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseLocation $location;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseCountryMetadata $countryMetadata Country-specific metadata.
     */
    #[JsonProperty('country_metadata')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseCountryMetadata $countryMetadata;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseNetwork $network Network information for the IP.
     */
    #[JsonProperty('network')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseNetwork $network;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseAsn $asn Autonomous System details for the IP.
     */
    #[JsonProperty('asn')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseAsn $asn;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseCompany $company Company or ISP information mapped to the IP address.
     */
    #[JsonProperty('company')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseCompany $company;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseCurrency $currency Currency information for the IP's country.
     */
    #[JsonProperty('currency')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseCurrency $currency;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseSecurity $security Threat intelligence and security information for the IP.
     */
    #[JsonProperty('security')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseSecurity $security;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseAbuse $abuse Abuse contact information for the IP.
     */
    #[JsonProperty('abuse')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseAbuse $abuse;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseTimeZone $timeZone Time zone information for the IP's location.
     */
    #[JsonProperty('time_zone')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseTimeZone $timeZone;

    /**
     * @var ?BulkGeolocationLookupV2ResponseItemAbuseUserAgent $userAgent Parsed User-Agent details from the request.
     */
    #[JsonProperty('user_agent')]
    public ?BulkGeolocationLookupV2ResponseItemAbuseUserAgent $userAgent;

    /**
     * @param array{
     *   ip: string,
     *   domain?: ?string,
     *   hostname?: ?string,
     *   location?: ?BulkGeolocationLookupV2ResponseItemAbuseLocation,
     *   countryMetadata?: ?BulkGeolocationLookupV2ResponseItemAbuseCountryMetadata,
     *   network?: ?BulkGeolocationLookupV2ResponseItemAbuseNetwork,
     *   asn?: ?BulkGeolocationLookupV2ResponseItemAbuseAsn,
     *   company?: ?BulkGeolocationLookupV2ResponseItemAbuseCompany,
     *   currency?: ?BulkGeolocationLookupV2ResponseItemAbuseCurrency,
     *   security?: ?BulkGeolocationLookupV2ResponseItemAbuseSecurity,
     *   abuse?: ?BulkGeolocationLookupV2ResponseItemAbuseAbuse,
     *   timeZone?: ?BulkGeolocationLookupV2ResponseItemAbuseTimeZone,
     *   userAgent?: ?BulkGeolocationLookupV2ResponseItemAbuseUserAgent,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'];
        $this->domain = $values['domain'] ?? null;
        $this->hostname = $values['hostname'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->countryMetadata = $values['countryMetadata'] ?? null;
        $this->network = $values['network'] ?? null;
        $this->asn = $values['asn'] ?? null;
        $this->company = $values['company'] ?? null;
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
