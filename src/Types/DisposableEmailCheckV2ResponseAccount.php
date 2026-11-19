<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Account-level detection details. Omitted entirely when validSyntax is false.
 */
class DisposableEmailCheckV2ResponseAccount extends JsonSerializableType
{
    /**
     * @var bool $role Detection flag identifying role-based email addresses (e.g., admin@, support@).
     */
    #[JsonProperty('role')]
    public bool $role;

    /**
     * @param array{
     *   role: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
