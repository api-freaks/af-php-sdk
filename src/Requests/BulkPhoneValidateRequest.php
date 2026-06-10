<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkPhoneValidateRequestFormat;
use Apifreaks\Types\BulkPhoneValidateRequestNumbersItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkPhoneValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkPhoneValidateRequestFormat> $format Specifies the desired format for the API response. Choose 'json' for a JSON object. If not provided, the API defaults to JSON format.
     */
    public ?string $format;

    /**
     * @var array<BulkPhoneValidateRequestNumbersItem> $numbers Array of phone number objects. Maximum 100 per request.
     */
    #[JsonProperty('numbers'), ArrayType([BulkPhoneValidateRequestNumbersItem::class])]
    public array $numbers;

    /**
     * @param array{
     *   apiKey: string,
     *   numbers: array<BulkPhoneValidateRequestNumbersItem>,
     *   format?: ?value-of<BulkPhoneValidateRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->numbers = $values['numbers'];
    }
}
