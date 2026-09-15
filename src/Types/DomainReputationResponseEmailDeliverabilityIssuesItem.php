<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * A detected email deliverability issue or misconfiguration.
 */
class DomainReputationResponseEmailDeliverabilityIssuesItem extends JsonSerializableType
{
    /**
     * @var ?string $code Machine-readable code identifying the specific deliverability issue.
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $severity Severity level assigned to the detected issue.
     */
    #[JsonProperty('severity')]
    public ?string $severity;

    /**
     * @var ?string $message Human-readable explanation of the issue.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $recommendation Plain-language description of the exact fix to apply.
     */
    #[JsonProperty('recommendation')]
    public ?string $recommendation;

    /**
     * @param array{
     *   code?: ?string,
     *   severity?: ?string,
     *   message?: ?string,
     *   recommendation?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->severity = $values['severity'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->recommendation = $values['recommendation'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
