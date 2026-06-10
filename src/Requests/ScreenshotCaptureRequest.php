<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ScreenshotCaptureRequestOutput;
use Apifreaks\Types\ScreenshotCaptureRequestFileType;
use Apifreaks\Types\ScreenshotCaptureRequestWaitForEvent;
use Apifreaks\Types\ScreenshotCaptureRequestScrollSpeed;

class ScreenshotCaptureRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ScreenshotCaptureRequestOutput> $output Output format for screenshot results
     */
    public ?string $output;

    /**
     * @var ?value-of<ScreenshotCaptureRequestFileType> $fileType File type for screenshot output
     */
    public ?string $fileType;

    /**
     * @var string $url URLs to capture screenshots of
     */
    public string $url;

    /**
     * @var ?int $width Browser viewport width in pixels
     */
    public ?int $width;

    /**
     * @var ?int $height Browser viewport height in pixels
     */
    public ?int $height;

    /**
     * @var ?bool $fullPage Capture a full-page screenshot
     */
    public ?bool $fullPage;

    /**
     * @var ?bool $fresh Bypass cache and take a fresh screenshot
     */
    public ?bool $fresh;

    /**
     * @var ?bool $noCookieBanners Remove cookie banners from the screenshot
     */
    public ?bool $noCookieBanners;

    /**
     * @var ?bool $enableCaching Enable caching for repeated requests
     */
    public ?bool $enableCaching;

    /**
     * @var ?bool $blockAds Block advertisements on the page
     */
    public ?bool $blockAds;

    /**
     * @var ?bool $blockChatWidgets Block chat widget scripts from loading
     */
    public ?bool $blockChatWidgets;

    /**
     * @var ?bool $extractText Extract visible text from the page
     */
    public ?bool $extractText;

    /**
     * @var ?bool $extractHtml Extract HTML content of the page
     */
    public ?bool $extractHtml;

    /**
     * @var ?bool $destroyScreenshot Auto-destroy screenshot after fetch
     */
    public ?bool $destroyScreenshot;

    /**
     * @var ?bool $lazyLoad Enable lazy-loading content before screenshot
     */
    public ?bool $lazyLoad;

    /**
     * @var ?bool $retina Capture screenshot in high-DPI (Retina) mode
     */
    public ?bool $retina;

    /**
     * @var ?bool $darkMode Render page in dark mode
     */
    public ?bool $darkMode;

    /**
     * @var ?bool $blockTracking Block common user-tracking scripts
     */
    public ?bool $blockTracking;

    /**
     * @var ?bool $enableIncognito Enable private/incognito mode for browser session
     */
    public ?bool $enableIncognito;

    /**
     * @var ?bool $omitBackground Omit background color (transparent background)
     */
    public ?bool $omitBackground;

    /**
     * @var ?int $thumbnailWidth Thumbnail width in pixels
     */
    public ?int $thumbnailWidth;

    /**
     * @var ?int $adjustTop Adjust top in pixels
     */
    public ?int $adjustTop;

    /**
     * @var ?value-of<ScreenshotCaptureRequestWaitForEvent> $waitForEvent Wait for a specific load event before capturing the screenshot.
     */
    public ?string $waitForEvent;

    /**
     * @var ?int $grayscale Range:0 to 100 for grayscale filter
     */
    public ?int $grayscale;

    /**
     * @var ?int $delay How many milliseconds to wait before taking the screenshot
     */
    public ?int $delay;

    /**
     * @var ?int $timeout Maximum timeout in milliseconds. Defalut is `10,000`
     */
    public ?int $timeout;

    /**
     * @var ?int $ttl Number of seconds the screenshot should be cached
     */
    public ?int $ttl;

    /**
     * @var ?int $clipX X position of the clipping rectangle in pixels
     */
    public ?int $clipX;

    /**
     * @var ?int $clipY Y position of the clipping rectangle in pixels
     */
    public ?int $clipY;

    /**
     * @var ?int $clipWidth Width of the clipping rectangle in pixels
     */
    public ?int $clipWidth;

    /**
     * @var ?int $clipHeight Height of the clipping rectangle in pixels
     */
    public ?int $clipHeight;

    /**
     * @var ?string $cssUrl URL to CSS file
     */
    public ?string $cssUrl;

    /**
     * @var ?string $css Your custom CSS code
     */
    public ?string $css;

    /**
     * @var ?string $jsUrl URL to JS file
     */
    public ?string $jsUrl;

    /**
     * @var ?string $js Your JS code
     */
    public ?string $js;

    /**
     * @var ?bool $blockJs Block Scripts
     */
    public ?bool $blockJs;

    /**
     * @var ?bool $blockStylesheets Block Stylesheets
     */
    public ?bool $blockStylesheets;

    /**
     * @var ?bool $blockImages Block Images
     */
    public ?bool $blockImages;

    /**
     * @var ?bool $blockMedia Block Media
     */
    public ?bool $blockMedia;

    /**
     * @var ?bool $blockFont Block Fonts
     */
    public ?bool $blockFont;

    /**
     * @var ?bool $blockTextTrack Block Text Tracks
     */
    public ?bool $blockTextTrack;

    /**
     * @var ?bool $blockXhr Block XHR Requests
     */
    public ?bool $blockXhr;

    /**
     * @var ?bool $blockFetch Block Fetch Requests
     */
    public ?bool $blockFetch;

    /**
     * @var ?bool $blockEventSource Block Event Source
     */
    public ?bool $blockEventSource;

    /**
     * @var ?bool $blockWebSocket Block Web Sockets
     */
    public ?bool $blockWebSocket;

    /**
     * @var ?bool $blockManifest Block Manifest
     */
    public ?bool $blockManifest;

    /**
     * @var ?string $blockSpecificRequests Comma- or newline-separated list of specific requests to block. Each line and comma are treated as separate requests for processing. Example: https://example.com, https://example.js
     */
    public ?string $blockSpecificRequests;

    /**
     * Comma-separated list of indexed CSS selectors to blur.
     * Format: `index:<selector>`, e.g., `0:.banner,1:#ads`.
     *
     * @var ?string $blurSelector
     */
    public ?string $blurSelector;

    /**
     * Comma-separated list of indexed CSS selectors to blur.
     * Format: `index:<selector>`, e.g., `0:.banner,1:#ads`.
     *
     * @var ?string $removeSelector
     */
    public ?string $removeSelector;

    /**
     * Specify a meaningful & unique file name to easily identify the screenshot result.
     * Avoid using spaces or special characters; use hyphens or underscores to separate words.
     *
     * @var ?string $resultFileName
     */
    public ?string $resultFileName;

    /**
     * @var ?bool $scrollingScreenshot **`Scrolling Screenshot`**: Capture a long scrolling screenshot. When true, disable `fullPage` and `freshScreenshot`.
     */
    public ?bool $scrollingScreenshot;

    /**
     * @var ?value-of<ScreenshotCaptureRequestScrollSpeed> $scrollSpeed Speed of scrolling during the screenshot.
     */
    public ?string $scrollSpeed;

    /**
     * @var ?bool $scrollBack If true, the scroll will reverse back to the top after reaching the bottom.
     */
    public ?bool $scrollBack;

    /**
     * @var ?bool $startImmediately If true, the scrolling capture will start immediately upon page load.
     */
    public ?bool $startImmediately;

    /**
     * @var ?bool $multipleScrolling If true, multiple scrolling screenshots will be taken at different viewport sizes.
     */
    public ?bool $multipleScrolling;

    /**
     * @var ?array<string> $sizes Comma-separated list of viewport sizes in the format index:XXw:YYh. Example: sizes=0:120w:300h,1:240w:500h
     */
    public ?array $sizes;

    /**
     * @var ?float $duration Duration in seconds for the scrolling capture. Acceptable range: 0 to 100 seconds.
     */
    public ?float $duration;

    /**
     * @var ?bool $failOnError
     */
    public ?bool $failOnError;

    /**
     * @var ?float $longitude
     */
    public ?float $longitude;

    /**
     * @var ?float $latitude
     */
    public ?float $latitude;

    /**
     * @var ?string $proxy
     */
    public ?string $proxy;

    /**
     * @var ?string $headers
     */
    public ?string $headers;

    /**
     * @var ?string $cookies
     */
    public ?string $cookies;

    /**
     * @var ?string $scrollToElement
     */
    public ?string $scrollToElement;

    /**
     * @var ?string $selector
     */
    public ?string $selector;

    /**
     * @var ?string $userAgent
     */
    public ?string $userAgent;

    /**
     * @var ?string $acceptLanguages
     */
    public ?string $acceptLanguages;

    /**
     * @var ?string $customHtml
     */
    public ?string $customHtml;

    /**
     * @var ?float $imageQuality
     */
    public ?float $imageQuality;

    /**
     * @param array{
     *   apiKey: string,
     *   url: string,
     *   output?: ?value-of<ScreenshotCaptureRequestOutput>,
     *   fileType?: ?value-of<ScreenshotCaptureRequestFileType>,
     *   width?: ?int,
     *   height?: ?int,
     *   fullPage?: ?bool,
     *   fresh?: ?bool,
     *   noCookieBanners?: ?bool,
     *   enableCaching?: ?bool,
     *   blockAds?: ?bool,
     *   blockChatWidgets?: ?bool,
     *   extractText?: ?bool,
     *   extractHtml?: ?bool,
     *   destroyScreenshot?: ?bool,
     *   lazyLoad?: ?bool,
     *   retina?: ?bool,
     *   darkMode?: ?bool,
     *   blockTracking?: ?bool,
     *   enableIncognito?: ?bool,
     *   omitBackground?: ?bool,
     *   thumbnailWidth?: ?int,
     *   adjustTop?: ?int,
     *   waitForEvent?: ?value-of<ScreenshotCaptureRequestWaitForEvent>,
     *   grayscale?: ?int,
     *   delay?: ?int,
     *   timeout?: ?int,
     *   ttl?: ?int,
     *   clipX?: ?int,
     *   clipY?: ?int,
     *   clipWidth?: ?int,
     *   clipHeight?: ?int,
     *   cssUrl?: ?string,
     *   css?: ?string,
     *   jsUrl?: ?string,
     *   js?: ?string,
     *   blockJs?: ?bool,
     *   blockStylesheets?: ?bool,
     *   blockImages?: ?bool,
     *   blockMedia?: ?bool,
     *   blockFont?: ?bool,
     *   blockTextTrack?: ?bool,
     *   blockXhr?: ?bool,
     *   blockFetch?: ?bool,
     *   blockEventSource?: ?bool,
     *   blockWebSocket?: ?bool,
     *   blockManifest?: ?bool,
     *   blockSpecificRequests?: ?string,
     *   blurSelector?: ?string,
     *   removeSelector?: ?string,
     *   resultFileName?: ?string,
     *   scrollingScreenshot?: ?bool,
     *   scrollSpeed?: ?value-of<ScreenshotCaptureRequestScrollSpeed>,
     *   scrollBack?: ?bool,
     *   startImmediately?: ?bool,
     *   multipleScrolling?: ?bool,
     *   sizes?: ?array<string>,
     *   duration?: ?float,
     *   failOnError?: ?bool,
     *   longitude?: ?float,
     *   latitude?: ?float,
     *   proxy?: ?string,
     *   headers?: ?string,
     *   cookies?: ?string,
     *   scrollToElement?: ?string,
     *   selector?: ?string,
     *   userAgent?: ?string,
     *   acceptLanguages?: ?string,
     *   customHtml?: ?string,
     *   imageQuality?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->output = $values['output'] ?? null;
        $this->fileType = $values['fileType'] ?? null;
        $this->url = $values['url'];
        $this->width = $values['width'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->fullPage = $values['fullPage'] ?? null;
        $this->fresh = $values['fresh'] ?? null;
        $this->noCookieBanners = $values['noCookieBanners'] ?? null;
        $this->enableCaching = $values['enableCaching'] ?? null;
        $this->blockAds = $values['blockAds'] ?? null;
        $this->blockChatWidgets = $values['blockChatWidgets'] ?? null;
        $this->extractText = $values['extractText'] ?? null;
        $this->extractHtml = $values['extractHtml'] ?? null;
        $this->destroyScreenshot = $values['destroyScreenshot'] ?? null;
        $this->lazyLoad = $values['lazyLoad'] ?? null;
        $this->retina = $values['retina'] ?? null;
        $this->darkMode = $values['darkMode'] ?? null;
        $this->blockTracking = $values['blockTracking'] ?? null;
        $this->enableIncognito = $values['enableIncognito'] ?? null;
        $this->omitBackground = $values['omitBackground'] ?? null;
        $this->thumbnailWidth = $values['thumbnailWidth'] ?? null;
        $this->adjustTop = $values['adjustTop'] ?? null;
        $this->waitForEvent = $values['waitForEvent'] ?? null;
        $this->grayscale = $values['grayscale'] ?? null;
        $this->delay = $values['delay'] ?? null;
        $this->timeout = $values['timeout'] ?? null;
        $this->ttl = $values['ttl'] ?? null;
        $this->clipX = $values['clipX'] ?? null;
        $this->clipY = $values['clipY'] ?? null;
        $this->clipWidth = $values['clipWidth'] ?? null;
        $this->clipHeight = $values['clipHeight'] ?? null;
        $this->cssUrl = $values['cssUrl'] ?? null;
        $this->css = $values['css'] ?? null;
        $this->jsUrl = $values['jsUrl'] ?? null;
        $this->js = $values['js'] ?? null;
        $this->blockJs = $values['blockJs'] ?? null;
        $this->blockStylesheets = $values['blockStylesheets'] ?? null;
        $this->blockImages = $values['blockImages'] ?? null;
        $this->blockMedia = $values['blockMedia'] ?? null;
        $this->blockFont = $values['blockFont'] ?? null;
        $this->blockTextTrack = $values['blockTextTrack'] ?? null;
        $this->blockXhr = $values['blockXhr'] ?? null;
        $this->blockFetch = $values['blockFetch'] ?? null;
        $this->blockEventSource = $values['blockEventSource'] ?? null;
        $this->blockWebSocket = $values['blockWebSocket'] ?? null;
        $this->blockManifest = $values['blockManifest'] ?? null;
        $this->blockSpecificRequests = $values['blockSpecificRequests'] ?? null;
        $this->blurSelector = $values['blurSelector'] ?? null;
        $this->removeSelector = $values['removeSelector'] ?? null;
        $this->resultFileName = $values['resultFileName'] ?? null;
        $this->scrollingScreenshot = $values['scrollingScreenshot'] ?? null;
        $this->scrollSpeed = $values['scrollSpeed'] ?? null;
        $this->scrollBack = $values['scrollBack'] ?? null;
        $this->startImmediately = $values['startImmediately'] ?? null;
        $this->multipleScrolling = $values['multipleScrolling'] ?? null;
        $this->sizes = $values['sizes'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->failOnError = $values['failOnError'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->proxy = $values['proxy'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->cookies = $values['cookies'] ?? null;
        $this->scrollToElement = $values['scrollToElement'] ?? null;
        $this->selector = $values['selector'] ?? null;
        $this->userAgent = $values['userAgent'] ?? null;
        $this->acceptLanguages = $values['acceptLanguages'] ?? null;
        $this->customHtml = $values['customHtml'] ?? null;
        $this->imageQuality = $values['imageQuality'] ?? null;
    }
}
