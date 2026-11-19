<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class ScreenshotCaptureResponseClip extends JsonSerializableType
{
    /**
     * @var ?int $height
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?int $width
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @var ?int $x
     */
    #[JsonProperty('x')]
    public ?int $x;

    /**
     * @var ?int $y
     */
    #[JsonProperty('y')]
    public ?int $y;

    /**
     * @param array{
     *   height?: ?int,
     *   width?: ?int,
     *   x?: ?int,
     *   y?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->height = $values['height'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->x = $values['x'] ?? null;
        $this->y = $values['y'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
