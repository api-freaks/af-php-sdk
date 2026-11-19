<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Domain-level disposable/spam/free classification for the email address.
 */
class DisposableEmailCheckV2ResponseDomain extends JsonSerializableType
{
    /**
     * @var string $name Extracted domain component from the email address.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var bool $validDomain Domain validation status confirming DNS resolution capability.
     */
    #[JsonProperty('validDomain')]
    public bool $validDomain;

    /**
     * @var ?bool $disposable Classification flag identifying domains from temporary/throwaway email service providers. Omitted when validSyntax is false or the domain could not be resolved.
     */
    #[JsonProperty('disposable')]
    public ?bool $disposable;

    /**
     * @var ?bool $free Classification indicating free or consumer-grade email service providers. Omitted when validSyntax is false or the domain could not be resolved.
     */
    #[JsonProperty('free')]
    public ?bool $free;

    /**
     * @var ?bool $spam Reputation indicator flagging domains on spam databases. Omitted when validSyntax is false or the domain could not be resolved.
     */
    #[JsonProperty('spam')]
    public ?bool $spam;

    /**
     * @param array{
     *   name: string,
     *   validDomain: bool,
     *   disposable?: ?bool,
     *   free?: ?bool,
     *   spam?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->validDomain = $values['validDomain'];
        $this->disposable = $values['disposable'] ?? null;
        $this->free = $values['free'] ?? null;
        $this->spam = $values['spam'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
