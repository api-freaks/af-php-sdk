<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use DateTime;
use Apifreaks\Core\Types\Date;

/**
 * Result of a PDF generation request, containing the hosted URL of the generated PDF.
 */
class PdfGenerateFromTemplateResponse extends JsonSerializableType
{
    /**
     * @var string $templateId The template that was rendered.
     */
    #[JsonProperty('template_id')]
    public string $templateId;

    /**
     * @var string $pdfUrl Hosted URL of the generated PDF.
     */
    #[JsonProperty('pdf_url')]
    public string $pdfUrl;

    /**
     * @var DateTime $createdAt When the PDF was generated (ISO 8601).
     */
    #[JsonProperty('created_at'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $expirationTime When the hosted PDF expires (ISO 8601).
     */
    #[JsonProperty('expiration_time'), Date(Date::TYPE_DATETIME)]
    public DateTime $expirationTime;

    /**
     * @param array{
     *   templateId: string,
     *   pdfUrl: string,
     *   createdAt: DateTime,
     *   expirationTime: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->templateId = $values['templateId'];
        $this->pdfUrl = $values['pdfUrl'];
        $this->createdAt = $values['createdAt'];
        $this->expirationTime = $values['expirationTime'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
