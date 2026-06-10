<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkEmailValidateResponseEmailValidationResponsesItemAccount extends JsonSerializableType
{
    /**
     * @var bool $role
     */
    #[JsonProperty('role')]
    public bool $role;

    /**
     * @var ?bool $fullMailBox
     */
    #[JsonProperty('fullMailBox')]
    public ?bool $fullMailBox;

    /**
     * @param array{
     *   role: bool,
     *   fullMailBox?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->fullMailBox = $values['fullMailBox'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
