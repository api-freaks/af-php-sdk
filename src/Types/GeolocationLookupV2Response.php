<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class GeolocationLookupV2Response extends JsonSerializableType
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
     * @var ?GeolocationLookupV2ResponseLocation $location Geographic location information for the IP.
     */
    #[JsonProperty('location')]
    public ?GeolocationLookupV2ResponseLocation $location;

    /**
     * @var ?GeolocationLookupV2ResponseCountryMetadata $countryMetadata Country-specific metadata.
     */
    #[JsonProperty('country_metadata')]
    public ?GeolocationLookupV2ResponseCountryMetadata $countryMetadata;

    /**
     * @var ?GeolocationLookupV2ResponseNetwork $network Network information for the IP.
     */
    #[JsonProperty('network')]
    public ?GeolocationLookupV2ResponseNetwork $network;

    /**
     * @var ?GeolocationLookupV2ResponseAsn $asn Autonomous System details for the IP.
     */
    #[JsonProperty('asn')]
    public ?GeolocationLookupV2ResponseAsn $asn;

    /**
     * @var ?GeolocationLookupV2ResponseCompany $company Company or ISP information mapped to the IP address.
     */
    #[JsonProperty('company')]
    public ?GeolocationLookupV2ResponseCompany $company;

    /**
     * @var ?GeolocationLookupV2ResponseCurrency $currency Currency information for the IP's country.
     */
    #[JsonProperty('currency')]
    public ?GeolocationLookupV2ResponseCurrency $currency;

    /**
     * @var ?GeolocationLookupV2ResponseSecurity $security Threat intelligence and security information for the IP.
     */
    #[JsonProperty('security')]
    public ?GeolocationLookupV2ResponseSecurity $security;

    /**
     * @var ?GeolocationLookupV2ResponseAbuse $abuse Abuse contact information for the IP.
     */
    #[JsonProperty('abuse')]
    public ?GeolocationLookupV2ResponseAbuse $abuse;

    /**
     * @var ?GeolocationLookupV2ResponseTimeZone $timeZone Time zone information for the IP's location.
     */
    #[JsonProperty('time_zone')]
    public ?GeolocationLookupV2ResponseTimeZone $timeZone;

    /**
     * @var ?GeolocationLookupV2ResponseUserAgent $userAgent Parsed User-Agent details from the request.
     */
    #[JsonProperty('user_agent')]
    public ?GeolocationLookupV2ResponseUserAgent $userAgent;

    /**
     * @param array{
     *   ip: string,
     *   domain?: ?string,
     *   hostname?: ?string,
     *   location?: ?GeolocationLookupV2ResponseLocation,
     *   countryMetadata?: ?GeolocationLookupV2ResponseCountryMetadata,
     *   network?: ?GeolocationLookupV2ResponseNetwork,
     *   asn?: ?GeolocationLookupV2ResponseAsn,
     *   company?: ?GeolocationLookupV2ResponseCompany,
     *   currency?: ?GeolocationLookupV2ResponseCurrency,
     *   security?: ?GeolocationLookupV2ResponseSecurity,
     *   abuse?: ?GeolocationLookupV2ResponseAbuse,
     *   timeZone?: ?GeolocationLookupV2ResponseTimeZone,
     *   userAgent?: ?GeolocationLookupV2ResponseUserAgent,
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
