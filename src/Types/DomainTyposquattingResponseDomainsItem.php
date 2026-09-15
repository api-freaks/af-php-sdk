<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class DomainTyposquattingResponseDomainsItem extends JsonSerializableType
{
    /**
     * @var string $domainName
     */
    #[JsonProperty('domainName')]
    public string $domainName;

    /**
     * @var ?string $createDate Domain creation date (YYYY-MM-DD). May be absent for older or less-actively-tracked entries.
     */
    #[JsonProperty('createDate')]
    public ?string $createDate;

    /**
     * @var ?string $expiryDate Domain expiration date (YYYY-MM-DD). May be absent for older or less-actively-tracked entries.
     */
    #[JsonProperty('expiryDate')]
    public ?string $expiryDate;

    /**
     * @var ?string $lastSeen Last time the domain was observed (YYYY-MM-DD).
     */
    #[JsonProperty('lastSeen')]
    public ?string $lastSeen;

    /**
     * @var bool $isDropped Indicates whether the domain has dropped out of the registry and become available to register again.
     */
    #[JsonProperty('isDropped')]
    public bool $isDropped;

    /**
     * @param array{
     *   domainName: string,
     *   isDropped: bool,
     *   createDate?: ?string,
     *   expiryDate?: ?string,
     *   lastSeen?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domainName = $values['domainName'];
        $this->createDate = $values['createDate'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->lastSeen = $values['lastSeen'] ?? null;
        $this->isDropped = $values['isDropped'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
