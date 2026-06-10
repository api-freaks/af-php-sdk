<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItem extends JsonSerializableType
{
    /**
     * @var string $chainOrder
     */
    #[JsonProperty('chainOrder')]
    public string $chainOrder;

    /**
     * @var string $authenticationType
     */
    #[JsonProperty('authenticationType')]
    public string $authenticationType;

    /**
     * @var string $validityStartDate
     */
    #[JsonProperty('validityStartDate')]
    public string $validityStartDate;

    /**
     * @var string $validityEndDate
     */
    #[JsonProperty('validityEndDate')]
    public string $validityEndDate;

    /**
     * @var string $serialNumber
     */
    #[JsonProperty('serialNumber')]
    public string $serialNumber;

    /**
     * @var string $signatureAlgorithm
     */
    #[JsonProperty('signatureAlgorithm')]
    public string $signatureAlgorithm;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemSubject $subject
     */
    #[JsonProperty('subject')]
    public DomainSslChainLookupResponseSslCertificatesItemSubject $subject;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemIssuer $issuer
     */
    #[JsonProperty('issuer')]
    public DomainSslChainLookupResponseSslCertificatesItemIssuer $issuer;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemPublicKey $publicKey
     */
    #[JsonProperty('publicKey')]
    public DomainSslChainLookupResponseSslCertificatesItemPublicKey $publicKey;

    /**
     * @var DomainSslChainLookupResponseSslCertificatesItemExtensions $extensions
     */
    #[JsonProperty('extensions')]
    public DomainSslChainLookupResponseSslCertificatesItemExtensions $extensions;

    /**
     * @var ?string $pemRaw Raw certificate in PEM format
     */
    #[JsonProperty('pemRaw')]
    public ?string $pemRaw;

    /**
     * @param array{
     *   chainOrder: string,
     *   authenticationType: string,
     *   validityStartDate: string,
     *   validityEndDate: string,
     *   serialNumber: string,
     *   signatureAlgorithm: string,
     *   subject: DomainSslChainLookupResponseSslCertificatesItemSubject,
     *   issuer: DomainSslChainLookupResponseSslCertificatesItemIssuer,
     *   publicKey: DomainSslChainLookupResponseSslCertificatesItemPublicKey,
     *   extensions: DomainSslChainLookupResponseSslCertificatesItemExtensions,
     *   pemRaw?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->chainOrder = $values['chainOrder'];
        $this->authenticationType = $values['authenticationType'];
        $this->validityStartDate = $values['validityStartDate'];
        $this->validityEndDate = $values['validityEndDate'];
        $this->serialNumber = $values['serialNumber'];
        $this->signatureAlgorithm = $values['signatureAlgorithm'];
        $this->subject = $values['subject'];
        $this->issuer = $values['issuer'];
        $this->publicKey = $values['publicKey'];
        $this->extensions = $values['extensions'];
        $this->pemRaw = $values['pemRaw'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
