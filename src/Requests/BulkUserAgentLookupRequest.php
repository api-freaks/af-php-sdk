<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkUserAgentLookupRequestFormat;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkUserAgentLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkUserAgentLookupRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var array<string> $uaStrings List of user agent strings to parse
     */
    #[JsonProperty('uaStrings'), ArrayType(['string'])]
    public array $uaStrings;

    /**
     * @param array{
     *   apiKey: string,
     *   uaStrings: array<string>,
     *   format?: ?value-of<BulkUserAgentLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->uaStrings = $values['uaStrings'];
    }
}
