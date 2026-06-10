<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ReadabilityScoreRequestTarget;
use Apifreaks\Core\Json\JsonProperty;

class ReadabilityScoreRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ReadabilityScoreRequestTarget> $target Target audience used to tune sentence difficulty levels
     */
    public ?string $target;

    /**
     * @var ?string $exclude Comma-separated response sections to omit. Possible values are readability_scores, sentence_readability, readability_grade
     */
    public ?string $exclude;

    /**
     * @var string $text Text to analyze for readability
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   apiKey: string,
     *   text: string,
     *   target?: ?value-of<ReadabilityScoreRequestTarget>,
     *   exclude?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->target = $values['target'] ?? null;
        $this->exclude = $values['exclude'] ?? null;
        $this->text = $values['text'];
    }
}
