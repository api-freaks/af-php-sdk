<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class WebScrapeRequestBodyBlockUrlInstructionsItemScreenshot extends JsonSerializableType
{
    /**
     * @var (
     *    string
     *   |bool
     * )|null $screenshot Captures screenshot of the page.
     */
    #[JsonProperty('screenshot'), Union('string', 'bool', 'null')]
    public string|bool|null $screenshot;

    /**
     * @param array{
     *   screenshot?: (
     *    string
     *   |bool
     * )|null,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->screenshot = $values['screenshot'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
