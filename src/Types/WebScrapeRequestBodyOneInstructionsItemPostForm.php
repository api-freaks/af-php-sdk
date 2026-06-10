<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyOneInstructionsItemPostForm extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemPostFormPostForm $postForm Submits a form using POST method. Provide the form's XPath/CSS selector and input values.
     */
    #[JsonProperty('postForm')]
    public ?WebScrapeRequestBodyOneInstructionsItemPostFormPostForm $postForm;

    /**
     * @param array{
     *   postForm?: ?WebScrapeRequestBodyOneInstructionsItemPostFormPostForm,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->postForm = $values['postForm'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
