<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\UserAgentLookupRequestFormat;

class UserAgentLookupRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var string $userAgent The User-Agent string to parse
     */
    public string $userAgent;

    /**
     * @var ?value-of<UserAgentLookupRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @param array{
     *   apiKey: string,
     *   userAgent: string,
     *   format?: ?value-of<UserAgentLookupRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->userAgent = $values['userAgent'];
        $this->format = $values['format'] ?? null;
    }
}
