<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkEmailValidateResponse extends JsonSerializableType
{
    /**
     * @var ?array<BulkEmailValidateResponseEmailValidationResponsesItem> $emailValidationResponses Array of SingleEmailValidationResponse objects for bulk validation
     */
    #[JsonProperty('emailValidationResponses'), ArrayType([BulkEmailValidateResponseEmailValidationResponsesItem::class])]
    public ?array $emailValidationResponses;

    /**
     * @param array{
     *   emailValidationResponses?: ?array<BulkEmailValidateResponseEmailValidationResponsesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->emailValidationResponses = $values['emailValidationResponses'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
