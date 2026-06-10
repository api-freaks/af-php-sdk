<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\GetFlagsRequestShape;
use Apifreaks\Types\GetFlagsRequestFormat;
use Apifreaks\Types\GetFlagsRequestSize;
use Apifreaks\Types\GetFlagsRequestType;

class GetFlagsRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var string $name Country code in ISO 3166-1 alpha-2 format.
     */
    public string $name;

    /**
     * @var value-of<GetFlagsRequestShape> $shape Flag shape. One of: `'flat'` or `'round'`.
     */
    public string $shape;

    /**
     * @var ?value-of<GetFlagsRequestFormat> $format Flag format. Applicable only for PNG or WEBP formats. Default is png.
     */
    public ?string $format;

    /**
     * @var ?value-of<GetFlagsRequestSize> $size Flag size in pixels. Valid options: `16px`, `24px`, `32px`, `48px`, `64px`. Applicable only for PNG or WEBP formats.
     */
    public ?string $size;

    /**
     * @var value-of<GetFlagsRequestType> $type Type of flag. One of: `country` or `organization`.
     */
    public string $type;

    /**
     * @param array{
     *   apiKey: string,
     *   name: string,
     *   shape: value-of<GetFlagsRequestShape>,
     *   type: value-of<GetFlagsRequestType>,
     *   format?: ?value-of<GetFlagsRequestFormat>,
     *   size?: ?value-of<GetFlagsRequestSize>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->name = $values['name'];
        $this->shape = $values['shape'];
        $this->format = $values['format'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->type = $values['type'];
    }
}
