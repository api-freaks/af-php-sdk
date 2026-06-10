<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Defines what data to extract and how to extract it.
 */
class WebScrapeRequestBodyOneInstructionsItemExtractExtract extends JsonSerializableType
{
    /**
     * @var ?string $html CSS selector or XPath to extract HTML content. Example: "/html/body"
     */
    #[JsonProperty('html')]
    public ?string $html;

    /**
     * @var ?string $text CSS selector or XPath to extract text content. Example: "/html/body/div/div[2]/text"
     */
    #[JsonProperty('text')]
    public ?string $text;

    /**
     * @param array{
     *   html?: ?string,
     *   text?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->html = $values['html'] ?? null;
        $this->text = $values['text'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
