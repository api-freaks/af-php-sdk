<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class EmailValidateResponseDomain extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var bool $disposable
     */
    #[JsonProperty('disposable')]
    public bool $disposable;

    /**
     * @var bool $spam
     */
    #[JsonProperty('spam')]
    public bool $spam;

    /**
     * @var bool $free
     */
    #[JsonProperty('free')]
    public bool $free;

    /**
     * @var ?bool $catchAll
     */
    #[JsonProperty('catchAll')]
    public ?bool $catchAll;

    /**
     * @var bool $validDomain
     */
    #[JsonProperty('validDomain')]
    public bool $validDomain;

    /**
     * @param array{
     *   name: string,
     *   disposable: bool,
     *   spam: bool,
     *   free: bool,
     *   validDomain: bool,
     *   catchAll?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->disposable = $values['disposable'];
        $this->spam = $values['spam'];
        $this->free = $values['free'];
        $this->catchAll = $values['catchAll'] ?? null;
        $this->validDomain = $values['validDomain'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
