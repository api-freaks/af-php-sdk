<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * A single browser scraping step. Exactly one of these action fields is set per instruction; every other field is absent.
 */
class WebScrapeRequestBodyBlockUrlInstructionsItem extends JsonSerializableType
{
    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemFill $fill A selector/value pair used by fill, select, and clickButtonByValue instructions.
     */
    #[JsonProperty('fill')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemFill $fill;

    /**
     * @var ?string $click Click action: CSS selector or XPath identifying the element to click.
     */
    #[JsonProperty('click')]
    public ?string $click;

    /**
     * @var ?string $clickIfExist Click if exists action: CSS selector or XPath identifying the element to click, only if it appears on the page within a short timeout.
     */
    #[JsonProperty('clickIfExist')]
    public ?string $clickIfExist;

    /**
     * @var ?string $enter Enter key action: CSS selector or XPath identifying the element to send an Enter keystroke to.
     */
    #[JsonProperty('enter')]
    public ?string $enter;

    /**
     * @var ?bool $newTab New tab action: set to true to switch focus to a newly opened browser tab.
     */
    #[JsonProperty('newTab')]
    public ?bool $newTab;

    /**
     * @var ?int $moveToRelativeTab Move to relative tab action: relative tab index to move to (e.g. 1 for the next tab, -1 for the previous tab).
     */
    #[JsonProperty('moveToRelativeTab')]
    public ?int $moveToRelativeTab;

    /**
     * @var ?int $wait Wait action: pauses execution for this many milliseconds.
     */
    #[JsonProperty('wait')]
    public ?int $wait;

    /**
     * @var ?string $waitFor Wait for element action: CSS selector or XPath identifying the element to wait for before continuing.
     */
    #[JsonProperty('waitFor')]
    public ?string $waitFor;

    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemSelect $select A selector/value pair used by fill, select, and clickButtonByValue instructions.
     */
    #[JsonProperty('select')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemSelect $select;

    /**
     * @var ?string $jsExe Execute JavaScript action: JavaScript code to execute inside the page context.
     */
    #[JsonProperty('jsExe')]
    public ?string $jsExe;

    /**
     * @var ?array<array<string, mixed>> $conditionalCheck Conditional check action: list of conditional steps, each supporting if-<method> and else-<method> keys with conditions, executed based on element state.
     */
    #[JsonProperty('conditionalCheck'), ArrayType([['string' => 'mixed']])]
    public ?array $conditionalCheck;

    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue $clickButtonByValue A selector/value pair used by fill, select, and clickButtonByValue instructions.
     */
    #[JsonProperty('clickButtonByValue')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue $clickButtonByValue;

    /**
     * @var ?array<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItem> $generalImageCaptcha Image captcha solver action: instructions for solving image-based captchas using a selected model.
     */
    #[JsonProperty('generalImageCaptcha'), ArrayType([WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItem::class])]
    public ?array $generalImageCaptcha;

    /**
     * @var ?array<string> $blockElement Block element action: list of CSS selectors or XPaths for elements to block or hide on the page.
     */
    #[JsonProperty('blockElement'), ArrayType(['string'])]
    public ?array $blockElement;

    /**
     * @var ?array<string, string> $extract Maps arbitrary output field names to CSS or XPath selectors. Each key becomes a field in the response's extractedData object.
     */
    #[JsonProperty('extract'), ArrayType(['string' => 'string'])]
    public ?array $extract;

    /**
     * @var ?array<WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptchaItem> $fillImageCaptcha Fill image captcha action: captures and fills image-based captcha values automatically.
     */
    #[JsonProperty('fillImageCaptcha'), ArrayType([WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptchaItem::class])]
    public ?array $fillImageCaptcha;

    /**
     * @var ?string $switchToIframe Switch to iframe action: switches the browser context into an iframe identified by name or ID.
     */
    #[JsonProperty('switchToIframe')]
    public ?string $switchToIframe;

    /**
     * @var ?bool $switchToParentFrame Switch to parent frame action: returns the browser context from an iframe back to its parent frame.
     */
    #[JsonProperty('switchToParentFrame')]
    public ?bool $switchToParentFrame;

    /**
     * @var ?WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha $resolveAudioCaptcha Selectors for locating and solving a single audio CAPTCHA challenge.
     */
    #[JsonProperty('resolveAudioCaptcha')]
    public ?WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha $resolveAudioCaptcha;

    /**
     * @var ?string $screenshot Screenshot action: captures a screenshot of the current page state. Can be a boolean-like value or a selector.
     */
    #[JsonProperty('screenshot')]
    public ?string $screenshot;

    /**
     * @var ?string $saveimage Save image action: saves an image from the page by CSS selector or element ID.
     */
    #[JsonProperty('saveimage')]
    public ?string $saveimage;

    /**
     * @param array{
     *   fill?: ?WebScrapeRequestBodyBlockUrlInstructionsItemFill,
     *   click?: ?string,
     *   clickIfExist?: ?string,
     *   enter?: ?string,
     *   newTab?: ?bool,
     *   moveToRelativeTab?: ?int,
     *   wait?: ?int,
     *   waitFor?: ?string,
     *   select?: ?WebScrapeRequestBodyBlockUrlInstructionsItemSelect,
     *   jsExe?: ?string,
     *   conditionalCheck?: ?array<array<string, mixed>>,
     *   clickButtonByValue?: ?WebScrapeRequestBodyBlockUrlInstructionsItemClickButtonByValue,
     *   generalImageCaptcha?: ?array<WebScrapeRequestBodyBlockUrlInstructionsItemGeneralImageCaptchaItem>,
     *   blockElement?: ?array<string>,
     *   extract?: ?array<string, string>,
     *   fillImageCaptcha?: ?array<WebScrapeRequestBodyBlockUrlInstructionsItemFillImageCaptchaItem>,
     *   switchToIframe?: ?string,
     *   switchToParentFrame?: ?bool,
     *   resolveAudioCaptcha?: ?WebScrapeRequestBodyBlockUrlInstructionsItemResolveAudioCaptcha,
     *   screenshot?: ?string,
     *   saveimage?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fill = $values['fill'] ?? null;
        $this->click = $values['click'] ?? null;
        $this->clickIfExist = $values['clickIfExist'] ?? null;
        $this->enter = $values['enter'] ?? null;
        $this->newTab = $values['newTab'] ?? null;
        $this->moveToRelativeTab = $values['moveToRelativeTab'] ?? null;
        $this->wait = $values['wait'] ?? null;
        $this->waitFor = $values['waitFor'] ?? null;
        $this->select = $values['select'] ?? null;
        $this->jsExe = $values['jsExe'] ?? null;
        $this->conditionalCheck = $values['conditionalCheck'] ?? null;
        $this->clickButtonByValue = $values['clickButtonByValue'] ?? null;
        $this->generalImageCaptcha = $values['generalImageCaptcha'] ?? null;
        $this->blockElement = $values['blockElement'] ?? null;
        $this->extract = $values['extract'] ?? null;
        $this->fillImageCaptcha = $values['fillImageCaptcha'] ?? null;
        $this->switchToIframe = $values['switchToIframe'] ?? null;
        $this->switchToParentFrame = $values['switchToParentFrame'] ?? null;
        $this->resolveAudioCaptcha = $values['resolveAudioCaptcha'] ?? null;
        $this->screenshot = $values['screenshot'] ?? null;
        $this->saveimage = $values['saveimage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
