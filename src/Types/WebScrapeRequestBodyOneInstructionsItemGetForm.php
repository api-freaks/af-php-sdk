<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WebScrapeRequestBodyOneInstructionsItemGetForm extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyOneInstructionsItemGetFormGetForm $getForm Submits a form using GET method. Provide the form's XPath/CSS selector and input values.
     */
    #[JsonProperty('getForm')]
    public ?WebScrapeRequestBodyOneInstructionsItemGetFormGetForm $getForm;

    /**
     * @param array{
     *   getForm?: ?WebScrapeRequestBodyOneInstructionsItemGetFormGetForm,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->getForm = $values['getForm'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
