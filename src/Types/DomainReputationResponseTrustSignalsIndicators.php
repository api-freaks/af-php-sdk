<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Individual trust / risk indicators for the domain.
 */
class DomainReputationResponseTrustSignalsIndicators extends JsonSerializableType
{
    /**
     * @var ?bool $isNewlyRegistered Indicates whether the domain was recently registered. null when WHOIS data is unavailable.
     */
    #[JsonProperty('is_newly_registered')]
    public ?bool $isNewlyRegistered;

    /**
     * @var ?bool $usesFreeExtension Indicates whether the domain uses a free TLD extension.
     */
    #[JsonProperty('uses_free_extension')]
    public ?bool $usesFreeExtension;

    /**
     * @var ?bool $usesFreeSsl Indicates whether the domain uses a free SSL certificate.
     */
    #[JsonProperty('uses_free_ssl')]
    public ?bool $usesFreeSsl;

    /**
     * @var ?bool $hasPrivacyWhois Indicates whether WHOIS privacy protection is enabled. null when WHOIS data is unavailable.
     */
    #[JsonProperty('has_privacy_whois')]
    public ?bool $hasPrivacyWhois;

    /**
     * @var ?int $sslAgeDays Age of the SSL certificate in days.
     */
    #[JsonProperty('ssl_age_days')]
    public ?int $sslAgeDays;

    /**
     * @var ?bool $hasDmarc Indicates whether a DMARC record exists.
     */
    #[JsonProperty('has_dmarc')]
    public ?bool $hasDmarc;

    /**
     * @var ?bool $hasSpf Indicates whether an SPF record exists.
     */
    #[JsonProperty('has_spf')]
    public ?bool $hasSpf;

    /**
     * @var ?bool $redirectsExternally Indicates whether the domain redirects to an external site.
     */
    #[JsonProperty('redirects_externally')]
    public ?bool $redirectsExternally;

    /**
     * @var ?bool $javascriptObfuscated Indicates whether obfuscated JavaScript was detected.
     */
    #[JsonProperty('javascript_obfuscated')]
    public ?bool $javascriptObfuscated;

    /**
     * @var ?int $domainAgeDays Age of the domain in days. null when WHOIS data is unavailable.
     */
    #[JsonProperty('domain_age_days')]
    public ?int $domainAgeDays;

    /**
     * @var ?string $registrar Domain registrar name. null when WHOIS data is unavailable.
     */
    #[JsonProperty('registrar')]
    public ?string $registrar;

    /**
     * @param array{
     *   isNewlyRegistered?: ?bool,
     *   usesFreeExtension?: ?bool,
     *   usesFreeSsl?: ?bool,
     *   hasPrivacyWhois?: ?bool,
     *   sslAgeDays?: ?int,
     *   hasDmarc?: ?bool,
     *   hasSpf?: ?bool,
     *   redirectsExternally?: ?bool,
     *   javascriptObfuscated?: ?bool,
     *   domainAgeDays?: ?int,
     *   registrar?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->isNewlyRegistered = $values['isNewlyRegistered'] ?? null;
        $this->usesFreeExtension = $values['usesFreeExtension'] ?? null;
        $this->usesFreeSsl = $values['usesFreeSsl'] ?? null;
        $this->hasPrivacyWhois = $values['hasPrivacyWhois'] ?? null;
        $this->sslAgeDays = $values['sslAgeDays'] ?? null;
        $this->hasDmarc = $values['hasDmarc'] ?? null;
        $this->hasSpf = $values['hasSpf'] ?? null;
        $this->redirectsExternally = $values['redirectsExternally'] ?? null;
        $this->javascriptObfuscated = $values['javascriptObfuscated'] ?? null;
        $this->domainAgeDays = $values['domainAgeDays'] ?? null;
        $this->registrar = $values['registrar'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
