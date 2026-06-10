<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\SubdomainsLookupRequestFormat;
use DateTime;
use Apifreaks\Types\SubdomainsLookupRequestStatus;

class SubdomainsLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<SubdomainsLookupRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var string $domain Domain name for availability and suggestions.
     */
    public string $domain;

    /**
     * @var ?DateTime $after Filter subdomains seen after this date (format YYYY-MM-DD).
     */
    public ?DateTime $after;

    /**
     * @var ?DateTime $before Filter subdomains seen before this date( format YYYY-MM-DD).
     */
    public ?DateTime $before;

    /**
     * @var ?value-of<SubdomainsLookupRequestStatus> $status Filter subdomains by status (active or inactive).
     */
    public ?string $status;

    /**
     * @var ?string $page Page number for paginated results.
     */
    public ?string $page;

    /**
     * @param array{
     *   apiKey: string,
     *   domain: string,
     *   format?: ?value-of<SubdomainsLookupRequestFormat>,
     *   after?: ?DateTime,
     *   before?: ?DateTime,
     *   status?: ?value-of<SubdomainsLookupRequestStatus>,
     *   page?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->domain = $values['domain'];
        $this->after = $values['after'] ?? null;
        $this->before = $values['before'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
