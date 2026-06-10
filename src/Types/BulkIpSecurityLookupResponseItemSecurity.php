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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
