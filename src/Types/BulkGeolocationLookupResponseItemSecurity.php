<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkGeolocationLookupResponseItemSecurity extends JsonSerializableType
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
     * @var ?string $proxyType
     */
    #[JsonProperty('proxy_type')]
    public ?string $proxyType;

    /**
     * @var ?string $proxyProvider
     */
    #[JsonProperty('proxy_provider')]
    public ?string $proxyProvider;

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
     * @var ?bool $isSpam
     */
    #[JsonProperty('is_spam')]
    public ?bool $isSpam;

    /**
     * @var ?bool $isBot
     */
    #[JsonProperty('is_bot')]
    public ?bool $isBot;

    /**
     * @var ?bool $isCloudProvider
     */
    #[JsonProperty('is_cloud_provider')]
    public ?bool $isCloudProvider;

    /**
     * @var ?string $cloudProvider
     */
    #[JsonProperty('cloud_provider')]
    public ?string $cloudProvider;

    /**
     * @param array{
     *   threatScore?: ?float,
     *   isTor?: ?bool,
     *   isProxy?: ?bool,
     *   proxyType?: ?string,
     *   proxyProvider?: ?string,
     *   isAnonymous?: ?bool,
     *   isKnownAttacker?: ?bool,
     *   isSpam?: ?bool,
     *   isBot?: ?bool,
     *   isCloudProvider?: ?bool,
     *   cloudProvider?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->threatScore = $values['threatScore'] ?? null;
        $this->isTor = $values['isTor'] ?? null;
        $this->isProxy = $values['isProxy'] ?? null;
        $this->proxyType = $values['proxyType'] ?? null;
        $this->proxyProvider = $values['proxyProvider'] ?? null;
        $this->isAnonymous = $values['isAnonymous'] ?? null;
        $this->isKnownAttacker = $values['isKnownAttacker'] ?? null;
        $this->isSpam = $values['isSpam'] ?? null;
        $this->isBot = $values['isBot'] ?? null;
        $this->isCloudProvider = $values['isCloudProvider'] ?? null;
        $this->cloudProvider = $values['cloudProvider'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
