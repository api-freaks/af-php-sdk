<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainSslChainLookupResponseSslCertificatesItemPublicKey extends JsonSerializableType
{
    /**
     * @var string $keySize
     */
    #[JsonProperty('keySize')]
    public string $keySize;

    /**
     * @var string $keyAlgorithm
     */
    #[JsonProperty('keyAlgorithm')]
    public string $keyAlgorithm;

    /**
     * @var string $pemRaw
     */
    #[JsonProperty('pemRaw')]
    public string $pemRaw;

    /**
     * @param array{
     *   keySize: string,
     *   keyAlgorithm: string,
     *   pemRaw: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->keySize = $values['keySize'];
        $this->keyAlgorithm = $values['keyAlgorithm'];
        $this->pemRaw = $values['pemRaw'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
