<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * PDF output options. Applies when file_type is PDF.
 */
class BulkScreenshotCaptureRequestUrlsItemPdfOptions extends JsonSerializableType
{
    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemPdfOptionsFormat> $format Paper size of the PDF. Applies when file_type is PDF. Without it, width and height are used if set, otherwise the page renders as one long page: A0, A1, A2, A3, A4, A5, A6, Letter, Legal, Tabloid, or Ledger.
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?bool $landscape Renders the PDF in landscape orientation, swapping the width and height of the paper size. Applies when file_type is PDF.
     */
    #[JsonProperty('landscape')]
    public ?bool $landscape;

    /**
     * @var ?string $pageRange Pages to keep in the PDF, as start-end, for example 1-3 or 5-5. Pages are rendered first and then trimmed. Has no effect on a single-page PDF. Applies when file_type is PDF.
     */
    #[JsonProperty('page_range')]
    public ?string $pageRange;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemPdfOptionsMedia> $media CSS media type used to render the PDF: print or screen.
     */
    #[JsonProperty('media')]
    public ?string $media;

    /**
     * @var ?bool $printBackground Includes background colors and images in the PDF. Applies when file_type is PDF.
     */
    #[JsonProperty('print_background')]
    public ?bool $printBackground;

    /**
     * @param array{
     *   format?: ?value-of<BulkScreenshotCaptureRequestUrlsItemPdfOptionsFormat>,
     *   landscape?: ?bool,
     *   pageRange?: ?string,
     *   media?: ?value-of<BulkScreenshotCaptureRequestUrlsItemPdfOptionsMedia>,
     *   printBackground?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->format = $values['format'] ?? null;
        $this->landscape = $values['landscape'] ?? null;
        $this->pageRange = $values['pageRange'] ?? null;
        $this->media = $values['media'] ?? null;
        $this->printBackground = $values['printBackground'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
