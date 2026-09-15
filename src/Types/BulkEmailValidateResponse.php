<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkEmailValidateResponse extends JsonSerializableType
{
    /**
     * @var array<BulkEmailValidateResponseEmailResponseItem> $emailResponse Array of SingleEmailValidationResponse objects for bulk validation
     */
    #[JsonProperty('emailResponse'), ArrayType([BulkEmailValidateResponseEmailResponseItem::class])]
    public array $emailResponse;

    /**
     * @param array{
     *   emailResponse: array<BulkEmailValidateResponseEmailResponseItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->emailResponse = $values['emailResponse'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
