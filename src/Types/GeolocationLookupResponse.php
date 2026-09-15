<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GeolocationLookupResponse extends JsonSerializableType
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
     * @var ?GeolocationLookupResponseLocation $location
     */
    #[JsonProperty('location')]
    public ?GeolocationLookupResponseLocation $location;

    /**
     * @var ?GeolocationLookupResponseCountryMetadata $countryMetadata
     */
    #[JsonProperty('country_metadata')]
    public ?GeolocationLookupResponseCountryMetadata $countryMetadata;

    /**
     * @var ?GeolocationLookupResponseNetwork $network
     */
    #[JsonProperty('network')]
    public ?GeolocationLookupResponseNetwork $network;

    /**
     * @var ?GeolocationLookupResponseCurrency $currency
     */
    #[JsonProperty('currency')]
    public ?GeolocationLookupResponseCurrency $currency;

    /**
     * @var ?GeolocationLookupResponseSecurity $security
     */
    #[JsonProperty('security')]
    public ?GeolocationLookupResponseSecurity $security;

    /**
     * @var ?array<GeolocationLookupResponseAbuseItem> $abuse
     */
    #[JsonProperty('abuse'), ArrayType([GeolocationLookupResponseAbuseItem::class])]
    public ?array $abuse;

    /**
     * @var ?GeolocationLookupResponseTimeZone $timeZone
     */
    #[JsonProperty('time_zone')]
    public ?GeolocationLookupResponseTimeZone $timeZone;

    /**
     * @var ?GeolocationLookupResponseUserAgent $userAgent
     */
    #[JsonProperty('user_agent')]
    public ?GeolocationLookupResponseUserAgent $userAgent;

    /**
     * @param array{
     *   ip?: ?string,
     *   hostname?: ?string,
     *   location?: ?GeolocationLookupResponseLocation,
     *   countryMetadata?: ?GeolocationLookupResponseCountryMetadata,
     *   network?: ?GeolocationLookupResponseNetwork,
     *   currency?: ?GeolocationLookupResponseCurrency,
     *   security?: ?GeolocationLookupResponseSecurity,
     *   abuse?: ?array<GeolocationLookupResponseAbuseItem>,
     *   timeZone?: ?GeolocationLookupResponseTimeZone,
     *   userAgent?: ?GeolocationLookupResponseUserAgent,
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
