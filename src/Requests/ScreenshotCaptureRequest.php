<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\ScreenshotCaptureRequestOutput;
use Apifreaks\Types\ScreenshotCaptureRequestFileType;
use Apifreaks\Types\ScreenshotCaptureRequestWaitForEvent;
use Apifreaks\Types\ScreenshotCaptureRequestScrollSpeed;
use Apifreaks\Types\ScreenshotCaptureRequestFormat;
use Apifreaks\Types\ScreenshotCaptureRequestOcrModel;
use Apifreaks\Types\ScreenshotCaptureRequestPdfOptionsFormat;
use Apifreaks\Types\ScreenshotCaptureRequestPdfOptionsMedia;

class ScreenshotCaptureRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<ScreenshotCaptureRequestOutput> $output Output format for screenshot results. The SDKs support only `json`, which returns metadata with the captured file's URL in `screenshot`; download the file from that URL. (The API's `output=image`, which returns the raw file, is not supported by the SDK methods.)
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
     * @var ?string $captchaError CSS selector of the message shown for a wrong answer. While it is visible, the solver tries again.
     */
    public ?string $captchaError;

    /**
     * @var ?string $captchaImage CSS selector of the captcha picture. Required when solve_captcha is true.
     */
    public ?string $captchaImage;

    /**
     * @var ?string $captchaInput CSS selector of the box the answer is typed into. Required when solve_captcha is true.
     */
    public ?string $captchaInput;

    /**
     * @var ?string $captchaRefresh CSS selector of the control that loads a new captcha picture before the next try.
     */
    public ?string $captchaRefresh;

    /**
     * @var ?int $captchaRetries Number of guesses the solver makes, from 1 to 5.
     */
    public ?int $captchaRetries;

    /**
     * @var ?string $captchaSubmit CSS selector of the button to click after the answer is typed.
     */
    public ?string $captchaSubmit;

    /**
     * @var ?bool $classicProxy Loads the page through a datacenter proxy. Adds 20 credits per request. Ignored when premium_proxy is true or a custom proxy is set.
     */
    public ?bool $classicProxy;

    /**
     * @var ?int $clickRecursion Number of times to click the selector (when set via `selector_to_click`).
     */
    public ?int $clickRecursion;

    /**
     * @var ?string $country Two-letter country code, such as US or DE, for the exit address of classic_proxy or premium_proxy. Ignored when you send your own proxy. Any two-letter code is sent, including one that is not listed. Classic proxy countries: BG, GE, DE, HN, MD, UA, GB, US. Premium proxy countries: AF, AL, DZ, AO, AG, AR, AM, AW, AU, AT, AZ, BS, BH, BD, BB, BY, BE, BZ, BJ, BT, BO, BQ, BA, BW, BR, BN, BG, BF, BI, CV, KH, CM, CA, KY, CF, TD, CL, CN, CO, KM, CG, CR, CI, HR, CU, CW, CY, CZ, CD, DK, DJ, DM, DO, EC, EG, SV, GQ, EE, SZ, ET, FO, FJ, FI, FR, GF, PF, GA, GM, GE, DE, GH, GI, GR, GL, GD, GP, GU, GT, GG, GN, GW, GY, HT, HN, HK, HU, IS, IN, ID, IR, IQ, IE, IL, IT, JM, JP, JE, JO, KZ, KE, XK, KW, KG, LA, LV, LB, LS, LR, LY, LT, MO, MG, MW, MY, MV, ML, MT, MQ, MR, MU, YT, MX, MD, MN, ME, MA, MZ, MM, NA, NP, NL, NC, NZ, NI, NE, NG, MK, NO, OM, PK, PS, PA, PG, PY, PE, PH, PL, PT, PR, QA, RE, RO, RU, RW, KN, LC, VC, WS, SA, SN, RS, SC, SL, SG, SK, SI, SB, SO, ZA, KR, SS, ES, LK, SD, SR, SE, CH, SY, TW, TJ, TZ, TH, TL, TG, TO, TT, TN, TR, TM, UG, UA, AE, GB, US, UY, UZ, VE, VN, YE, ZM, ZW.
     */
    public ?string $country;

    /**
     * @var ?bool $extractMarkdown Extracts rendered page content as a structured .md (Markdown) file. Preserves headings, lists, links. Only with output=json.
     */
    public ?bool $extractMarkdown;

    /**
     * @var ?value-of<ScreenshotCaptureRequestFormat> $format Response format: json (default).
     */
    public ?string $format;

    /**
     * @var ?bool $getImageUrls Extracts all image URLs from the rendered DOM and returns them in structured format. Only with output=json.
     */
    public ?bool $getImageUrls;

    /**
     * @var ?bool $gpu Renders the page with a GPU, including WebGL and canvas content. Adds 20 credits per request.
     */
    public ?bool $gpu;

    /**
     * @var ?string $markdown Markdown to render instead of loading a URL. Works like custom_html, so you can capture a README or notes without hosting a page.
     */
    public ?string $markdown;

    /**
     * @var ?value-of<ScreenshotCaptureRequestOcrModel> $ocrModel Recognition model used by the captcha solver: mini-ocr-v1 (default) or ocr-v1.
     */
    public ?string $ocrModel;

    /**
     * @var ?value-of<ScreenshotCaptureRequestPdfOptionsFormat> $pdfOptionsFormat Paper size of the PDF. Applies when file_type is PDF. Without it, width and height are used if set, otherwise the page renders as one long page: A0, A1, A2, A3, A4, A5, A6, Letter, Legal, Tabloid, or Ledger.
     */
    public ?string $pdfOptionsFormat;

    /**
     * @var ?bool $pdfOptionsLandscape Renders the PDF in landscape orientation, swapping the width and height of the paper size. Applies when file_type is PDF.
     */
    public ?bool $pdfOptionsLandscape;

    /**
     * @var ?value-of<ScreenshotCaptureRequestPdfOptionsMedia> $pdfOptionsMedia CSS media type used to render the PDF: print or screen.
     */
    public ?string $pdfOptionsMedia;

    /**
     * @var ?string $pdfOptionsPageRange Pages to keep in the PDF, as start-end, for example 1-3 or 5-5. Pages are rendered first and then trimmed. Has no effect on a single-page PDF. Applies when file_type is PDF.
     */
    public ?string $pdfOptionsPageRange;

    /**
     * @var ?bool $pdfOptionsPrintBackground Includes background colors and images in the PDF. Applies when file_type is PDF.
     */
    public ?bool $pdfOptionsPrintBackground;

    /**
     * @var ?bool $premiumProxy Loads the page through a residential proxy. Adds 200 credits per request. Used instead of classic_proxy.
     */
    public ?bool $premiumProxy;

    /**
     * @var ?int $scrollDelay Delay in milliseconds between scroll steps when `lazy_load` is enabled. Use higher values for heavy pages.
     */
    public ?int $scrollDelay;

    /**
     * @var ?string $selectorToClick CSS selector for an element to click before capturing the screenshot. Useful for opening dropdowns, modals, or triggering content.
     */
    public ?string $selectorToClick;

    /**
     * @var ?bool $solveCaptcha Solves a captcha made of text drawn in a picture, then takes the screenshot. Requires captcha_image and captcha_input. Adds 20 credits per request.
     */
    public ?bool $solveCaptcha;

    /**
     * @var ?bool $stealth Makes the browser look like a regular visitor for pages that block automated traffic. No extra credits.
     */
    public ?bool $stealth;

    /**
     * @var ?string $timezone IANA timezone the browser uses while rendering, such as Asia/Karachi or Europe/London. Useful for clocks and localized dates.
     */
    public ?string $timezone;

    /**
     * @var ?bool $video Records visible viewport only for a specified duration. Use with `duration` parameter. Ideal for dashboards and animations.
     */
    public ?bool $video;

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
     *   captchaError?: ?string,
     *   captchaImage?: ?string,
     *   captchaInput?: ?string,
     *   captchaRefresh?: ?string,
     *   captchaRetries?: ?int,
     *   captchaSubmit?: ?string,
     *   classicProxy?: ?bool,
     *   clickRecursion?: ?int,
     *   country?: ?string,
     *   extractMarkdown?: ?bool,
     *   format?: ?value-of<ScreenshotCaptureRequestFormat>,
     *   getImageUrls?: ?bool,
     *   gpu?: ?bool,
     *   markdown?: ?string,
     *   ocrModel?: ?value-of<ScreenshotCaptureRequestOcrModel>,
     *   pdfOptionsFormat?: ?value-of<ScreenshotCaptureRequestPdfOptionsFormat>,
     *   pdfOptionsLandscape?: ?bool,
     *   pdfOptionsMedia?: ?value-of<ScreenshotCaptureRequestPdfOptionsMedia>,
     *   pdfOptionsPageRange?: ?string,
     *   pdfOptionsPrintBackground?: ?bool,
     *   premiumProxy?: ?bool,
     *   scrollDelay?: ?int,
     *   selectorToClick?: ?string,
     *   solveCaptcha?: ?bool,
     *   stealth?: ?bool,
     *   timezone?: ?string,
     *   video?: ?bool,
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
        $this->captchaError = $values['captchaError'] ?? null;
        $this->captchaImage = $values['captchaImage'] ?? null;
        $this->captchaInput = $values['captchaInput'] ?? null;
        $this->captchaRefresh = $values['captchaRefresh'] ?? null;
        $this->captchaRetries = $values['captchaRetries'] ?? null;
        $this->captchaSubmit = $values['captchaSubmit'] ?? null;
        $this->classicProxy = $values['classicProxy'] ?? null;
        $this->clickRecursion = $values['clickRecursion'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->extractMarkdown = $values['extractMarkdown'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->getImageUrls = $values['getImageUrls'] ?? null;
        $this->gpu = $values['gpu'] ?? null;
        $this->markdown = $values['markdown'] ?? null;
        $this->ocrModel = $values['ocrModel'] ?? null;
        $this->pdfOptionsFormat = $values['pdfOptionsFormat'] ?? null;
        $this->pdfOptionsLandscape = $values['pdfOptionsLandscape'] ?? null;
        $this->pdfOptionsMedia = $values['pdfOptionsMedia'] ?? null;
        $this->pdfOptionsPageRange = $values['pdfOptionsPageRange'] ?? null;
        $this->pdfOptionsPrintBackground = $values['pdfOptionsPrintBackground'] ?? null;
        $this->premiumProxy = $values['premiumProxy'] ?? null;
        $this->scrollDelay = $values['scrollDelay'] ?? null;
        $this->selectorToClick = $values['selectorToClick'] ?? null;
        $this->solveCaptcha = $values['solveCaptcha'] ?? null;
        $this->stealth = $values['stealth'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
        $this->video = $values['video'] ?? null;
    }
}
