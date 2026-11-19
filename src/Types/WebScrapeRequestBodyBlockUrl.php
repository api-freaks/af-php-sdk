<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WebScrapeRequestBodyBlockUrl extends JsonSerializableType
{
    /**
     * @var ?array<string> $blockUrl List of script or URL patterns to block during network requests.
     */
    #[JsonProperty('blockUrl'), ArrayType(['string'])]
    public ?array $blockUrl;

    /**
     * @var ?array<WebScrapeRequestBodyBlockUrlCookiesItem> $cookies List of cookies to be set in the browser session.
     */
    #[JsonProperty('cookies'), ArrayType([WebScrapeRequestBodyBlockUrlCookiesItem::class])]
    public ?array $cookies;

    /**
     * @var array<WebScrapeRequestBodyBlockUrlInstructionsItem> $instructions An ordered list of step-by-step scraping instructions to be executed in the browser. Each item is one Instruction object, with exactly one action field set.
     */
    #[JsonProperty('instructions'), ArrayType([WebScrapeRequestBodyBlockUrlInstructionsItem::class])]
    public array $instructions;

    /**
     * @param array{
     *   instructions: array<WebScrapeRequestBodyBlockUrlInstructionsItem>,
     *   blockUrl?: ?array<string>,
     *   cookies?: ?array<WebScrapeRequestBodyBlockUrlCookiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->blockUrl = $values['blockUrl'] ?? null;
        $this->cookies = $values['cookies'] ?? null;
        $this->instructions = $values['instructions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
