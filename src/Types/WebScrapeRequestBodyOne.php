<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class WebScrapeRequestBodyOne extends JsonSerializableType
{
    /**
     * @var array<(
     *    WebScrapeRequestBodyOneInstructionsItemPostForm
     *   |WebScrapeRequestBodyOneInstructionsItemGetForm
     *   |WebScrapeRequestBodyOneInstructionsItemExtract
     *   |WebScrapeRequestBodyOneInstructionsItemGetPage
     * )> $instructions A list of sequential instructions to execute after receiving the static HTML response. Supported methods include `postForm`, `getForm`, and `extract`.
     */
    #[JsonProperty('instructions'), ArrayType([new Union(WebScrapeRequestBodyOneInstructionsItemPostForm::class, WebScrapeRequestBodyOneInstructionsItemGetForm::class, WebScrapeRequestBodyOneInstructionsItemExtract::class, WebScrapeRequestBodyOneInstructionsItemGetPage::class)])]
    public array $instructions;

    /**
     * @param array{
     *   instructions: array<(
     *    WebScrapeRequestBodyOneInstructionsItemPostForm
     *   |WebScrapeRequestBodyOneInstructionsItemGetForm
     *   |WebScrapeRequestBodyOneInstructionsItemExtract
     *   |WebScrapeRequestBodyOneInstructionsItemGetPage
     * )>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
