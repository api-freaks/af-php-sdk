<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class WebScrapeRequestBodyOneInstructionsItemGetPage extends JsonSerializableType
{
    /**
     * @var (
     *    string
     *   |bool
     * )|null $getPage Retrieves page content.
     */
    #[JsonProperty('getPage'), Union('string', 'bool', 'null')]
    public string|bool|null $getPage;

    /**
     * @param array{
     *   getPage?: (
     *    string
     *   |bool
     * )|null,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
