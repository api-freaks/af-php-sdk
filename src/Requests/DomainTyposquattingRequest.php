<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\DomainTyposquattingRequestFormat;

class DomainTyposquattingRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<DomainTyposquattingRequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var ?string $keyword Brand or label to find typo variants for. 3-63 characters, letters, digits, or hyphens, a single label with no dots. Case-insensitive. Use either keyword or pattern, never both.
     */
    public ?string $keyword;

    /**
     * @var ?string $pattern Wildcard search string that combines fuzzy matching with * wildcards. 3-63 characters total, * is the only supported wildcard and each one matches zero or more characters, maximum 3 asterisks per request. Use either keyword or pattern, never both.
     */
    public ?string $pattern;

    /**
     * @var ?string $pageToken Token from nextPageToken in the previous response. Required to retrieve page 2 and onward. The original keyword or pattern must be passed alongside the token on every page request. Results page at 100 domains per page.
     */
    public ?string $pageToken;

    /**
     * @param array{
     *   apiKey: string,
     *   format?: ?value-of<DomainTyposquattingRequestFormat>,
     *   keyword?: ?string,
     *   pattern?: ?string,
     *   pageToken?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->keyword = $values['keyword'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
        $this->pageToken = $values['pageToken'] ?? null;
    }
}
