<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkScreenshotCaptureResponseResultsItemUrl extends JsonSerializableType
{
    /**
     * @var string $screenshot
     */
    #[JsonProperty('screenshot')]
    public string $screenshot;

    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('created_at')]
    public string $createdAt;

    /**
     * @var string $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var string $ttl
     */
    #[JsonProperty('ttl')]
    public string $ttl;

    /**
     * @var ?string $fileType
     */
    #[JsonProperty('file_type')]
    public ?string $fileType;

    /**
     * @var ?string $extractedHtml
     */
    #[JsonProperty('extracted_html')]
    public ?string $extractedHtml;

    /**
     * @var ?bool $omitBackground
     */
    #[JsonProperty('omit_background')]
    public ?bool $omitBackground;

    /**
     * @var ?bool $destroyScreenshot
     */
    #[JsonProperty('destroy_screenshot')]
    public ?bool $destroyScreenshot;

    /**
     * @var ?bool $failOnError
     */
    #[JsonProperty('fail_on_error')]
    public ?bool $failOnError;

    /**
     * @var ?float $longitude
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?float $latitude
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?string $proxy
     */
    #[JsonProperty('proxy')]
    public ?string $proxy;

    /**
     * @var ?bool $noCookieBanners
     */
    #[JsonProperty('no_cookie_banners')]
    public ?bool $noCookieBanners;

    /**
     * @var ?bool $blockAds
     */
    #[JsonProperty('block_ads')]
    public ?bool $blockAds;

    /**
     * @var ?string $headers
     */
    #[JsonProperty('headers')]
    public ?string $headers;

    /**
     * @var ?string $cookies
     */
    #[JsonProperty('cookies')]
    public ?string $cookies;

    /**
     * @var ?string $scrollToElement
     */
    #[JsonProperty('scroll_to_element')]
    public ?string $scrollToElement;

    /**
     * @var ?string $selector
     */
    #[JsonProperty('selector')]
    public ?string $selector;

    /**
     * @var ?string $blurSelector
     */
    #[JsonProperty('blur_selector')]
    public ?string $blurSelector;

    /**
     * @var ?string $removeSelector
     */
    #[JsonProperty('remove_selector')]
    public ?string $removeSelector;

    /**
     * @var ?string $css
     */
    #[JsonProperty('css')]
    public ?string $css;

    /**
     * @var ?string $cssUrl
     */
    #[JsonProperty('css_url')]
    public ?string $cssUrl;

    /**
     * @var ?string $js
     */
    #[JsonProperty('js')]
    public ?string $js;

    /**
     * @var ?string $jsUrl
     */
    #[JsonProperty('js_url')]
    public ?string $jsUrl;

    /**
     * @var ?string $userAgent
     */
    #[JsonProperty('user_agent')]
    public ?string $userAgent;

    /**
     * @var ?string $acceptLanguages
     */
    #[JsonProperty('accept_languages')]
    public ?string $acceptLanguages;

    /**
     * @var ?float $delay
     */
    #[JsonProperty('delay')]
    public ?float $delay;

    /**
     * @var ?float $thumbnailWidth
     */
    #[JsonProperty('thumbnail_width')]
    public ?float $thumbnailWidth;

    /**
     * @var ?string $output
     */
    #[JsonProperty('output')]
    public ?string $output;

    /**
     * @var ?bool $fresh
     */
    #[JsonProperty('fresh')]
    public ?bool $fresh;

    /**
     * @var ?bool $enableCaching
     */
    #[JsonProperty('enable_caching')]
    public ?bool $enableCaching;

    /**
     * @var ?bool $lazyLoad
     */
    #[JsonProperty('lazy_load')]
    public ?bool $lazyLoad;

    /**
     * @var ?bool $fullPage
     */
    #[JsonProperty('full_page')]
    public ?bool $fullPage;

    /**
     * @var ?bool $retina
     */
    #[JsonProperty('retina')]
    public ?bool $retina;

    /**
     * @var ?float $height
     */
    #[JsonProperty('height')]
    public ?float $height;

    /**
     * @var ?float $width
     */
    #[JsonProperty('width')]
    public ?float $width;

    /**
     * @var ?string $customHtml
     */
    #[JsonProperty('custom_html')]
    public ?string $customHtml;

    /**
     * @var ?bool $blockChatWidgets
     */
    #[JsonProperty('block_chat_widgets')]
    public ?bool $blockChatWidgets;

    /**
     * @var ?bool $blockJs
     */
    #[JsonProperty('block_js')]
    public ?bool $blockJs;

    /**
     * @var ?bool $blockStylesheets
     */
    #[JsonProperty('block_stylesheets')]
    public ?bool $blockStylesheets;

    /**
     * @var ?bool $blockImages
     */
    #[JsonProperty('block_images')]
    public ?bool $blockImages;

    /**
     * @var ?bool $blockMedia
     */
    #[JsonProperty('block_media')]
    public ?bool $blockMedia;

    /**
     * @var ?bool $blockFont
     */
    #[JsonProperty('block_font')]
    public ?bool $blockFont;

    /**
     * @var ?bool $blockTextTrack
     */
    #[JsonProperty('block_text_track')]
    public ?bool $blockTextTrack;

    /**
     * @var ?bool $blockXhr
     */
    #[JsonProperty('block_xhr')]
    public ?bool $blockXhr;

    /**
     * @var ?bool $blockFetch
     */
    #[JsonProperty('block_fetch')]
    public ?bool $blockFetch;

    /**
     * @var ?bool $blockEventSource
     */
    #[JsonProperty('block_event_source')]
    public ?bool $blockEventSource;

    /**
     * @var ?bool $blockWebSocket
     */
    #[JsonProperty('block_web_socket')]
    public ?bool $blockWebSocket;

    /**
     * @var ?bool $blockManifest
     */
    #[JsonProperty('block_manifest')]
    public ?bool $blockManifest;

    /**
     * @var ?string $blockSpecificRequests
     */
    #[JsonProperty('block_specific_requests')]
    public ?string $blockSpecificRequests;

    /**
     * @var ?float $adjustTop
     */
    #[JsonProperty('adjust_top')]
    public ?float $adjustTop;

    /**
     * @var ?float $imageQuality
     */
    #[JsonProperty('image_quality')]
    public ?float $imageQuality;

    /**
     * @var ?bool $extractHtml
     */
    #[JsonProperty('extract_html')]
    public ?bool $extractHtml;

    /**
     * @var ?bool $extractText
     */
    #[JsonProperty('extract_text')]
    public ?bool $extractText;

    /**
     * @var ?bool $darkMode
     */
    #[JsonProperty('dark_mode')]
    public ?bool $darkMode;

    /**
     * @var ?bool $blockTracking
     */
    #[JsonProperty('block_tracking')]
    public ?bool $blockTracking;

    /**
     * @var ?string $waitForEvent
     */
    #[JsonProperty('wait_for_event')]
    public ?string $waitForEvent;

    /**
     * @var ?float $grayscale
     */
    #[JsonProperty('grayscale')]
    public ?float $grayscale;

    /**
     * @var ?string $resultFileName
     */
    #[JsonProperty('result_file_name')]
    public ?string $resultFileName;

    /**
     * @var ?bool $enableIncognito
     */
    #[JsonProperty('enable_incognito')]
    public ?bool $enableIncognito;

    /**
     * @var ?float $timeout
     */
    #[JsonProperty('timeout')]
    public ?float $timeout;

    /**
     * @var ?bool $scrollingScreenshot
     */
    #[JsonProperty('scrolling_screenshot')]
    public ?bool $scrollingScreenshot;

    /**
     * @var ?bool $multipleScrolling
     */
    #[JsonProperty('multiple_scrolling')]
    public ?bool $multipleScrolling;

    /**
     * @var ?string $scrollSpeed
     */
    #[JsonProperty('scroll_speed')]
    public ?string $scrollSpeed;

    /**
     * @var ?float $duration
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?bool $scrollBack
     */
    #[JsonProperty('scroll_back')]
    public ?bool $scrollBack;

    /**
     * @var ?bool $startImmediately
     */
    #[JsonProperty('start_immediately')]
    public ?bool $startImmediately;

    /**
     * @var ?array<string, mixed> $clip
     */
    #[JsonProperty('clip'), ArrayType(['string' => 'mixed'])]
    public ?array $clip;

    /**
     * @var ?array<array<string, mixed>> $sizes
     */
    #[JsonProperty('sizes'), ArrayType([['string' => 'mixed']])]
    public ?array $sizes;

    /**
     * @param array{
     *   screenshot: string,
     *   url: string,
     *   createdAt: string,
     *   format: string,
     *   ttl: string,
     *   fileType?: ?string,
     *   extractedHtml?: ?string,
     *   omitBackground?: ?bool,
     *   destroyScreenshot?: ?bool,
     *   failOnError?: ?bool,
     *   longitude?: ?float,
     *   latitude?: ?float,
     *   proxy?: ?string,
     *   noCookieBanners?: ?bool,
     *   blockAds?: ?bool,
     *   headers?: ?string,
     *   cookies?: ?string,
     *   scrollToElement?: ?string,
     *   selector?: ?string,
     *   blurSelector?: ?string,
     *   removeSelector?: ?string,
     *   css?: ?string,
     *   cssUrl?: ?string,
     *   js?: ?string,
     *   jsUrl?: ?string,
     *   userAgent?: ?string,
     *   acceptLanguages?: ?string,
     *   delay?: ?float,
     *   thumbnailWidth?: ?float,
     *   output?: ?string,
     *   fresh?: ?bool,
     *   enableCaching?: ?bool,
     *   lazyLoad?: ?bool,
     *   fullPage?: ?bool,
     *   retina?: ?bool,
     *   height?: ?float,
     *   width?: ?float,
     *   customHtml?: ?string,
     *   blockChatWidgets?: ?bool,
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
     *   adjustTop?: ?float,
     *   imageQuality?: ?float,
     *   extractHtml?: ?bool,
     *   extractText?: ?bool,
     *   darkMode?: ?bool,
     *   blockTracking?: ?bool,
     *   waitForEvent?: ?string,
     *   grayscale?: ?float,
     *   resultFileName?: ?string,
     *   enableIncognito?: ?bool,
     *   timeout?: ?float,
     *   scrollingScreenshot?: ?bool,
     *   multipleScrolling?: ?bool,
     *   scrollSpeed?: ?string,
     *   duration?: ?float,
     *   scrollBack?: ?bool,
     *   startImmediately?: ?bool,
     *   clip?: ?array<string, mixed>,
     *   sizes?: ?array<array<string, mixed>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->screenshot = $values['screenshot'];
        $this->url = $values['url'];
        $this->createdAt = $values['createdAt'];
        $this->format = $values['format'];
        $this->ttl = $values['ttl'];
        $this->fileType = $values['fileType'] ?? null;
        $this->extractedHtml = $values['extractedHtml'] ?? null;
        $this->omitBackground = $values['omitBackground'] ?? null;
        $this->destroyScreenshot = $values['destroyScreenshot'] ?? null;
        $this->failOnError = $values['failOnError'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->proxy = $values['proxy'] ?? null;
        $this->noCookieBanners = $values['noCookieBanners'] ?? null;
        $this->blockAds = $values['blockAds'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->cookies = $values['cookies'] ?? null;
        $this->scrollToElement = $values['scrollToElement'] ?? null;
        $this->selector = $values['selector'] ?? null;
        $this->blurSelector = $values['blurSelector'] ?? null;
        $this->removeSelector = $values['removeSelector'] ?? null;
        $this->css = $values['css'] ?? null;
        $this->cssUrl = $values['cssUrl'] ?? null;
        $this->js = $values['js'] ?? null;
        $this->jsUrl = $values['jsUrl'] ?? null;
        $this->userAgent = $values['userAgent'] ?? null;
        $this->acceptLanguages = $values['acceptLanguages'] ?? null;
        $this->delay = $values['delay'] ?? null;
        $this->thumbnailWidth = $values['thumbnailWidth'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->fresh = $values['fresh'] ?? null;
        $this->enableCaching = $values['enableCaching'] ?? null;
        $this->lazyLoad = $values['lazyLoad'] ?? null;
        $this->fullPage = $values['fullPage'] ?? null;
        $this->retina = $values['retina'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->width = $values['width'] ?? null;
        $this->customHtml = $values['customHtml'] ?? null;
        $this->blockChatWidgets = $values['blockChatWidgets'] ?? null;
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
        $this->adjustTop = $values['adjustTop'] ?? null;
        $this->imageQuality = $values['imageQuality'] ?? null;
        $this->extractHtml = $values['extractHtml'] ?? null;
        $this->extractText = $values['extractText'] ?? null;
        $this->darkMode = $values['darkMode'] ?? null;
        $this->blockTracking = $values['blockTracking'] ?? null;
        $this->waitForEvent = $values['waitForEvent'] ?? null;
        $this->grayscale = $values['grayscale'] ?? null;
        $this->resultFileName = $values['resultFileName'] ?? null;
        $this->enableIncognito = $values['enableIncognito'] ?? null;
        $this->timeout = $values['timeout'] ?? null;
        $this->scrollingScreenshot = $values['scrollingScreenshot'] ?? null;
        $this->multipleScrolling = $values['multipleScrolling'] ?? null;
        $this->scrollSpeed = $values['scrollSpeed'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->scrollBack = $values['scrollBack'] ?? null;
        $this->startImmediately = $values['startImmediately'] ?? null;
        $this->clip = $values['clip'] ?? null;
        $this->sizes = $values['sizes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
