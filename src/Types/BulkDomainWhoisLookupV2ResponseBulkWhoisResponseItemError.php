<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Per-item error, returned in place of a WHOIS result when an individual domain's extension is unsupported or its lookup otherwise fails.
 */
class BulkDomainWhoisLookupV2ResponseBulkWhoisResponseItemError extends JsonSerializableType
{
    /**
     * @var bool $status Always false for a per-item error.
     */
    #[JsonProperty('status')]
    public bool $status;

    /**
     * @var string $domainName Domain name that this error applies to.
     */
    #[JsonProperty('domain_name')]
    public string $domainName;

    /**
     * @var int $statusCode HTTP-equivalent status code for this item's failure (e.g. 403 for an unsupported extension).
     */
    #[JsonProperty('status_code')]
    public int $statusCode;

    /**
     * @var ?string $error Short error category or exception type.
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var string $message Human-readable reason this domain could not be resolved.
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   status: bool,
     *   domainName: string,
     *   statusCode: int,
     *   message: string,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->domainName = $values['domainName'];
        $this->statusCode = $values['statusCode'];
        $this->error = $values['error'] ?? null;
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
