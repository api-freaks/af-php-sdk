<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;

class GetSupportedFlagsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @param array{
     *   apiKey: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
    }
}
