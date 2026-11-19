<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkIpSecurityLookupResponseItemSecurity extends JsonSerializableType
{
    /**
     * @var ?float $threatScore
     */
    #[JsonProperty('threat_score')]
    public ?float $threatScore;

    /**
     * @var ?bool $isTor
     */
    #[JsonProperty('is_tor')]
    public ?bool $isTor;

    /**
     * @var ?bool $isProxy
     */
    #[JsonProperty('is_proxy')]
    public ?bool $isProxy;

    /**
     * @var ?array<string> $proxyProviderNames
     */
    #[JsonProperty('proxy_provider_names'), ArrayType(['string'])]
    public ?array $proxyProviderNames;

    /**
     * @var ?float $proxyConfidenceScore
     */
    #[JsonProperty('proxy_confidence_score')]
    public ?float $proxyConfidenceScore;

    /**
     * @var ?string $proxyLastSeen
     */
    #[JsonProperty('proxy_last_seen')]
    public ?string $proxyLastSeen;

    /**
     * @var ?bool $isResidentialProxy
     */
    #[JsonProperty('is_residential_proxy')]
    public ?bool $isResidentialProxy;

    /**
     * @var ?bool $isVpn
     */
    #[JsonProperty('is_vpn')]
    public ?bool $isVpn;

    /**
     * @var ?array<string> $vpnProviderNames
     */
    #[JsonProperty('vpn_provider_names'), ArrayType(['string'])]
    public ?array $vpnProviderNames;

    /**
     * @var ?float $vpnConfidenceScore
     */
    #[JsonProperty('vpn_confidence_score')]
    public ?float $vpnConfidenceScore;

    /**
     * @var ?string $vpnLastSeen
     */
    #[JsonProperty('vpn_last_seen')]
    public ?string $vpnLastSeen;

    /**
     * @var ?bool $isRelay
     */
    #[JsonProperty('is_relay')]
    public ?bool $isRelay;

    /**
     * @var ?string $relayProviderName
     */
    #[JsonProperty('relay_provider_name')]
    public ?string $relayProviderName;

    /**
     * @var ?bool $isAnonymous
     */
    #[JsonProperty('is_anonymous')]
    public ?bool $isAnonymous;

    /**
     * @var ?bool $isKnownAttacker
     */
    #[JsonProperty('is_known_attacker')]
    public ?bool $isKnownAttacker;

    /**
     * @var ?bool $isBot
     */
    #[JsonProperty('is_bot')]
    public ?bool $isBot;

    /**
     * @var ?bool $isSpam
     */
    #[JsonProperty('is_spam')]
    public ?bool $isSpam;

    /**
     * @var ?bool $isCloudProvider
     */
    #[JsonProperty('is_cloud_provider')]
    public ?bool $isCloudProvider;

    /**
     * @var ?string $cloudProviderName
     */
    #[JsonProperty('cloud_provider_name')]
    public ?string $cloudProviderName;

    /**
     * @var ?float $botConfidenceScore Bot detection confidence from 0 to 100. 0 unless is_bot is true.
     */
    #[JsonProperty('bot_confidence_score')]
    public ?float $botConfidenceScore;

    /**
     * @var ?string $botLastSeen Last observed bot activity date in YYYY-MM-DD, when available.
     */
    #[JsonProperty('bot_last_seen')]
    public ?string $botLastSeen;

    /**
     * @var ?string $botOperatorName Organization running the bot, when known (mostly declared bots).
     */
    #[JsonProperty('bot_operator_name')]
    public ?string $botOperatorName;

    /**
     * @var ?string $botType Kind of bot activity, when known. Declared bots (is_known_good_bot true): search_engine, ai_crawler, ai_assistant, seo_crawler, site_monitor, link_preview, feed_fetcher, archiver, ad_verification, scanner. Undeclared bots (is_known_good_bot false): scanner, scraper, exploit, credential_stuffing, brute_force, worm. New values can be added over time, so treat it as a plain string.
     */
    #[JsonProperty('bot_type')]
    public ?string $botType;

    /**
     * @var ?string $corporateGatewayProviderName Corporate gateway provider name, when known.
     */
    #[JsonProperty('corporate_gateway_provider_name')]
    public ?string $corporateGatewayProviderName;

    /**
     * @var ?string $corporateGatewayType Kind of corporate gateway, when known. Known values: secure_web_gateway, browser_isolation.
     */
    #[JsonProperty('corporate_gateway_type')]
    public ?string $corporateGatewayType;

    /**
     * @var ?bool $isCorporateGateway true if the IP is an outbound address of a corporate security gateway (SWG, SSE, or SASE).
     */
    #[JsonProperty('is_corporate_gateway')]
    public ?bool $isCorporateGateway;

    /**
     * @var ?bool $isKnownGoodBot true if the bot is a declared bot with a verifiable operator (e.g. a search engine crawler or uptime monitor).
     */
    #[JsonProperty('is_known_good_bot')]
    public ?bool $isKnownGoodBot;

    /**
     * @var ?int $proxyDaysSeen30D Number of days in the last 30 days on which the IP was seen acting as a proxy. `0` when no proxy activity was observed.
     */
    #[JsonProperty('proxy_days_seen_30d')]
    public ?int $proxyDaysSeen30D;

    /**
     * @var ?int $proxyDaysSeen7D Number of days in the last 7 days on which the IP was seen acting as a proxy. `0` when no proxy activity was observed.
     */
    #[JsonProperty('proxy_days_seen_7d')]
    public ?int $proxyDaysSeen7D;

    /**
     * @var ?int $proxyProviderCount30D Number of distinct proxy providers that offered the IP in the last 30 days. `0` when no proxy activity was observed.
     */
    #[JsonProperty('proxy_provider_count_30d')]
    public ?int $proxyProviderCount30D;

    /**
     * @param array{
     *   threatScore?: ?float,
     *   isTor?: ?bool,
     *   isProxy?: ?bool,
     *   proxyProviderNames?: ?array<string>,
     *   proxyConfidenceScore?: ?float,
     *   proxyLastSeen?: ?string,
     *   isResidentialProxy?: ?bool,
     *   isVpn?: ?bool,
     *   vpnProviderNames?: ?array<string>,
     *   vpnConfidenceScore?: ?float,
     *   vpnLastSeen?: ?string,
     *   isRelay?: ?bool,
     *   relayProviderName?: ?string,
     *   isAnonymous?: ?bool,
     *   isKnownAttacker?: ?bool,
     *   isBot?: ?bool,
     *   isSpam?: ?bool,
     *   isCloudProvider?: ?bool,
     *   cloudProviderName?: ?string,
     *   botConfidenceScore?: ?float,
     *   botLastSeen?: ?string,
     *   botOperatorName?: ?string,
     *   botType?: ?string,
     *   corporateGatewayProviderName?: ?string,
     *   corporateGatewayType?: ?string,
     *   isCorporateGateway?: ?bool,
     *   isKnownGoodBot?: ?bool,
     *   proxyDaysSeen30D?: ?int,
     *   proxyDaysSeen7D?: ?int,
     *   proxyProviderCount30D?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->threatScore = $values['threatScore'] ?? null;
        $this->isTor = $values['isTor'] ?? null;
        $this->isProxy = $values['isProxy'] ?? null;
        $this->proxyProviderNames = $values['proxyProviderNames'] ?? null;
        $this->proxyConfidenceScore = $values['proxyConfidenceScore'] ?? null;
        $this->proxyLastSeen = $values['proxyLastSeen'] ?? null;
        $this->isResidentialProxy = $values['isResidentialProxy'] ?? null;
        $this->isVpn = $values['isVpn'] ?? null;
        $this->vpnProviderNames = $values['vpnProviderNames'] ?? null;
        $this->vpnConfidenceScore = $values['vpnConfidenceScore'] ?? null;
        $this->vpnLastSeen = $values['vpnLastSeen'] ?? null;
        $this->isRelay = $values['isRelay'] ?? null;
        $this->relayProviderName = $values['relayProviderName'] ?? null;
        $this->isAnonymous = $values['isAnonymous'] ?? null;
        $this->isKnownAttacker = $values['isKnownAttacker'] ?? null;
        $this->isBot = $values['isBot'] ?? null;
        $this->isSpam = $values['isSpam'] ?? null;
        $this->isCloudProvider = $values['isCloudProvider'] ?? null;
        $this->cloudProviderName = $values['cloudProviderName'] ?? null;
        $this->botConfidenceScore = $values['botConfidenceScore'] ?? null;
        $this->botLastSeen = $values['botLastSeen'] ?? null;
        $this->botOperatorName = $values['botOperatorName'] ?? null;
        $this->botType = $values['botType'] ?? null;
        $this->corporateGatewayProviderName = $values['corporateGatewayProviderName'] ?? null;
        $this->corporateGatewayType = $values['corporateGatewayType'] ?? null;
        $this->isCorporateGateway = $values['isCorporateGateway'] ?? null;
        $this->isKnownGoodBot = $values['isKnownGoodBot'] ?? null;
        $this->proxyDaysSeen30D = $values['proxyDaysSeen30D'] ?? null;
        $this->proxyDaysSeen7D = $values['proxyDaysSeen7D'] ?? null;
        $this->proxyProviderCount30D = $values['proxyProviderCount30D'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
