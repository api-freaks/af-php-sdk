<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\SwiftCodeLookupRequestFormat;

class SwiftCodeLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<SwiftCodeLookupRequestFormat> $format Specify the desired response format. Options: 'json' (default) or 'xml'.
     */
    public ?string $format;

    /**
     * @var string $swiftCode SWIFT/BIC code to lookup (must be 8 or 11 characters).
     */
    public string $swiftCode;

    /**
     * @param array{
     *   apiKey: string,
     *   swiftCode: string,
     *   format?: ?value-of<SwiftCodeLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->swiftCode = $values['swiftCode'];
    }
}
