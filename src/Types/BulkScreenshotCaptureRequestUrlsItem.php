<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class BulkScreenshotCaptureRequestUrlsItem extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?string $acceptLanguages Sets the accepted languages for the HTTP request. This is sent as the Accept-Language header.
     */
    #[JsonProperty('accept_languages')]
    public ?string $acceptLanguages;

    /**
     * @var ?int $adjustTop Initial vertical scroll position in pixels before capture. Use to position mid-page content in viewport. Not supported for PDF.
     */
    #[JsonProperty('adjust_top')]
    public ?int $adjustTop;

    /**
     * @var ?bool $blockAds Blocks requests to known ad networks for cleaner, distraction-free screenshots.
     */
    #[JsonProperty('block_ads')]
    public ?bool $blockAds;

    /**
     * @var ?bool $blockChatWidgets Blocks live chat popups, support bubbles, and messaging interfaces.
     */
    #[JsonProperty('block_chat_widgets')]
    public ?bool $blockChatWidgets;

    /**
     * @var ?bool $blockEventSource Blocks EventSource (SSE) connections - prevents real-time data streams.
     */
    #[JsonProperty('block_event_source')]
    public ?bool $blockEventSource;

    /**
     * @var ?bool $blockFetch Blocks all Fetch API requests - stops async data loading.
     */
    #[JsonProperty('block_fetch')]
    public ?bool $blockFetch;

    /**
     * @var ?bool $blockFont Blocks external font files - page falls back to system defaults. Supported: woff, woff2, ttf, otf, eot.
     */
    #[JsonProperty('block_font')]
    public ?bool $blockFont;

    /**
     * @var ?bool $blockImages Blocks all image resources (jpg, png, gif, webp, svg, etc.) for faster rendering.
     */
    #[JsonProperty('block_images')]
    public ?bool $blockImages;

    /**
     * @var ?bool $blockJs Disables all JavaScript execution. Renders a static version of the page. Speeds up capture but may break dynamic content.
     */
    #[JsonProperty('block_js')]
    public ?bool $blockJs;

    /**
     * @var ?bool $blockManifest Blocks manifest files (.json, .webmanifest) - disables PWA-related functionality.
     */
    #[JsonProperty('block_manifest')]
    public ?bool $blockManifest;

    /**
     * @var ?bool $blockMedia Blocks audio and video resources (mp3, mp4, webm, etc.) from loading.
     */
    #[JsonProperty('block_media')]
    public ?bool $blockMedia;

    /**
     * @var ?string $blockSpecificRequests Fine-grained blocking of specific URLs or patterns. Separate multiple rules by comma, space, or newline. Default: empty.
     */
    #[JsonProperty('block_specific_requests')]
    public ?string $blockSpecificRequests;

    /**
     * @var ?bool $blockStylesheets Blocks all stylesheets - page renders as raw HTML without visual formatting.
     */
    #[JsonProperty('block_stylesheets')]
    public ?bool $blockStylesheets;

    /**
     * @var ?bool $blockTextTrack Blocks subtitles and caption overlays from loading.
     */
    #[JsonProperty('block_text_track')]
    public ?bool $blockTextTrack;

    /**
     * @var ?bool $blockTracking Blocks tracking scripts and analytics services for cleaner, privacy-oriented renders.
     */
    #[JsonProperty('block_tracking')]
    public ?bool $blockTracking;

    /**
     * @var ?bool $blockWebSocket Blocks WebSocket connections - prevents real-time bidirectional communication.
     */
    #[JsonProperty('block_web_socket')]
    public ?bool $blockWebSocket;

    /**
     * @var ?bool $blockXhr Blocks all XMLHttpRequest (AJAX) calls - prevents dynamic API-driven content.
     */
    #[JsonProperty('block_xhr')]
    public ?bool $blockXhr;

    /**
     * @var ?string $blurSelector CSS selectors to blur before capture. Masks sensitive data like emails, payments, or personal info. Multiple selectors supported. Default: empty.
     */
    #[JsonProperty('blur_selector')]
    public ?string $blurSelector;

    /**
     * @var ?string $captchaError CSS selector of the message shown for a wrong answer. While it is visible, the solver tries again.
     */
    #[JsonProperty('captcha_error')]
    public ?string $captchaError;

    /**
     * @var ?string $captchaImage CSS selector of the captcha picture. Required when solve_captcha is true.
     */
    #[JsonProperty('captcha_image')]
    public ?string $captchaImage;

    /**
     * @var ?string $captchaInput CSS selector of the box the answer is typed into. Required when solve_captcha is true.
     */
    #[JsonProperty('captcha_input')]
    public ?string $captchaInput;

    /**
     * @var ?string $captchaRefresh CSS selector of the control that loads a new captcha picture before the next try.
     */
    #[JsonProperty('captcha_refresh')]
    public ?string $captchaRefresh;

    /**
     * @var ?int $captchaRetries Number of guesses the solver makes, from 1 to 5.
     */
    #[JsonProperty('captcha_retries')]
    public ?int $captchaRetries;

    /**
     * @var ?string $captchaSubmit CSS selector of the button to click after the answer is typed.
     */
    #[JsonProperty('captcha_submit')]
    public ?string $captchaSubmit;

    /**
     * @var ?bool $classicProxy Loads the page through a datacenter proxy. Adds 20 credits per request. Ignored when premium_proxy is true or a custom proxy is set.
     */
    #[JsonProperty('classic_proxy')]
    public ?bool $classicProxy;

    /**
     * @var ?int $clickRecursion Number of times to click the selector (when set via `selector_to_click`).
     */
    #[JsonProperty('click_recursion')]
    public ?int $clickRecursion;

    /**
     * @var ?int $clipHeight Height of the clip area in pixels. Default: null.
     */
    #[JsonProperty('clip[height]')]
    public ?int $clipHeight;

    /**
     * @var ?int $clipWidth Width of the clip area in pixels. Default: null.
     */
    #[JsonProperty('clip[width]')]
    public ?int $clipWidth;

    /**
     * @var ?int $clipX X coordinate (in pixels) for the top-left corner of the clip area. Default: null.
     */
    #[JsonProperty('clip[x]')]
    public ?int $clipX;

    /**
     * @var ?int $clipY Y coordinate (in pixels) for the top-left corner of the clip area. Default: null.
     */
    #[JsonProperty('clip[y]')]
    public ?int $clipY;

    /**
     * @var ?string $cookies Cookies to include in the request before rendering. Supports single or multiple cookies. Example: `cookie=value; otherCookie=otherValue;`.
     */
    #[JsonProperty('cookies')]
    public ?string $cookies;

    /**
     * @var ?string $country Two-letter country code, such as US or DE, for the exit address of classic_proxy or premium_proxy. Ignored when you send your own proxy. Any two-letter code is sent, including one that is not listed. Classic proxy countries: BG, GE, DE, HN, MD, UA, GB, US. Premium proxy countries: AF, AL, DZ, AO, AG, AR, AM, AW, AU, AT, AZ, BS, BH, BD, BB, BY, BE, BZ, BJ, BT, BO, BQ, BA, BW, BR, BN, BG, BF, BI, CV, KH, CM, CA, KY, CF, TD, CL, CN, CO, KM, CG, CR, CI, HR, CU, CW, CY, CZ, CD, DK, DJ, DM, DO, EC, EG, SV, GQ, EE, SZ, ET, FO, FJ, FI, FR, GF, PF, GA, GM, GE, DE, GH, GI, GR, GL, GD, GP, GU, GT, GG, GN, GW, GY, HT, HN, HK, HU, IS, IN, ID, IR, IQ, IE, IL, IT, JM, JP, JE, JO, KZ, KE, XK, KW, KG, LA, LV, LB, LS, LR, LY, LT, MO, MG, MW, MY, MV, ML, MT, MQ, MR, MU, YT, MX, MD, MN, ME, MA, MZ, MM, NA, NP, NL, NC, NZ, NI, NE, NG, MK, NO, OM, PK, PS, PA, PG, PY, PE, PH, PL, PT, PR, QA, RE, RO, RU, RW, KN, LC, VC, WS, SA, SN, RS, SC, SL, SG, SK, SI, SB, SO, ZA, KR, SS, ES, LK, SD, SR, SE, CH, SY, TW, TJ, TZ, TH, TL, TG, TO, TT, TN, TR, TM, UG, UA, AE, GB, US, UY, UZ, VE, VN, YE, ZM, ZW.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $css Allows injecting custom CSS code into the page before rendering. Pass the CSS code directly as a string.
     */
    #[JsonProperty('css')]
    public ?string $css;

    /**
     * @var ?string $cssUrl Allows loading external CSS into the page. Provide a URL pointing to the CSS file.
     */
    #[JsonProperty('css_url')]
    public ?string $cssUrl;

    /**
     * @var ?string $customHtml Custom HTML to render instead of loading a URL. Overrides the url option. Use for capturing specific HTML structures or dynamic content.
     */
    #[JsonProperty('custom_html')]
    public ?string $customHtml;

    /**
     * @var ?bool $darkMode When set to `true`, websites that support prefers-color-scheme: dark will render in dark mode.
     */
    #[JsonProperty('dark_mode')]
    public ?bool $darkMode;

    /**
     * @var ?int $delay Wait period in milliseconds before capture. Allows animations, API responses, and dynamic elements to finish rendering.
     */
    #[JsonProperty('delay')]
    public ?int $delay;

    /**
     * @var ?bool $destroyScreenshot If `true`, screenshot/PDF is not stored on server and must be downloaded immediately.
     */
    #[JsonProperty('destroy_screenshot')]
    public ?bool $destroyScreenshot;

    /**
     * @var ?int $duration Duration of scrolling action in seconds (0-60). Higher = longer video. Default: null (full page scroll).
     */
    #[JsonProperty('duration')]
    public ?int $duration;

    /**
     * @var ?bool $enableCaching Stores the render in cache for reuse on subsequent identical requests.
     */
    #[JsonProperty('enable_caching')]
    public ?bool $enableCaching;

    /**
     * @var ?bool $enableIncognito Enables private/incognito browsing. Each render starts with a clean slate - no cookies, cache, or session data persisted.
     */
    #[JsonProperty('enable_incognito')]
    public ?bool $enableIncognito;

    /**
     * @var ?bool $extractHtml Returns rendered HTML as a .html file (includes JS-executed DOM). Only available with output=json.
     */
    #[JsonProperty('extract_html')]
    public ?bool $extractHtml;

    /**
     * @var ?bool $extractMarkdown Extracts rendered page content as a structured .md (Markdown) file. Preserves headings, lists, links. Only with output=json.
     */
    #[JsonProperty('extract_markdown')]
    public ?bool $extractMarkdown;

    /**
     * @var ?bool $extractText Strips all HTML and returns visible text as a .txt file. Ideal for text analysis, indexing, or AI pipelines. Only with output=json.
     */
    #[JsonProperty('extract_text')]
    public ?bool $extractText;

    /**
     * @var ?bool $failOnError If `true`, returns an error when the target page responds with 4xx or 5xx status.
     */
    #[JsonProperty('fail_on_error')]
    public ?bool $failOnError;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemFileType> $fileType Output format. PNG (lossless, transparency), JPEG (compressed, smaller size), WebP (modern, efficient), PDF (document). For scrolling captures: MP4, GIF, WebM. Scrolling capture formats: WEBM (web-optimized), MP4 (widely compatible, default), GIF (short loops).
     */
    #[JsonProperty('file_type')]
    public ?string $fileType;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemFormat> $format Response format: json (default).
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?bool $fresh If `true`, bypasses cache and captures a fresh render. If `false`, returns cached version when available.
     */
    #[JsonProperty('fresh')]
    public ?bool $fresh;

    /**
     * @var ?bool $fullPage Captures the entire webpage from top to bottom, including scrollable content outside the viewport. Ideal for long-form pages.
     */
    #[JsonProperty('full_page')]
    public ?bool $fullPage;

    /**
     * @var ?bool $getImageUrls Extracts all image URLs from the rendered DOM and returns them in structured format. Only with output=json.
     */
    #[JsonProperty('get_image_urls')]
    public ?bool $getImageUrls;

    /**
     * @var ?bool $gpu Renders the page with a GPU, including WebGL and canvas content. Adds 20 credits per request.
     */
    #[JsonProperty('gpu')]
    public ?bool $gpu;

    /**
     * @var ?int $grayscale Applies a grayscale filter to the screenshot. Requires a value from 0 (no effect) to 100 (fully grayscale).
     */
    #[JsonProperty('grayscale')]
    public ?int $grayscale;

    /**
     * @var ?string $headers Custom HTTP headers to include as key=value pairs. Use a semicolon to separate multiple headers (e.g., `key1=value1;key2=value2`).
     */
    #[JsonProperty('headers')]
    public ?string $headers;

    /**
     * @var ?int $height Viewport height in pixels. Controls how much vertical area is visible. Max: 4320.
     */
    #[JsonProperty('height')]
    public ?int $height;

    /**
     * @var ?int $imageQuality Compression level for JPEG output (0-100). Lower = smaller file, higher = better quality. Only applies to JPEG.
     */
    #[JsonProperty('image_quality')]
    public ?int $imageQuality;

    /**
     * @var ?string $js Allows injecting custom JavaScript code into the page before rendering. Pass the JavaScript code directly as a string.
     */
    #[JsonProperty('js')]
    public ?string $js;

    /**
     * @var ?string $jsUrl Allows loading external JavaScript into the page. Provide a URL pointing to the script file.
     */
    #[JsonProperty('js_url')]
    public ?string $jsUrl;

    /**
     * @var ?float $latitude Specify latitude for the browser Geolocation API. Provide a numeric value. Default: null (not set).
     */
    #[JsonProperty('latitude')]
    public ?float $latitude;

    /**
     * @var ?bool $lazyLoad Automatically scrolls the page to trigger lazy-loaded images and components. Ensures complete content capture.
     */
    #[JsonProperty('lazy_load')]
    public ?bool $lazyLoad;

    /**
     * @var ?float $longitude Specify longitude for the browser Geolocation API. Provide a numeric value. Default: null (not set).
     */
    #[JsonProperty('longitude')]
    public ?float $longitude;

    /**
     * @var ?string $markdown Markdown to render instead of loading a URL. Works like custom_html, so you can capture a README or notes without hosting a page.
     */
    #[JsonProperty('markdown')]
    public ?string $markdown;

    /**
     * @var ?bool $noCookieBanners Hides or blocks cookie consent banners and popups before capture.
     */
    #[JsonProperty('no_cookie_banners')]
    public ?bool $noCookieBanners;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemOcrModel> $ocrModel Recognition model used by the captcha solver: mini-ocr-v1 (default) or ocr-v1.
     */
    #[JsonProperty('ocr_model')]
    public ?string $ocrModel;

    /**
     * @var ?bool $omitBackground Replaces simple white/plain backgrounds with transparency for a cut-out effect. Only works with PNG output.
     */
    #[JsonProperty('omit_background')]
    public ?bool $omitBackground;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemOutput> $output Set the output format. `json` returns metadata with a hosted file URL. `image` streams the raw file bytes directly.
     */
    #[JsonProperty('output')]
    public ?string $output;

    /**
     * @var ?BulkScreenshotCaptureRequestUrlsItemPdfOptions $pdfOptions PDF output options. Applies when file_type is PDF.
     */
    #[JsonProperty('pdf_options')]
    public ?BulkScreenshotCaptureRequestUrlsItemPdfOptions $pdfOptions;

    /**
     * @var ?bool $premiumProxy Loads the page through a residential proxy. Adds 200 credits per request. Used instead of classic_proxy.
     */
    #[JsonProperty('premium_proxy')]
    public ?bool $premiumProxy;

    /**
     * @var ?string $proxy Allows defining a proxy for the connection. Provide a JSON string with keys: server (include port number), username, and password.
     */
    #[JsonProperty('proxy')]
    public ?string $proxy;

    /**
     * @var ?string $removeSelector CSS selectors to remove before capture. Deletes matched elements from DOM. Ideal for cleaning ads, popups, sidebars. Multiple selectors supported. Default: empty.
     */
    #[JsonProperty('remove_selector')]
    public ?string $removeSelector;

    /**
     * @var ?string $resultFileName Custom name for the output file. Helps with organized storage and retrieval. Note: non-unique names may overwrite existing files.
     */
    #[JsonProperty('result_file_name')]
    public ?string $resultFileName;

    /**
     * @var ?bool $retina Captures at 2x resolution for sharper, high-DPI output. Increases file size.
     */
    #[JsonProperty('retina')]
    public ?bool $retina;

    /**
     * @var ?bool $scrollBack If `true`, scrolls to bottom then back to top, creating a seamless loop.
     */
    #[JsonProperty('scroll_back')]
    public ?bool $scrollBack;

    /**
     * @var ?int $scrollDelay Delay in milliseconds between scroll steps when `lazy_load` is enabled. Use higher values for heavy pages.
     */
    #[JsonProperty('scroll_delay')]
    public ?int $scrollDelay;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemScrollSpeed> $scrollSpeed Scrolling speed: fast, normal (default), or slow. Affects render time and output pacing.
     */
    #[JsonProperty('scroll_speed')]
    public ?string $scrollSpeed;

    /**
     * @var ?string $scrollToElement Scrolls the page to bring the specified CSS selector into view before capture. Ideal for below-the-fold content. Default: empty.
     */
    #[JsonProperty('scroll_to_element')]
    public ?string $scrollToElement;

    /**
     * @var ?bool $scrollingScreenshot Enables scrolling screenshot mode to capture a video (webm, gif, mp4) of the webpage.
     */
    #[JsonProperty('scrolling_screenshot')]
    public ?bool $scrollingScreenshot;

    /**
     * @var ?string $selector CSS selector to capture a specific element. Only that element is rendered. Falls back to full page if not found. Default: empty.
     */
    #[JsonProperty('selector')]
    public ?string $selector;

    /**
     * @var ?string $selectorToClick CSS selector for an element to click before capturing the screenshot. Useful for opening dropdowns, modals, or triggering content.
     */
    #[JsonProperty('selector_to_click')]
    public ?string $selectorToClick;

    /**
     * @var ?bool $solveCaptcha Solves a captcha made of text drawn in a picture, then takes the screenshot. Requires captcha_image and captcha_input. Adds 20 credits per request.
     */
    #[JsonProperty('solve_captcha')]
    public ?bool $solveCaptcha;

    /**
     * @var ?bool $startImmediately Starts recording immediately without waiting for full page load.
     */
    #[JsonProperty('start_immediately')]
    public ?bool $startImmediately;

    /**
     * @var ?bool $stealth Makes the browser look like a regular visitor for pages that block automated traffic. No extra credits.
     */
    #[JsonProperty('stealth')]
    public ?bool $stealth;

    /**
     * @var ?int $thumbnailWidth Specifies the width of the thumbnail in pixels. Default value is 0 (meaning no specific value is set, and the screenshot is returned at its original resolution).
     */
    #[JsonProperty('thumbnail_width')]
    public ?int $thumbnailWidth;

    /**
     * @var ?int $timeout Maximum wait in milliseconds for page load before aborting. Adjust for slow/heavy pages. Default: 100000 (100s).
     */
    #[JsonProperty('timeout')]
    public ?int $timeout;

    /**
     * @var ?string $timezone IANA timezone the browser uses while rendering, such as Asia/Karachi or Europe/London. Useful for clocks and localized dates.
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @var ?int $ttl Time in seconds the render stays cached before auto-invalidation. Use higher values for static pages, lower for dynamic content. Default: 2592000 (30 days).
     */
    #[JsonProperty('ttl')]
    public ?int $ttl;

    /**
     * @var ?string $userAgent Custom User-Agent string sent in the request headers.
     */
    #[JsonProperty('user_agent')]
    public ?string $userAgent;

    /**
     * @var ?bool $video Records visible viewport only for a specified duration. Use with `duration` parameter. Ideal for dashboards and animations.
     */
    #[JsonProperty('video')]
    public ?bool $video;

    /**
     * @var ?value-of<BulkScreenshotCaptureRequestUrlsItemWaitForEvent> $waitForEvent Controls when rendering starts based on page load lifecycle. `load` (all resources), `domcontentloaded` (HTML parsed), `networkidle` (no network activity for 500ms).
     */
    #[JsonProperty('wait_for_event')]
    public ?string $waitForEvent;

    /**
     * @var ?int $width Viewport width in pixels. Simulates device screen sizes. Max: 7680.
     */
    #[JsonProperty('width')]
    public ?int $width;

    /**
     * @param array{
     *   url: string,
     *   acceptLanguages?: ?string,
     *   adjustTop?: ?int,
     *   blockAds?: ?bool,
     *   blockChatWidgets?: ?bool,
     *   blockEventSource?: ?bool,
     *   blockFetch?: ?bool,
     *   blockFont?: ?bool,
     *   blockImages?: ?bool,
     *   blockJs?: ?bool,
     *   blockManifest?: ?bool,
     *   blockMedia?: ?bool,
     *   blockSpecificRequests?: ?string,
     *   blockStylesheets?: ?bool,
     *   blockTextTrack?: ?bool,
     *   blockTracking?: ?bool,
     *   blockWebSocket?: ?bool,
     *   blockXhr?: ?bool,
     *   blurSelector?: ?string,
     *   captchaError?: ?string,
     *   captchaImage?: ?string,
     *   captchaInput?: ?string,
     *   captchaRefresh?: ?string,
     *   captchaRetries?: ?int,
     *   captchaSubmit?: ?string,
     *   classicProxy?: ?bool,
     *   clickRecursion?: ?int,
     *   clipHeight?: ?int,
     *   clipWidth?: ?int,
     *   clipX?: ?int,
     *   clipY?: ?int,
     *   cookies?: ?string,
     *   country?: ?string,
     *   css?: ?string,
     *   cssUrl?: ?string,
     *   customHtml?: ?string,
     *   darkMode?: ?bool,
     *   delay?: ?int,
     *   destroyScreenshot?: ?bool,
     *   duration?: ?int,
     *   enableCaching?: ?bool,
     *   enableIncognito?: ?bool,
     *   extractHtml?: ?bool,
     *   extractMarkdown?: ?bool,
     *   extractText?: ?bool,
     *   failOnError?: ?bool,
     *   fileType?: ?value-of<BulkScreenshotCaptureRequestUrlsItemFileType>,
     *   format?: ?value-of<BulkScreenshotCaptureRequestUrlsItemFormat>,
     *   fresh?: ?bool,
     *   fullPage?: ?bool,
     *   getImageUrls?: ?bool,
     *   gpu?: ?bool,
     *   grayscale?: ?int,
     *   headers?: ?string,
     *   height?: ?int,
     *   imageQuality?: ?int,
     *   js?: ?string,
     *   jsUrl?: ?string,
     *   latitude?: ?float,
     *   lazyLoad?: ?bool,
     *   longitude?: ?float,
     *   markdown?: ?string,
     *   noCookieBanners?: ?bool,
     *   ocrModel?: ?value-of<BulkScreenshotCaptureRequestUrlsItemOcrModel>,
     *   omitBackground?: ?bool,
     *   output?: ?value-of<BulkScreenshotCaptureRequestUrlsItemOutput>,
     *   pdfOptions?: ?BulkScreenshotCaptureRequestUrlsItemPdfOptions,
     *   premiumProxy?: ?bool,
     *   proxy?: ?string,
     *   removeSelector?: ?string,
     *   resultFileName?: ?string,
     *   retina?: ?bool,
     *   scrollBack?: ?bool,
     *   scrollDelay?: ?int,
     *   scrollSpeed?: ?value-of<BulkScreenshotCaptureRequestUrlsItemScrollSpeed>,
     *   scrollToElement?: ?string,
     *   scrollingScreenshot?: ?bool,
     *   selector?: ?string,
     *   selectorToClick?: ?string,
     *   solveCaptcha?: ?bool,
     *   startImmediately?: ?bool,
     *   stealth?: ?bool,
     *   thumbnailWidth?: ?int,
     *   timeout?: ?int,
     *   timezone?: ?string,
     *   ttl?: ?int,
     *   userAgent?: ?string,
     *   video?: ?bool,
     *   waitForEvent?: ?value-of<BulkScreenshotCaptureRequestUrlsItemWaitForEvent>,
     *   width?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->acceptLanguages = $values['acceptLanguages'] ?? null;
        $this->adjustTop = $values['adjustTop'] ?? null;
        $this->blockAds = $values['blockAds'] ?? null;
        $this->blockChatWidgets = $values['blockChatWidgets'] ?? null;
        $this->blockEventSource = $values['blockEventSource'] ?? null;
        $this->blockFetch = $values['blockFetch'] ?? null;
        $this->blockFont = $values['blockFont'] ?? null;
        $this->blockImages = $values['blockImages'] ?? null;
        $this->blockJs = $values['blockJs'] ?? null;
        $this->blockManifest = $values['blockManifest'] ?? null;
        $this->blockMedia = $values['blockMedia'] ?? null;
        $this->blockSpecificRequests = $values['blockSpecificRequests'] ?? null;
        $this->blockStylesheets = $values['blockStylesheets'] ?? null;
        $this->blockTextTrack = $values['blockTextTrack'] ?? null;
        $this->blockTracking = $values['blockTracking'] ?? null;
        $this->blockWebSocket = $values['blockWebSocket'] ?? null;
        $this->blockXhr = $values['blockXhr'] ?? null;
        $this->blurSelector = $values['blurSelector'] ?? null;
        $this->captchaError = $values['captchaError'] ?? null;
        $this->captchaImage = $values['captchaImage'] ?? null;
        $this->captchaInput = $values['captchaInput'] ?? null;
        $this->captchaRefresh = $values['captchaRefresh'] ?? null;
        $this->captchaRetries = $values['captchaRetries'] ?? null;
        $this->captchaSubmit = $values['captchaSubmit'] ?? null;
        $this->classicProxy = $values['classicProxy'] ?? null;
        $this->clickRecursion = $values['clickRecursion'] ?? null;
        $this->clipHeight = $values['clipHeight'] ?? null;
        $this->clipWidth = $values['clipWidth'] ?? null;
        $this->clipX = $values['clipX'] ?? null;
        $this->clipY = $values['clipY'] ?? null;
        $this->cookies = $values['cookies'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->css = $values['css'] ?? null;
        $this->cssUrl = $values['cssUrl'] ?? null;
        $this->customHtml = $values['customHtml'] ?? null;
        $this->darkMode = $values['darkMode'] ?? null;
        $this->delay = $values['delay'] ?? null;
        $this->destroyScreenshot = $values['destroyScreenshot'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->enableCaching = $values['enableCaching'] ?? null;
        $this->enableIncognito = $values['enableIncognito'] ?? null;
        $this->extractHtml = $values['extractHtml'] ?? null;
        $this->extractMarkdown = $values['extractMarkdown'] ?? null;
        $this->extractText = $values['extractText'] ?? null;
        $this->failOnError = $values['failOnError'] ?? null;
        $this->fileType = $values['fileType'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->fresh = $values['fresh'] ?? null;
        $this->fullPage = $values['fullPage'] ?? null;
        $this->getImageUrls = $values['getImageUrls'] ?? null;
        $this->gpu = $values['gpu'] ?? null;
        $this->grayscale = $values['grayscale'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->height = $values['height'] ?? null;
        $this->imageQuality = $values['imageQuality'] ?? null;
        $this->js = $values['js'] ?? null;
        $this->jsUrl = $values['jsUrl'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->lazyLoad = $values['lazyLoad'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->markdown = $values['markdown'] ?? null;
        $this->noCookieBanners = $values['noCookieBanners'] ?? null;
        $this->ocrModel = $values['ocrModel'] ?? null;
        $this->omitBackground = $values['omitBackground'] ?? null;
        $this->output = $values['output'] ?? null;
        $this->pdfOptions = $values['pdfOptions'] ?? null;
        $this->premiumProxy = $values['premiumProxy'] ?? null;
        $this->proxy = $values['proxy'] ?? null;
        $this->removeSelector = $values['removeSelector'] ?? null;
        $this->resultFileName = $values['resultFileName'] ?? null;
        $this->retina = $values['retina'] ?? null;
        $this->scrollBack = $values['scrollBack'] ?? null;
        $this->scrollDelay = $values['scrollDelay'] ?? null;
        $this->scrollSpeed = $values['scrollSpeed'] ?? null;
        $this->scrollToElement = $values['scrollToElement'] ?? null;
        $this->scrollingScreenshot = $values['scrollingScreenshot'] ?? null;
        $this->selector = $values['selector'] ?? null;
        $this->selectorToClick = $values['selectorToClick'] ?? null;
        $this->solveCaptcha = $values['solveCaptcha'] ?? null;
        $this->startImmediately = $values['startImmediately'] ?? null;
        $this->stealth = $values['stealth'] ?? null;
        $this->thumbnailWidth = $values['thumbnailWidth'] ?? null;
        $this->timeout = $values['timeout'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
        $this->ttl = $values['ttl'] ?? null;
        $this->userAgent = $values['userAgent'] ?? null;
        $this->video = $values['video'] ?? null;
        $this->waitForEvent = $values['waitForEvent'] ?? null;
        $this->width = $values['width'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
