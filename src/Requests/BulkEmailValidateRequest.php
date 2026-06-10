<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkEmailValidateRequestFormat;
use Apifreaks\Types\BulkEmailValidateRequestEmailDataItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkEmailValidateRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkEmailValidateRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var array<BulkEmailValidateRequestEmailDataItem> $emailData Array of email objects for bulk validation
     */
    #[JsonProperty('emailData'), ArrayType([BulkEmailValidateRequestEmailDataItem::class])]
    public array $emailData;

    /**
     * @param array{
     *   apiKey: string,
     *   emailData: array<BulkEmailValidateRequestEmailDataItem>,
     *   format?: ?value-of<BulkEmailValidateRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->emailData = $values['emailData'];
    }
}
