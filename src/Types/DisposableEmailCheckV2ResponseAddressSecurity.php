<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Threat and anonymity profile for the IP address.
 */
class DisposableEmailCheckV2ResponseAddressSecurity extends JsonSerializableType
{
    /**
     * @var int $threatScore Quantitative risk assessment score. Higher values indicate elevated security risk.
     */
    #[JsonProperty('threat_score')]
    public int $threatScore;

    /**
     * @var bool $isTor Detection flag for IP addresses routed through the Tor anonymity network.
     */
    #[JsonProperty('is_tor')]
    public bool $isTor;

    /**
     * @var bool $isProxy Detection flag identifying IP addresses operating as proxy servers.
     */
    #[JsonProperty('is_proxy')]
    public bool $isProxy;

    /**
     * @var ?string $proxyType Classification of detected proxy infrastructure type (e.g. VPN, HTTP, SOCKS). Included only when is_proxy is true.
     */
    #[JsonProperty('proxy_type')]
    public ?string $proxyType;

    /**
     * @var ?string $proxyProvider Identified service provider operating the proxy infrastructure. Included only when is_proxy is true.
     */
    #[JsonProperty('proxy_provider')]
    public ?string $proxyProvider;

    /**
     * @var bool $isAnonymous Anonymization detection flag for IP addresses using identity obfuscation techniques.
     */
    #[JsonProperty('is_anonymous')]
    public bool $isAnonymous;

    /**
     * @var bool $isKnownAttacker Threat intelligence flag for IP addresses documented as confirmed malicious sources.
     */
    #[JsonProperty('is_known_attacker')]
    public bool $isKnownAttacker;

    /**
     * @var bool $isSpam Reputation flag for IP addresses associated with spam transmission.
     */
    #[JsonProperty('is_spam')]
    public bool $isSpam;

    /**
     * @var bool $isBot Automated traffic detection flag for IP addresses from bot networks.
     */
    #[JsonProperty('is_bot')]
    public bool $isBot;

    /**
     * @var bool $isCloudProvider Infrastructure classification flag for IP addresses from cloud computing providers.
     */
    #[JsonProperty('is_cloud_provider')]
    public bool $isCloudProvider;

    /**
     * @var string $cloudProvider Identified cloud infrastructure or hosting service provider name.
     */
    #[JsonProperty('cloud_provider')]
    public string $cloudProvider;

    /**
     * @param array{
     *   threatScore: int,
     *   isTor: bool,
     *   isProxy: bool,
     *   isAnonymous: bool,
     *   isKnownAttacker: bool,
     *   isSpam: bool,
     *   isBot: bool,
     *   isCloudProvider: bool,
     *   cloudProvider: string,
     *   proxyType?: ?string,
     *   proxyProvider?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->threatScore = $values['threatScore'];
        $this->isTor = $values['isTor'];
        $this->isProxy = $values['isProxy'];
        $this->proxyType = $values['proxyType'] ?? null;
        $this->proxyProvider = $values['proxyProvider'] ?? null;
        $this->isAnonymous = $values['isAnonymous'];
        $this->isKnownAttacker = $values['isKnownAttacker'];
        $this->isSpam = $values['isSpam'];
        $this->isBot = $values['isBot'];
        $this->isCloudProvider = $values['isCloudProvider'];
        $this->cloudProvider = $values['cloudProvider'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
