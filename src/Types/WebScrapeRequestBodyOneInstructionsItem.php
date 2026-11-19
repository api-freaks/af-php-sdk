<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * A single static-HTML scraping step. Exactly one of these action fields is set per instruction; every other field is absent.
 */
class WebScrapeRequestBodyOneInstructionsItem extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemPostForm $postForm Form selector and field values to submit via postForm or getForm.
     */
    #[JsonProperty('postForm')]
    public ?WebScrapeRequestBodyOneInstructionsItemPostForm $postForm;

    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemGetForm $getForm Form selector and field values to submit via postForm or getForm.
     */
    #[JsonProperty('getForm')]
    public ?WebScrapeRequestBodyOneInstructionsItemGetForm $getForm;

    /**
     * @var ?array<string, string> $extract Maps arbitrary output field names to CSS or XPath selectors. Each key becomes a field in the response's extractedData object.
     */
    #[JsonProperty('extract'), ArrayType(['string' => 'string'])]
    public ?array $extract;

    /**
     * @var ?string $getPage Get page action: retrieves the full page content. Optionally provide a URL or selector to target a specific page.
     */
    #[JsonProperty('getPage')]
    public ?string $getPage;

    /**
     * @param array{
     *   postForm?: ?WebScrapeRequestBodyOneInstructionsItemPostForm,
     *   getForm?: ?WebScrapeRequestBodyOneInstructionsItemGetForm,
     *   extract?: ?array<string, string>,
     *   getPage?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->postForm = $values['postForm'] ?? null;
        $this->getForm = $values['getForm'] ?? null;
        $this->extract = $values['extract'] ?? null;
        $this->getPage = $values['getPage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
