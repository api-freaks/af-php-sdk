<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;
use Apifreaks\Core\Types\Union;

class WebScrapeRequestBodyBlockUrl extends JsonSerializableType
{
    /**
     * @var ?array<string> $blockUrl List of script or URL patterns to block during network requests.
     */
    #[JsonProperty('blockUrl'), ArrayType(['string'])]
    public ?array $blockUrl;

    /**
     * @var ?array<WebScrapeRequestBodyBlockUrlCookiesItem> $cookies List of cookies to be set in the browser session.
     */
    #[JsonProperty('cookies'), ArrayType([WebScrapeRequestBodyBlockUrlCookiesItem::class])]
    public ?array $cookies;

    /**
     * @var array<(
     *    WebScrapeRequestBodyBlockUrlInstructionsItemFill
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClick
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClickIfExist
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemEnter
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemNewTab
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemMoveToRelativeTab
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemWait
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemWaitFor
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSelect
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemJsExe
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemConditionalCheck
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemBlockElement
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemExtract
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToIframe
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToParentFrame
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemScreenshot
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSaveimage
     * )> $instructions An ordered list of step-by-step scraping instructions to be executed in the browser.
     */
    #[JsonProperty('instructions'), ArrayType([new Union(WebScrapeRequestBodyBlockUrlInstructionsItemFill::class, WebScrapeRequestBodyBlockUrlInstructionsItemClick::class, WebScrapeRequestBodyBlockUrlInstructionsItemClickIfExist::class, WebScrapeRequestBodyBlockUrlInstructionsItemEnter::class, WebScrapeRequestBodyBlockUrlInstructionsItemNewTab::class, WebScrapeRequestBodyBlockUrlInstructionsItemMoveToRelativeTab::class, WebScrapeRequestBodyBlockUrlInstructionsItemWait::class, WebScrapeRequestBodyBlockUrlInstructionsItemWaitFor::class, WebScrapeRequestBodyBlockUrlInstructionsItemSelect::class, WebScrapeRequestBodyBlockUrlInstructionsItemJsExe::class, WebScrapeRequestBodyBlockUrlInstructionsItemConditionalCheck::class, WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue::class, WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptcha::class, WebScrapeRequestBodyBlockUrlInstructionsItemBlockElement::class, WebScrapeRequestBodyBlockUrlInstructionsItemExtract::class, WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptcha::class, WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToIframe::class, WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToParentFrame::class, WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha::class, WebScrapeRequestBodyBlockUrlInstructionsItemScreenshot::class, WebScrapeRequestBodyBlockUrlInstructionsItemSaveimage::class)])]
    public array $instructions;

    /**
     * @param array{
     *   instructions: array<(
     *    WebScrapeRequestBodyBlockUrlInstructionsItemFill
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClick
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClickIfExist
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemEnter
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemNewTab
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemMoveToRelativeTab
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemWait
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemWaitFor
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSelect
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemJsExe
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemConditionalCheck
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemBlockElement
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemExtract
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToIframe
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSwitchToParentFrame
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemScreenshot
     *   |WebScrapeRequestBodyBlockUrlInstructionsItemSaveimage
     * )>,
     *   blockUrl?: ?array<string>,
     *   cookies?: ?array<WebScrapeRequestBodyBlockUrlCookiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->blockUrl = $values['blockUrl'] ?? null;
        $this->cookies = $values['cookies'] ?? null;
        $this->instructions = $values['instructions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
