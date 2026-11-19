<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\BulkDisposableEmailCheckV2RequestFormat;
use Apifreaks\Types\BulkDisposableEmailCheckV2RequestEmailDataItem;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkDisposableEmailCheckV2Request extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<BulkDisposableEmailCheckV2RequestFormat> $format Format of the response.
     */
    public ?string $format;

    /**
     * @var array<BulkDisposableEmailCheckV2RequestEmailDataItem> $emailData Entries to check. Maximum 100 per request. Must not be empty, and must not contain null entries or entries without a valid email.
     */
    #[JsonProperty('emailData'), ArrayType([BulkDisposableEmailCheckV2RequestEmailDataItem::class])]
    public array $emailData;

    /**
     * @param array{
     *   apiKey: string,
     *   emailData: array<BulkDisposableEmailCheckV2RequestEmailDataItem>,
     *   format?: ?value-of<BulkDisposableEmailCheckV2RequestFormat>,
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
