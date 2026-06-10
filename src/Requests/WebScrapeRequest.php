<?php

namespace Apifreaks\Requests;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Types\WebScrapeRequestFormat;
use Apifreaks\Types\WebScrapeRequestBodyBlockUrl;
use Apifreaks\Types\WebScrapeRequestBodyOne;

class WebScrapeRequest extends JsonSerializableType
{
    /**
     * @var string $apiKey Your API key
     */
    public string $apiKey;

    /**
     * @var ?value-of<WebScrapeRequestFormat> $format Response format returned by the API.
     */
    public ?string $format;

    /**
     * @var string $url Target URL to scrape
     */
    public string $url;

    /**
     * @var ?bool $text Set to `true` to return the data in text format else `false` for data in html format with tags.
     */
    public ?bool $text;

    /**
     * Set  `true` to handle websites with JavaScript. Set `false` to handle static html websites.
     *
     *
     *  Default value is `true`.
     *
     * @var ?bool $jsEnabled
     */
    public ?bool $jsEnabled;

    /**
     * @var (
     *    bool
     *   |string
     *   |array<string, mixed>
     * )|null $proxy Use proxy for requests
     */
    public bool|string|array|null $proxy;

    /**
     * Ignore SSL certificate errors.
     *
     *
     *  Only works if **jsEnabled** is **true**.
     *
     * @var ?bool $sslIgnore
     */
    public ?bool $sslIgnore;

    /**
     * Specify the browser window size in the format 'width,height' (e.g., "1920w,1080h"). Default value is the default resolutions provided by web/browser.
     *
     *
     *  Only works if **jsEnabled** is **true**.
     *
     * @var ?string $windowSize
     */
    public ?string $windowSize;

    /**
     * Set to `true` to apply ad-blocker to the specified URL else false or ignore to not apply.
     *
     *
     *  Only works if **jsEnabled** is **true**.
     *
     * @var ?bool $adBlock
     */
    public ?bool $adBlock;

    /**
     * if true user can provide captcha instructions in the instructions to solve image captchas.
     *
     *
     *   Only works if **jsEnabled** is **true**.
     *
     * @var ?bool $captcha
     */
    public ?bool $captcha;

    /**
     * @var (
     *    WebScrapeRequestBodyBlockUrl
     *   |WebScrapeRequestBodyOne
     * ) $body
     */
    public WebScrapeRequestBodyBlockUrl|WebScrapeRequestBodyOne $body;

    /**
     * @param array{
     *   apiKey: string,
     *   url: string,
     *   body: (
     *    WebScrapeRequestBodyBlockUrl
     *   |WebScrapeRequestBodyOne
     * ),
     *   format?: ?value-of<WebScrapeRequestFormat>,
     *   text?: ?bool,
     *   jsEnabled?: ?bool,
     *   proxy?: (
     *    bool
     *   |string
     *   |array<string, mixed>
     * )|null,
     *   sslIgnore?: ?bool,
     *   windowSize?: ?string,
     *   adBlock?: ?bool,
     *   captcha?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->format = $values['format'] ?? null;
        $this->url = $values['url'];
        $this->text = $values['text'] ?? null;
        $this->jsEnabled = $values['jsEnabled'] ?? null;
        $this->proxy = $values['proxy'] ?? null;
        $this->sslIgnore = $values['sslIgnore'] ?? null;
        $this->windowSize = $values['windowSize'] ?? null;
        $this->adBlock = $values['adBlock'] ?? null;
        $this->captcha = $values['captcha'] ?? null;
        $this->body = $values['body'];
    }
}
