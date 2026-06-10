<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class WeakWordsDetectRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var string $text Text to analyze for weak words
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   apiKey: string,
     *   text: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->text = $values['text'];
    }
}
