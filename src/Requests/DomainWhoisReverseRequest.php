<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainWhoisReverseRequestFormat;
use Apifreaks\Types\DomainWhoisReverseRequestMode;

class DomainWhoisReverseRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainWhoisReverseRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $keyword Keyword search term for reverse WHOIS by keyword (case-insensitive pattern matching).
     */
    public ?string $keyword;

    /**
     * @var ?string $email Email search term for reverse WHOIS by email address (case-insensitive exact or regex match; * wildcard supported).
     */
    public ?string $email;

    /**
     * @var ?string $owner Registrant or owner name for reverse WHOIS (a full-text search phrase matching technique to retrieve results).
     */
    public ?string $owner;

    /**
     * @var ?string $company Organization or company name for reverse WHOIS (full-text search phrase matching technique to retrieve results).
     */
    public ?string $company;

    /**
     * @var ?bool $exact Accepts 'true' or 'false'. "true" returns only records that exactly match the input (keyword, owner/registrant, or company). "false" returns all matches and is the default when omitted.
     */
    public ?bool $exact;

    /**
     * @var ?value-of<DomainWhoisReverseRequestMode> $mode
     */
    public ?string $mode;

    /**
     * @var ?int $page Page number for paginated results.
     */
    public ?int $page;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<DomainWhoisReverseRequestFormat>,
     *   keyword?: ?string,
     *   email?: ?string,
     *   owner?: ?string,
     *   company?: ?string,
     *   exact?: ?bool,
     *   mode?: ?value-of<DomainWhoisReverseRequestMode>,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->keyword = $values['keyword'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->owner = $values['owner'] ?? null;
        $this->company = $values['company'] ?? null;
        $this->exact = $values['exact'] ?? null;
        $this->mode = $values['mode'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
