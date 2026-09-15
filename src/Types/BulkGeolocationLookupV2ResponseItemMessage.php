<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Per-item error, returned in place of a location result when an individual IP is invalid, bogon/reserved, or not found in the database.
 */
class BulkGeolocationLookupV2ResponseItemMessage extends JsonSerializableType
{
    /**
     * @var string $message Human-readable reason this IP could not be resolved.
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
