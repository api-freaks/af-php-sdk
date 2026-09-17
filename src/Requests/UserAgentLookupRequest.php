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
     * @var ?value-of<UserAgentLookupRequestFormat> $format Format of the response
     */
    public ?string $format;

    /**
     * @var string $userAgent The User-Agent string to parse, sent as the User-Agent HTTP header.
     */
    public string $userAgent;

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
        $this->format = $values['format'] ?? null;
        $this->userAgent = $values['userAgent'];
    }
}
