<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Defines what data to extract and how to extract it.
 */
class WebScrapeRequestBodyBlockUrlInstructionsItemExtractExtract extends JsonSerializableType
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
     * @var ?string $userData CSS selector or XPath to extract user data. Example: "/html/body/div/div[2]"
     */
    #[JsonProperty('user_data')]
    public ?string $userData;

    /**
     * @param array{
     *   html?: ?string,
     *   text?: ?string,
     *   userData?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->html = $values['html'] ?? null;
        $this->text = $values['text'] ?? null;
        $this->userData = $values['userData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
