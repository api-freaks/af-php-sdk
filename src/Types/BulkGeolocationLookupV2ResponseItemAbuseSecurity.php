<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Threat intelligence and security information for the IP.
 */
class BulkGeolocationLookupV2ResponseItemAbuseSecurity extends JsonSerializableType
{
    /**
     * @var float $threatScore Aggregate risk score from 0 to 100.
     */
    #[JsonProperty('threat_score')]
    public float $threatScore;

    /**
     * @var bool $isTor true if the IP matches a Tor exit node.
     */
    #[JsonProperty('is_tor')]
    public bool $isTor;

    /**
     * @var bool $isProxy true if the IP is associated with a proxy service.
     */
    #[JsonProperty('is_proxy')]
    public bool $isProxy;

    /**
     * @var ?array<string> $proxyProviderNames Detected proxy provider names.
     */
    #[JsonProperty('proxy_provider_names'), ArrayType(['string'])]
    public ?array $proxyProviderNames;

    /**
     * @var float $proxyConfidenceScore Proxy detection confidence from 0 to 100.
     */
    #[JsonProperty('proxy_confidence_score')]
    public float $proxyConfidenceScore;

    /**
     * @var ?string $proxyLastSeen Last observed proxy activity date in YYYY-MM-DD.
     */
    #[JsonProperty('proxy_last_seen')]
    public ?string $proxyLastSeen;

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
     * @var bool $isResidentialProxy true if the IP is linked to a residential proxy network.
     */
    #[JsonProperty('is_residential_proxy')]
    public bool $isResidentialProxy;

    /**
     * @var bool $isVpn true if the IP is associated with a VPN service.
     */
    #[JsonProperty('is_vpn')]
    public bool $isVpn;

    /**
     * @var ?array<string> $vpnProviderNames Detected VPN provider names.
     */
    #[JsonProperty('vpn_provider_names'), ArrayType(['string'])]
    public ?array $vpnProviderNames;

    /**
     * @var float $vpnConfidenceScore VPN detection confidence from 0 to 100.
     */
    #[JsonProperty('vpn_confidence_score')]
    public float $vpnConfidenceScore;

    /**
     * @var ?string $vpnLastSeen Last observed VPN activity date in YYYY-MM-DD.
     */
    #[JsonProperty('vpn_last_seen')]
    public ?string $vpnLastSeen;

    /**
     * @var bool $isRelay true if the IP is associated with a relay network.
     */
    #[JsonProperty('is_relay')]
    public bool $isRelay;

    /**
     * @var ?string $relayProviderName Relay provider name.
     */
    #[JsonProperty('relay_provider_name')]
    public ?string $relayProviderName;

    /**
     * @var bool $isAnonymous true if any anonymity signal is present.
     */
    #[JsonProperty('is_anonymous')]
    public bool $isAnonymous;

    /**
     * @var bool $isKnownAttacker true if the IP is flagged for known attacker behavior.
     */
    #[JsonProperty('is_known_attacker')]
    public bool $isKnownAttacker;

    /**
     * @var bool $isBot true if the IP is associated with bot activity.
     */
    #[JsonProperty('is_bot')]
    public bool $isBot;

    /**
     * @var bool $isSpam true if the IP is associated with spam activity.
     */
    #[JsonProperty('is_spam')]
    public bool $isSpam;

    /**
     * @var bool $isCloudProvider true if the IP belongs to a cloud provider range.
     */
    #[JsonProperty('is_cloud_provider')]
    public bool $isCloudProvider;

    /**
     * @var ?string $cloudProviderName Cloud provider name.
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
     * @param array{
     *   threatScore: float,
     *   isTor: bool,
     *   isProxy: bool,
     *   proxyConfidenceScore: float,
     *   isResidentialProxy: bool,
     *   isVpn: bool,
     *   vpnConfidenceScore: float,
     *   isRelay: bool,
     *   isAnonymous: bool,
     *   isKnownAttacker: bool,
     *   isBot: bool,
     *   isSpam: bool,
     *   isCloudProvider: bool,
     *   proxyProviderNames?: ?array<string>,
     *   proxyLastSeen?: ?string,
     *   proxyDaysSeen30D?: ?int,
     *   proxyDaysSeen7D?: ?int,
     *   proxyProviderCount30D?: ?int,
     *   vpnProviderNames?: ?array<string>,
     *   vpnLastSeen?: ?string,
     *   relayProviderName?: ?string,
     *   cloudProviderName?: ?string,
     *   botConfidenceScore?: ?float,
     *   botLastSeen?: ?string,
     *   botOperatorName?: ?string,
     *   botType?: ?string,
     *   corporateGatewayProviderName?: ?string,
     *   corporateGatewayType?: ?string,
     *   isCorporateGateway?: ?bool,
     *   isKnownGoodBot?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->threatScore = $values['threatScore'];
        $this->isTor = $values['isTor'];
        $this->isProxy = $values['isProxy'];
        $this->proxyProviderNames = $values['proxyProviderNames'] ?? null;
        $this->proxyConfidenceScore = $values['proxyConfidenceScore'];
        $this->proxyLastSeen = $values['proxyLastSeen'] ?? null;
        $this->proxyDaysSeen30D = $values['proxyDaysSeen30D'] ?? null;
        $this->proxyDaysSeen7D = $values['proxyDaysSeen7D'] ?? null;
        $this->proxyProviderCount30D = $values['proxyProviderCount30D'] ?? null;
        $this->isResidentialProxy = $values['isResidentialProxy'];
        $this->isVpn = $values['isVpn'];
        $this->vpnProviderNames = $values['vpnProviderNames'] ?? null;
        $this->vpnConfidenceScore = $values['vpnConfidenceScore'];
        $this->vpnLastSeen = $values['vpnLastSeen'] ?? null;
        $this->isRelay = $values['isRelay'];
        $this->relayProviderName = $values['relayProviderName'] ?? null;
        $this->isAnonymous = $values['isAnonymous'];
        $this->isKnownAttacker = $values['isKnownAttacker'];
        $this->isBot = $values['isBot'];
        $this->isSpam = $values['isSpam'];
        $this->isCloudProvider = $values['isCloudProvider'];
        $this->cloudProviderName = $values['cloudProviderName'] ?? null;
        $this->botConfidenceScore = $values['botConfidenceScore'] ?? null;
        $this->botLastSeen = $values['botLastSeen'] ?? null;
        $this->botOperatorName = $values['botOperatorName'] ?? null;
        $this->botType = $values['botType'] ?? null;
        $this->corporateGatewayProviderName = $values['corporateGatewayProviderName'] ?? null;
        $this->corporateGatewayType = $values['corporateGatewayType'] ?? null;
        $this->isCorporateGateway = $values['isCorporateGateway'] ?? null;
        $this->isKnownGoodBot = $values['isKnownGoodBot'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
