<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Wrapper containing the per-email results array.
 */
class BulkDisposableEmailCheckV2Response extends JsonSerializableType
{
    /**
     * @var array<BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItem> $disposableEmailResponse Array of per-email results, one entry per requested email, in the same order as the request.
     */
    #[JsonProperty('disposableEmailResponse'), ArrayType([BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItem::class])]
    public array $disposableEmailResponse;

    /**
     * @param array{
     *   disposableEmailResponse: array<BulkDisposableEmailCheckV2ResponseDisposableEmailResponseItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->disposableEmailResponse = $values['disposableEmailResponse'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
