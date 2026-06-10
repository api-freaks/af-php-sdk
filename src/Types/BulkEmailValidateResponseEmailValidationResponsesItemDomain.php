<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailValidationResponsesItemDomain extends JsonSerializableType
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
     * @var bool $catchAll
     */
    #[JsonProperty('catchAll')]
    public bool $catchAll;

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
     *   catchAll: bool,
     *   validDomain: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->disposable = $values['disposable'];
        $this->spam = $values['spam'];
        $this->free = $values['free'];
        $this->catchAll = $values['catchAll'];
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
