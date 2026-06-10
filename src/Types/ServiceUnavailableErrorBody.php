<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ServiceUnavailableErrorBody extends JsonSerializableType
{
    /**
     * @var ?string $timestamp
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?int $status
     */
    #[JsonProperty('status')]
    public ?int $status;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $path
     */
    #[JsonProperty('path')]
    public ?string $path;

    /**
     * @param array{
     *   timestamp?: ?string,
     *   status?: ?int,
     *   error?: ?string,
     *   message?: ?string,
     *   path?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->path = $values['path'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
