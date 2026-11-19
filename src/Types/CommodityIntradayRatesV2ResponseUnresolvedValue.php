<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityIntradayRatesV2ResponseUnresolvedValue extends JsonSerializableType
{
    /**
     * @var ?string $message Detail message explaining how this symbol was handled.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $resolvedTo The supported symbol the request was answered with.
     */
    #[JsonProperty('resolvedTo')]
    public ?string $resolvedTo;

    /**
     * @var ?array<string> $suggestions Optional list of supported symbols that closely match the unresolved symbol.
     */
    #[JsonProperty('suggestions'), ArrayType(['string'])]
    public ?array $suggestions;

    /**
     * @param array{
     *   message?: ?string,
     *   resolvedTo?: ?string,
     *   suggestions?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
        $this->resolvedTo = $values['resolvedTo'] ?? null;
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
