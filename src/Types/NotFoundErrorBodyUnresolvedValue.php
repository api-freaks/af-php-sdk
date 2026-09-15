<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class NotFoundErrorBodyUnresolvedValue extends JsonSerializableType
{
    /**
     * @var ?string $message Detail message explaining why this symbol was not resolved.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?array<string> $suggestions Optional list of supported symbols that closely match the unresolved symbol.
     */
    #[JsonProperty('suggestions'), ArrayType(['string'])]
    public ?array $suggestions;

    /**
     * @param array{
     *   message?: ?string,
     *   suggestions?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
        $this->suggestions = $values['suggestions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
