<?php

namespace Apifreaks;

use Psr\Http\Client\ClientInterface;
use Apifreaks\Core\Client\RawClient;
use Apifreaks\Requests\GeolocationLookupRequest;
use Apifreaks\Types\GeolocationLookupResponse;
use Apifreaks\Exceptions\ApifreaksException;
use Apifreaks\Exceptions\ApifreaksApiException;
use Apifreaks\Core\Json\JsonApiRequest;
use Apifreaks\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Apifreaks\Requests\BulkGeolocationLookupRequest;
use Apifreaks\Types\BulkGeolocationLookupResponseItem;
use Apifreaks\Core\Json\JsonDecoder;
use Apifreaks\Requests\IpSecurityLookupRequest;
use Apifreaks\Types\IpSecurityLookupResponse;
use Apifreaks\Requests\BulkIpSecurityLookupRequest;
use Apifreaks\Types\BulkIpSecurityLookupResponseItem;
use Apifreaks\Requests\GeocoderSearchRequest;
use Apifreaks\Types\GeocoderSearchResponseItem;
use Apifreaks\Requests\GeocoderReverseRequest;
use Apifreaks\Types\GeocoderReverseResponse;
use Apifreaks\Requests\DomainWhoisLookupRequest;
use Apifreaks\Types\DomainWhoisLookupResponse;
use Apifreaks\Requests\BulkDomainWhoisLookupRequest;
use Apifreaks\Types\BulkDomainWhoisLookupResponse;
use Apifreaks\Requests\IpWhoisLookupRequest;
use Apifreaks\Types\IpWhoisLookupResponse;
use Apifreaks\Requests\AsnWhoisLookupRequest;
use Apifreaks\Types\AsnWhoisLookupResponse;
use Apifreaks\Requests\DomainWhoisHistoryRequest;
use Apifreaks\Types\DomainWhoisHistoryResponse;
use Apifreaks\Requests\DomainWhoisReverseRequest;
use Apifreaks\Types\DomainWhoisReverseResponse;
use Apifreaks\Requests\DomainDnsLookupRequest;
use Apifreaks\Types\DomainDnsLookupResponse;
use Apifreaks\Requests\BulkDomainDnsLookupRequest;
use Apifreaks\Types\BulkDomainDnsLookupResponse;
use Apifreaks\Requests\DomainDnsHistoryRequest;
use Apifreaks\Types\DomainDnsHistoryResponse;
use Apifreaks\Requests\DomainDnsReverseRequest;
use Apifreaks\Types\DomainDnsReverseResponse;
use Apifreaks\Requests\WebScrapeRequest;
use Apifreaks\Types\WebScrapeResponse;
use Apifreaks\Core\Json\JsonSerializer;
use Apifreaks\Core\Types\Union;
use Apifreaks\Requests\EmailValidateRequest;
use Apifreaks\Types\EmailValidateResponse;
use Apifreaks\Requests\BulkEmailValidateRequest;
use Apifreaks\Types\BulkEmailValidateResponse;
use Apifreaks\Requests\PhoneValidateRequest;
use Apifreaks\Types\PhoneValidateResponse;
use Apifreaks\Requests\BulkPhoneValidateRequest;
use Apifreaks\Types\BulkPhoneValidateResponseItem;
use Apifreaks\Requests\DomainSslLookupRequest;
use Apifreaks\Types\DomainSslLookupResponse;
use Apifreaks\Requests\DomainSslChainLookupRequest;
use Apifreaks\Types\DomainSslChainLookupResponse;
use Apifreaks\Requests\DomainAvailabilityCheckRequest;
use Apifreaks\Types\DomainAvailabilityCheckResponse;
use Apifreaks\Requests\BulkDomainAvailabilityCheckRequest;
use Apifreaks\Types\BulkDomainAvailabilityCheckResponse;
use Apifreaks\Requests\DomainAvailabilitySuggestionsRequest;
use Apifreaks\Types\DomainAvailabilitySuggestionsResponse;
use Apifreaks\Requests\SubdomainsLookupRequest;
use Apifreaks\Types\SubdomainsLookupResponse;
use Apifreaks\Requests\PdfMergeRequest;
use Apifreaks\Types\PdfMergeResponse;
use Apifreaks\Core\Multipart\MultipartFormData;
use Apifreaks\Core\Multipart\MultipartApiRequest;
use Apifreaks\Requests\PdfRemovePagesRequest;
use Apifreaks\Types\PdfRemovePagesResponse;
use Apifreaks\Requests\PdfSplitRequest;
use Apifreaks\Types\PdfSplitResponse;
use Apifreaks\Requests\PdfRotateRequest;
use Apifreaks\Types\PdfRotateResponse;
use Apifreaks\Requests\PdfCompressRequest;
use Apifreaks\Types\PdfCompressResponse;
use Apifreaks\Requests\PdfExtractPagesRequest;
use Apifreaks\Types\PdfExtractPagesResponse;
use Apifreaks\Requests\PdfLinearizeRequest;
use Apifreaks\Types\PdfLinearizeResponse;
use Apifreaks\Requests\PdfEncryptRequest;
use Apifreaks\Types\PdfEncryptResponse;
use Apifreaks\Requests\PdfDecryptRequest;
use Apifreaks\Types\PdfDecryptResponse;
use Apifreaks\Requests\PdfRestrictRequest;
use Apifreaks\Types\PdfRestrictResponse;
use Apifreaks\Requests\PdfUnrestrictRequest;
use Apifreaks\Types\PdfUnrestrictResponse;
use Apifreaks\Requests\PdfConvertToPngRequest;
use Apifreaks\Types\PdfConvertToPngResponse;
use Apifreaks\Requests\PdfConvertToJpgRequest;
use Apifreaks\Types\PdfConvertToJpgResponse;
use Apifreaks\Requests\PdfConvertToTiffRequest;
use Apifreaks\Types\PdfConvertToTiffResponse;
use Apifreaks\Requests\PdfConvertToBmpRequest;
use Apifreaks\Types\PdfConvertToBmpResponse;
use Apifreaks\Requests\PdfConvertToGifRequest;
use Apifreaks\Types\PdfConvertToGifResponse;
use Apifreaks\Requests\PdfUploadResourcesRequest;
use Apifreaks\Types\PdfUploadResourcesResponse;
use Apifreaks\Requests\PdfUploadBinaryRequest;
use Apifreaks\Types\PdfUploadBinaryResponse;
use Apifreaks\Requests\PdfDownloadResourceRequest;
use Apifreaks\Requests\PdfGetTaskStatusRequest;
use Apifreaks\Types\PdfGetTaskStatusResponse;
use Apifreaks\Requests\PdfGetFileStatusRequest;
use Apifreaks\Types\PdfGetFileStatusResponse;
use Apifreaks\Requests\PdfListFilesRequest;
use Apifreaks\Types\PdfListFilesResponse;
use Apifreaks\Requests\PdfDeleteFileRequest;
use Apifreaks\Types\PdfDeleteFileResponse;
use Apifreaks\Requests\ScreenshotCaptureRequest;
use Apifreaks\Requests\BulkScreenshotCaptureRequest;
use Apifreaks\Types\BulkScreenshotCaptureResponse;
use Apifreaks\Requests\CurrencyLatestRatesRequest;
use Apifreaks\Types\CurrencyLatestRatesResponse;
use Apifreaks\Requests\CurrencyHistoricalRatesRequest;
use Apifreaks\Types\CurrencyHistoricalRatesResponse;
use Apifreaks\Requests\CurrencyConvertLatestRequest;
use Apifreaks\Types\CurrencyConvertLatestResponse;
use Apifreaks\Requests\CurrencyConvertHistoricalRequest;
use Apifreaks\Types\CurrencyConvertHistoricalResponse;
use Apifreaks\Requests\CurrencyTimeSeriesRequest;
use Apifreaks\Types\CurrencyTimeSeriesResponse;
use Apifreaks\Requests\CurrencyFluctuationRequest;
use Apifreaks\Types\CurrencyFluctuationResponse;
use Apifreaks\Requests\CurrencyConvertByIpRequest;
use Apifreaks\Types\CurrencyConvertByIpResponse;
use Apifreaks\Requests\CurrencySupportedRequest;
use Apifreaks\Types\CurrencySupportedResponse;
use Apifreaks\Requests\CurrencySymbolsRequest;
use Apifreaks\Types\CurrencySymbolsResponse;
use Apifreaks\Requests\CurrencyHistoricalLimitsRequest;
use Apifreaks\Types\CurrencyHistoricalLimitsResponse;
use Apifreaks\Requests\CommodityLatestRatesRequest;
use Apifreaks\Types\CommodityLatestRatesResponse;
use Apifreaks\Requests\CommodityHistoricalRatesRequest;
use Apifreaks\Types\CommodityHistoricalRatesResponse;
use Apifreaks\Requests\CommodityFluctuationRequest;
use Apifreaks\Types\CommodityFluctuationResponse;
use Apifreaks\Requests\CommodityTimeSeriesRequest;
use Apifreaks\Types\CommodityTimeSeriesResponse;
use Apifreaks\Requests\CommoditySymbolsRequest;
use Apifreaks\Types\CommoditySymbolsResponse;
use Apifreaks\Requests\VatSupportedCountriesRequest;
use Apifreaks\Types\VatSupportedCountriesResponse;
use Apifreaks\Requests\VatRateByIpRequest;
use Apifreaks\Types\VatRateByIpResponseItem;
use Apifreaks\Requests\VatRateByCountryRequest;
use Apifreaks\Types\VatRateByCountryResponseItem;
use Apifreaks\Requests\BulkVatRateByCountryRequest;
use Apifreaks\Types\BulkVatRateByCountryResponse;
use Apifreaks\Requests\VatValidateRequest;
use Apifreaks\Types\VatValidateResponse;
use Apifreaks\Requests\IbanValidateRequest;
use Apifreaks\Types\IbanValidateResponse;
use Apifreaks\Requests\SwiftCodeFindRequest;
use Apifreaks\Requests\SwiftCodeLookupRequest;
use Apifreaks\Types\SwiftCodeLookupResponse;
use Apifreaks\Requests\ZipcodeLookupRequest;
use Apifreaks\Types\ZipcodeLookupResponse;
use Apifreaks\Requests\BulkZipcodeLookupRequest;
use Apifreaks\Types\BulkZipcodeLookupResponse;
use Apifreaks\Requests\ZipcodeSearchByCityRequest;
use Apifreaks\Types\ZipcodeSearchByCityResponse;
use Apifreaks\Requests\ZipcodeSearchByRegionRequest;
use Apifreaks\Types\ZipcodeSearchByRegionResponse;
use Apifreaks\Requests\ZipcodeSearchByRadiusRequest;
use Apifreaks\Types\ZipcodeSearchByRadiusResponse;
use Apifreaks\Requests\ZipcodeDistanceRequest;
use Apifreaks\Types\ZipcodeDistanceResponse;
use Apifreaks\Requests\ZipcodeDistanceMatchRequest;
use Apifreaks\Types\ZipcodeDistanceMatchResponse;
use Apifreaks\Requests\CurrentWeatherRequest;
use Apifreaks\Types\CurrentWeatherResponse;
use Apifreaks\Requests\BulkCurrentWeatherRequest;
use Apifreaks\Types\BulkCurrentWeatherResponse;
use Apifreaks\Requests\WeatherForecastRequest;
use Apifreaks\Types\WeatherForecastResponse;
use Apifreaks\Requests\HistoricalWeatherRequest;
use Apifreaks\Types\HistoricalWeatherResponse;
use Apifreaks\Requests\WeatherTimeSeriesRequest;
use Apifreaks\Types\WeatherTimeSeriesResponse;
use Apifreaks\Requests\MarineWeatherRequest;
use Apifreaks\Types\MarineWeatherResponse;
use Apifreaks\Requests\AirQualityRequest;
use Apifreaks\Types\AirQualityResponse;
use Apifreaks\Requests\FloodForecastRequest;
use Apifreaks\Types\FloodForecastResponse;
use Apifreaks\Requests\GetCountriesRequest;
use Apifreaks\Types\GetCountriesResponse;
use Apifreaks\Requests\GetCountryDetailsRequest;
use Apifreaks\Types\GetCountryDetailsResponse;
use Apifreaks\Requests\GetRegionsRequest;
use Apifreaks\Types\GetRegionsResponse;
use Apifreaks\Requests\GetSubregionsRequest;
use Apifreaks\Types\GetSubregionsResponse;
use Apifreaks\Requests\GetAdminLevelsRequest;
use Apifreaks\Types\GetAdminLevelsResponse;
use Apifreaks\Requests\GetAdminUnitsRequest;
use Apifreaks\Types\GetAdminUnitsResponse;
use Apifreaks\Requests\GetAdminUnitDetailsRequest;
use Apifreaks\Types\GetAdminUnitDetailsResponse;
use Apifreaks\Requests\GetCitiesRequest;
use Apifreaks\Types\GetCitiesResponse;
use Apifreaks\Requests\GetSupportedFlagsRequest;
use Apifreaks\Types\GetSupportedFlagsResponseItem;
use Apifreaks\Requests\GetFlagsRequest;
use Apifreaks\Requests\TimezoneLookupRequest;
use Apifreaks\Types\TimezoneLookupResponse;
use Apifreaks\Requests\TimezoneConvertRequest;
use Apifreaks\Types\TimezoneConvertResponse;
use Apifreaks\Requests\UserAgentLookupRequest;
use Apifreaks\Types\UserAgentLookupResponse;
use Apifreaks\Requests\BulkUserAgentLookupRequest;
use Apifreaks\Types\BulkUserAgentLookupResponseItem;
use Apifreaks\Requests\OcrPredictRequest;
use Apifreaks\Types\OcrPredictResponse;
use Apifreaks\Requests\GrammarDetectRequest;
use Apifreaks\Types\GrammarDetectResponse;
use Apifreaks\Requests\GrammarCorrectRequest;
use Apifreaks\Types\GrammarCorrectResponse;
use Apifreaks\Requests\WeakWordsDetectRequest;
use Apifreaks\Types\WeakWordsDetectResponse;
use Apifreaks\Requests\ReadabilityScoreRequest;
use Apifreaks\Types\ReadabilityScoreResponse;
use Apifreaks\Requests\AstronomyLookupRequest;
use Apifreaks\Types\AstronomyLookupResponse;

class ApifreaksClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Apifreaks',
        ];

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );
    }

    /**
     * Get detailed geolocation data for an IP address including country, city, timezone, currency, and optional security and user-agent information
     *
     * @param GeolocationLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GeolocationLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function geolocationLookup(GeolocationLookupRequest $request, ?array $options = null): ?GeolocationLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->lang != null) {
            $query['lang'] = $request->lang;
        }
        if ($request->fields != null) {
            $query['fields'] = $request->fields;
        }
        if ($request->excludes != null) {
            $query['excludes'] = $request->excludes;
        }
        if ($request->include != null) {
            $query['include'] = $request->include;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geolocation/lookup",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GeolocationLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve detailed geolocation data for multiple IP addresses in a single request.
     * Supports up to `50,000` IP-addresses/host-names per request.
     *
     * @param BulkGeolocationLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<BulkGeolocationLookupResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkGeolocationLookup(BulkGeolocationLookupRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->lang != null) {
            $query['lang'] = $request->lang;
        }
        if ($request->fields != null) {
            $query['fields'] = $request->fields;
        }
        if ($request->excludes != null) {
            $query['excludes'] = $request->excludes;
        }
        if ($request->include != null) {
            $query['include'] = $request->include;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geolocation/lookup",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [BulkGeolocationLookupResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get comprehensive security information for a given IP address. Detects VPNs, proxies, Tor nodes, and other security threats.
     *
     * @param IpSecurityLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?IpSecurityLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function ipSecurityLookup(IpSecurityLookupRequest $request, ?array $options = null): ?IpSecurityLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->fields != null) {
            $query['fields'] = $request->fields;
        }
        if ($request->excludes != null) {
            $query['excludes'] = $request->excludes;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/ip/security",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return IpSecurityLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Bulk IP Security Lookup API allows you to retrieve security details for up to `50,000` IP-addresses in a single request.
     *
     * @param BulkIpSecurityLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<BulkIpSecurityLookupResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkIpSecurityLookup(BulkIpSecurityLookupRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fields != null) {
            $query['fields'] = $request->fields;
        }
        if ($request->excludes != null) {
            $query['excludes'] = $request->excludes;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/ip/security",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [BulkIpSecurityLookupResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Convert a given address or place name into geographic coordinates (latitude and longitude).
     *
     * @param GeocoderSearchRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GeocoderSearchResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function geocoderSearch(GeocoderSearchRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['query'] = $request->query;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->minLat != null) {
            $query['min_lat'] = $request->minLat;
        }
        if ($request->maxLat != null) {
            $query['max_lat'] = $request->maxLat;
        }
        if ($request->minLon != null) {
            $query['min_lon'] = $request->minLon;
        }
        if ($request->maxLon != null) {
            $query['max_lon'] = $request->maxLon;
        }
        $headers = [];
        if ($request->acceptLanguage != null) {
            $headers['Accept-Language'] = $request->acceptLanguage;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geocoder/search",
                    method: HttpMethod::GET,
                    headers: $headers,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [GeocoderSearchResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Convert geographic coordinates (latitude and longitude) into a human-readable address or place name.
     *
     * @param GeocoderReverseRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GeocoderReverseResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function geocoderReverse(GeocoderReverseRequest $request, ?array $options = null): ?GeocoderReverseResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['lat'] = $request->lat;
        $query['lon'] = $request->lon;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        $headers = [];
        if ($request->acceptLanguage != null) {
            $headers['Accept-Language'] = $request->acceptLanguage;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geocoder/reverse",
                    method: HttpMethod::GET,
                    headers: $headers,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GeocoderReverseResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve current WHOIS information for a domain name.
     * This endpoint provides detailed registration information including registrar details,
     * dates, nameservers, and registrant information.
     *
     * @param DomainWhoisLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainWhoisLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainWhoisLookup(DomainWhoisLookupRequest $request, ?array $options = null): ?DomainWhoisLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domainName'] = $request->domainName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/whois/live",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainWhoisLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve WHOIS information for `100 Domains per Request`.
     *
     * @param BulkDomainWhoisLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkDomainWhoisLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkDomainWhoisLookup(BulkDomainWhoisLookupRequest $request, ?array $options = null): ?BulkDomainWhoisLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/whois/live",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkDomainWhoisLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Returns WHOIS registration details for a specified IP address (IPv4 or IPv6).
     *
     * @param IpWhoisLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?IpWhoisLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function ipWhoisLookup(IpWhoisLookupRequest $request, ?array $options = null): ?IpWhoisLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['ip'] = $request->ip;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/ip/whois/live",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return IpWhoisLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Returns WHOIS registration details for a specified ASN, with or without the 'as' prefix.
     *
     * @param AsnWhoisLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AsnWhoisLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function asnWhoisLookup(AsnWhoisLookupRequest $request, ?array $options = null): ?AsnWhoisLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['asn'] = $request->asn;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/asn/whois/live",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AsnWhoisLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve historical WHOIS records for a domain name.
     * This endpoint provides a timeline of all recorded changes in domain registration information.
     *
     * @param DomainWhoisHistoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainWhoisHistoryResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainWhoisHistory(DomainWhoisHistoryRequest $request, ?array $options = null): ?DomainWhoisHistoryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domainName'] = $request->domainName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/whois/history",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainWhoisHistoryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Performs a reverse WHOIS search using one or more search parameters like keyword, email, owner, or company.
     *
     * @param DomainWhoisReverseRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainWhoisReverseResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainWhoisReverse(DomainWhoisReverseRequest $request, ?array $options = null): ?DomainWhoisReverseResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->keyword != null) {
            $query['keyword'] = $request->keyword;
        }
        if ($request->email != null) {
            $query['email'] = $request->email;
        }
        if ($request->owner != null) {
            $query['owner'] = $request->owner;
        }
        if ($request->company != null) {
            $query['company'] = $request->company;
        }
        if ($request->exact != null) {
            $query['exact'] = $request->exact;
        }
        if ($request->mode != null) {
            $query['mode'] = $request->mode;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/whois/reverse",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainWhoisReverseResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve real-time DNS records for any hostname. Supports multiple record types including A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records.
     *
     * @param DomainDnsLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainDnsLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainDnsLookup(DomainDnsLookupRequest $request, ?array $options = null): ?DomainDnsLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->hostName != null) {
            $query['host-name'] = $request->hostName;
        }
        if ($request->ipAddress != null) {
            $query['ipAddress'] = $request->ipAddress;
        }
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/dns/live",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainDnsLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Perform DNS lookups for multiple hostnames in a single request. Supports up to `100 host-names per request`
     * and returns DNS records including A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records.
     *
     * @param BulkDomainDnsLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkDomainDnsLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkDomainDnsLookup(BulkDomainDnsLookupRequest $request, ?array $options = null): ?BulkDomainDnsLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/dns/live",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkDomainDnsLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve historical DNS records for any hostname. Access unique historical data for A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records,
     * including subdomains. Results are paginated with up to 100 unique records per page.
     *
     * @param DomainDnsHistoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainDnsHistoryResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainDnsHistory(DomainDnsHistoryRequest $request, ?array $options = null): ?DomainDnsHistoryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['host-name'] = $request->hostName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/dns/history",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainDnsHistoryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve all the hostnames associated with any particular A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME DNS records. For instance, you can access all the hostnames hosted on any IP/CIDR notation, all the domain names using Cloudflare name servers, and all the domain names using Google Mailbox
     *
     * @param DomainDnsReverseRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainDnsReverseResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainDnsReverse(DomainDnsReverseRequest $request, ?array $options = null): ?DomainDnsReverseResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['type'] = $request->type;
        $query['value'] = $request->value;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->exact != null) {
            $query['exact'] = $request->exact;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/dns/reverse",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainDnsReverseResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Execute a series of web scraping instructions on a target URL.
     * Supports various operations like form filling, clicking, data extraction, and CAPTCHA solving.
     *
     * @param WebScrapeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WebScrapeResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function webScrape(WebScrapeRequest $request, ?array $options = null): ?WebScrapeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['url'] = $request->url;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->text != null) {
            $query['text'] = $request->text;
        }
        if ($request->jsEnabled != null) {
            $query['jsEnabled'] = $request->jsEnabled;
        }
        if ($request->proxy != null) {
            $query['proxy'] = JsonSerializer::serializeUnion($request->proxy, new Union('bool', 'string', ['string' => 'mixed']));
        }
        if ($request->sslIgnore != null) {
            $query['sslIgnore'] = $request->sslIgnore;
        }
        if ($request->windowSize != null) {
            $query['windowSize'] = $request->windowSize;
        }
        if ($request->adBlock != null) {
            $query['adBlock'] = $request->adBlock;
        }
        if ($request->captcha != null) {
            $query['captcha'] = $request->captcha;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/scraping",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return WebScrapeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates a single email address and returns result.
     *
     * @param EmailValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EmailValidateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function emailValidate(EmailValidateRequest $request, ?array $options = null): ?EmailValidateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/email-validation/single",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EmailValidateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates a bulk of email addresses and returns result for each. Maximum `10` email addresses per request.
     *
     * @param BulkEmailValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkEmailValidateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkEmailValidate(BulkEmailValidateRequest $request, ?array $options = null): ?BulkEmailValidateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/email-validation/bulk",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkEmailValidateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates a single phone number and returns detailed metadata including carrier, line type, geolocation, time zones, and standardized formats.
     *
     * @param PhoneValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PhoneValidateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function phoneValidate(PhoneValidateRequest $request, ?array $options = null): ?PhoneValidateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/phone/validation",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PhoneValidateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates up to 100 phone numbers in a single request. Each number is processed independently — invalid entries return per-number errors without affecting the rest of the batch.
     *
     * @param BulkPhoneValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<BulkPhoneValidateResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkPhoneValidate(BulkPhoneValidateRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/phone/validation/bulk",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [BulkPhoneValidateResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve comprehensive SSL certificate information without the certificate chain.
     * This endpoint provides detailed information about the SSL certificate including expiry dates, issuer details, and encryption methods.
     *
     * @param DomainSslLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainSslLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainSslLookup(DomainSslLookupRequest $request, ?array $options = null): ?DomainSslLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domainName'] = $request->domainName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->sslRaw != null) {
            $query['sslRaw'] = $request->sslRaw;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/ssl/live",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainSslLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve the complete SSL certificate chain from root Certificate Authority (CA) to end-user certificate.
     * This endpoint provides comprehensive information about each certificate in the chain.
     *
     * @param DomainSslChainLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainSslChainLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainSslChainLookup(DomainSslChainLookupRequest $request, ?array $options = null): ?DomainSslChainLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domainName'] = $request->domainName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->sslRaw != null) {
            $query['sslRaw'] = $request->sslRaw;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/ssl/live/chain",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainSslChainLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Domain Search API is designed to simplify the process of finding available domain names across all top-level domains (TLDs) and second-level domains (SLDs).
     *
     * @param DomainAvailabilityCheckRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainAvailabilityCheckResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainAvailabilityCheck(DomainAvailabilityCheckRequest $request, ?array $options = null): ?DomainAvailabilityCheckResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domain'] = $request->domain;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->source != null) {
            $query['source'] = $request->source;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/availability",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainAvailabilityCheckResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Perform Bulk Domain Availability checks using a list of domains. Supports upto `100 Domains Per Request`.
     *
     * @param BulkDomainAvailabilityCheckRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkDomainAvailabilityCheckResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkDomainAvailabilityCheck(BulkDomainAvailabilityCheckRequest $request, ?array $options = null): ?BulkDomainAvailabilityCheckResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->source != null) {
            $query['source'] = $request->source;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/availability",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkDomainAvailabilityCheckResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Domain Search API is designed to simplify the process of finding available domain names across all top-level domains (TLDs) and second-level domains (SLDs).
     *
     * @param DomainAvailabilitySuggestionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DomainAvailabilitySuggestionsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function domainAvailabilitySuggestions(DomainAvailabilitySuggestionsRequest $request, ?array $options = null): ?DomainAvailabilitySuggestionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domain'] = $request->domain;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->source != null) {
            $query['source'] = $request->source;
        }
        if ($request->count != null) {
            $query['count'] = $request->count;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/domain/availability/suggestions",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DomainAvailabilitySuggestionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Subdomain Lookup API is designed to retrieve subdomains related to the given domain name. It helps you explore subdomains that are available for registration or usage.
     *
     * @param SubdomainsLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubdomainsLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function subdomainsLookup(SubdomainsLookupRequest $request, ?array $options = null): ?SubdomainsLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['domain'] = $request->domain;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->after != null) {
            $query['after'] = JsonSerializer::serializeDate($request->after);
        }
        if ($request->before != null) {
            $query['before'] = JsonSerializer::serializeDate($request->before);
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/subdomains/lookup",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubdomainsLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API merges multiple PDF files into a single PDF, in the order they are provided
     *
     * @param PdfMergeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfMergeResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfMerge(PdfMergeRequest $request, ?array $options = null): ?PdfMergeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            foreach ($request->file as $file) {
                $body->addPart($file->toMultipartFormDataPart('file'));
            }
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/merge",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfMergeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API removes a selection or range of pages from a PDF file.
     *
     * @param PdfRemovePagesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfRemovePagesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfRemovePages(PdfRemovePagesRequest $request, ?array $options = null): ?PdfRemovePagesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['pages'] = $request->pages;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/remove-pages",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfRemovePagesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API splits a PDF into multiple parts based on specified page numbers or ranges.
     *
     * @param PdfSplitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfSplitResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfSplit(PdfSplitRequest $request, ?array $options = null): ?PdfSplitResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/split",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfSplitResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API rotates pages of a PDF by a specified angle (in multiples of 90 degrees).
     *
     * @param PdfRotateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfRotateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfRotate(PdfRotateRequest $request, ?array $options = null): ?PdfRotateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['rotate'] = $request->rotate;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/rotate",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfRotateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API compresses a given PDF file to reduce its file size.
     *
     * @param PdfCompressRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfCompressResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfCompress(PdfCompressRequest $request, ?array $options = null): ?PdfCompressResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['compression_level'] = $request->compressionLevel;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/compress",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfCompressResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API extracts specific pages or page ranges from a PDF file and returns them as a new PDF.
     *
     * @param PdfExtractPagesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfExtractPagesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfExtractPages(PdfExtractPagesRequest $request, ?array $options = null): ?PdfExtractPagesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['pages'] = $request->pages;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->separated != null) {
            $query['separated'] = $request->separated;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/extract-pages",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfExtractPagesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * API endpoint that linearizes any given PDF, restructuring it for faster loading and page-by-page viewing in web browsers.
     *
     * @param PdfLinearizeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfLinearizeResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfLinearize(PdfLinearizeRequest $request, ?array $options = null): ?PdfLinearizeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/linearize",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfLinearizeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API encrypts a PDF file by setting a password required to open it.
     *
     * @param PdfEncryptRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfEncryptResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfEncrypt(PdfEncryptRequest $request, ?array $options = null): ?PdfEncryptResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['user_password'] = $request->userPassword;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->filePassword != null) {
            $query['file_password'] = $request->filePassword;
        }
        if ($request->ownerPassword != null) {
            $query['owner_password'] = $request->ownerPassword;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/encrypt",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfEncryptResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API decrypts PDF files, removing all encryption, including open passwords and permission restrictions.
     *
     * @param PdfDecryptRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfDecryptResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfDecrypt(PdfDecryptRequest $request, ?array $options = null): ?PdfDecryptResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['file_password'] = $request->filePassword;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/decrypt",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfDecryptResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API applies permission restrictions on a PDF file, such as disabling printing, copying, or editing. This can include password protection to enforce restrictions.
     *
     * @param PdfRestrictRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfRestrictResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfRestrict(PdfRestrictRequest $request, ?array $options = null): ?PdfRestrictResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['user_password'] = $request->userPassword;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->filePassword != null) {
            $query['file_password'] = $request->filePassword;
        }
        if ($request->ownerPassword != null) {
            $query['owner_password'] = $request->ownerPassword;
        }
        if ($request->restrictions != null) {
            $query['restrictions'] = $request->restrictions;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/restrict",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfRestrictResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API removes permission restrictions from a PDF while keeping it encrypted. If you want to remove all security (including encryption), use the `/pdf/decrypt` endpoint instead.
     *
     * @param PdfUnrestrictRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfUnrestrictResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfUnrestrict(PdfUnrestrictRequest $request, ?array $options = null): ?PdfUnrestrictResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['file_password'] = $request->filePassword;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->userPassword != null) {
            $query['user_password'] = $request->userPassword;
        }
        if ($request->ownerPassword != null) {
            $query['owner_password'] = $request->ownerPassword;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/unrestrict",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfUnrestrictResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API converts a given PDF file into a sequence of PNG images.
     *
     * @param PdfConvertToPngRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfConvertToPngResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfConvertToPng(PdfConvertToPngRequest $request, ?array $options = null): ?PdfConvertToPngResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->resolution != null) {
            $query['resolution'] = $request->resolution;
        }
        if ($request->imageSmoothing != null) {
            $query['image_smoothing'] = $request->imageSmoothing;
        }
        if ($request->profile != null) {
            $query['profile'] = $request->profile;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/png",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfConvertToPngResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API converts a given PDF file into a sequence of JPG images.
     *
     * @param PdfConvertToJpgRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfConvertToJpgResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfConvertToJpg(PdfConvertToJpgRequest $request, ?array $options = null): ?PdfConvertToJpgResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->quality != null) {
            $query['quality'] = $request->quality;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->resolution != null) {
            $query['resolution'] = $request->resolution;
        }
        if ($request->imageSmoothing != null) {
            $query['image_smoothing'] = $request->imageSmoothing;
        }
        if ($request->profile != null) {
            $query['profile'] = $request->profile;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/jpg",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfConvertToJpgResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API converts a given PDF file into a sequence of TIFF images. The output images can be saved as a single TIFF file, or as a sequence of TIFF files.
     *
     * @param PdfConvertToTiffRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfConvertToTiffResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfConvertToTiff(PdfConvertToTiffRequest $request, ?array $options = null): ?PdfConvertToTiffResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->resolution != null) {
            $query['resolution'] = $request->resolution;
        }
        if ($request->imageSmoothing != null) {
            $query['image_smoothing'] = $request->imageSmoothing;
        }
        if ($request->profile != null) {
            $query['profile'] = $request->profile;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/tif",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfConvertToTiffResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Converts a PDF file to a BMP image.
     *
     * @param PdfConvertToBmpRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfConvertToBmpResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfConvertToBmp(PdfConvertToBmpRequest $request, ?array $options = null): ?PdfConvertToBmpResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->resolution != null) {
            $query['resolution'] = $request->resolution;
        }
        if ($request->imageSmoothing != null) {
            $query['image_smoothing'] = $request->imageSmoothing;
        }
        if ($request->profile != null) {
            $query['profile'] = $request->profile;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/bmp",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfConvertToBmpResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API converts a given PDF file into a sequence of GIF images.
     *
     * @param PdfConvertToGifRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfConvertToGifResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfConvertToGif(PdfConvertToGifRequest $request, ?array $options = null): ?PdfConvertToGifResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->fileId != null) {
            $query['file_id'] = $request->fileId;
        }
        if ($request->destroy != null) {
            $query['destroy'] = $request->destroy;
        }
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->pages != null) {
            $query['pages'] = $request->pages;
        }
        if ($request->resolution != null) {
            $query['resolution'] = $request->resolution;
        }
        if ($request->imageSmoothing != null) {
            $query['image_smoothing'] = $request->imageSmoothing;
        }
        if ($request->profile != null) {
            $query['profile'] = $request->profile;
        }
        if ($request->webhookUrl != null) {
            $query['webhook_url'] = $request->webhookUrl;
        }
        if ($request->webhookFailureNotification != null) {
            $query['webhook_failure_notification'] = $request->webhookFailureNotification;
        }
        $headers = [];
        if ($request->webhookAuthorization != null) {
            $headers['X-Webhook-Authorization'] = $request->webhookAuthorization;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            $body->addPart($request->file->toMultipartFormDataPart('file'));
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/gif",
                    method: HttpMethod::POST,
                    headers: $headers,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfConvertToGifResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API uploads multiple PDF files to the API Freaks server and generates their unique file IDs.
     *
     * @param PdfUploadResourcesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?PdfUploadResourcesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfUploadResources(PdfUploadResourcesRequest $request, ?array $options = null): ?PdfUploadResourcesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        $body = new MultipartFormData();
        if ($request->file != null) {
            foreach ($request->file as $file) {
                $body->addPart($file->toMultipartFormDataPart('file'));
            }
        }
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/resource/upload",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfUploadResourcesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API uploads PDF files to the API Freaks server in binary format.
     *
     * @param PdfUploadBinaryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PdfUploadBinaryResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfUploadBinary(PdfUploadBinaryRequest $request, ?array $options = null): ?PdfUploadBinaryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['file_name'] = $request->fileName;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/resource/upload-binary",
                    method: HttpMethod::POST,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfUploadBinaryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API downloads PDF files or ZIP archives from the server using their unique resource ID.
     *
     * @param PdfDownloadResourceRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfDownloadResource(PdfDownloadResourceRequest $request, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['resource_id'] = $request->resourceId;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/resource/download",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API checks the status of a previously initiated PDF processing task using its unique task ID.
     *
     * @param PdfGetTaskStatusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PdfGetTaskStatusResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfGetTaskStatus(PdfGetTaskStatusRequest $request, ?array $options = null): ?PdfGetTaskStatusResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['task_id'] = $request->taskId;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/task-status",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfGetTaskStatusResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API checks the status of a PDF file using its unique file ID, providing information about its creation and potential deletion time.
     *
     * @param PdfGetFileStatusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PdfGetFileStatusResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfGetFileStatus(PdfGetFileStatusRequest $request, ?array $options = null): ?PdfGetFileStatusResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['file_id'] = $request->fileId;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/file-status",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfGetFileStatusResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API retrieves a list of all PDF files uploaded and generated by a specific user. Please note that if the user is part of an organization, only the Organization Administrator can access this endpoint. Organization Members cannot access this endpoint.
     *
     * @param PdfListFilesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PdfListFilesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfListFiles(PdfListFilesRequest $request, ?array $options = null): ?PdfListFilesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/files",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfListFilesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * This API deletes a PDF file using its unique file ID.
     *
     * @param PdfDeleteFileRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PdfDeleteFileResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function pdfDeleteFile(PdfDeleteFileRequest $request, ?array $options = null): ?PdfDeleteFileResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['file_id'] = $request->fileId;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/pdf/file",
                    method: HttpMethod::DELETE,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PdfDeleteFileResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Capture full-page screenshots and videos of websites with advanced options like device simulation, custom code injection, cookie banner blocking, and scrollable content recording.
     * Supports multiple output formats including JSON, image, GIF, MP4, and WebM.
     *
     * @param ScreenshotCaptureRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function screenshotCapture(ScreenshotCaptureRequest $request, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['url'] = $request->url;
        if ($request->output != null) {
            $query['output'] = $request->output;
        }
        if ($request->fileType != null) {
            $query['file_type'] = $request->fileType;
        }
        if ($request->width != null) {
            $query['width'] = $request->width;
        }
        if ($request->height != null) {
            $query['height'] = $request->height;
        }
        if ($request->fullPage != null) {
            $query['full_page'] = $request->fullPage;
        }
        if ($request->fresh != null) {
            $query['fresh'] = $request->fresh;
        }
        if ($request->noCookieBanners != null) {
            $query['no_cookie_banners'] = $request->noCookieBanners;
        }
        if ($request->enableCaching != null) {
            $query['enable_caching'] = $request->enableCaching;
        }
        if ($request->blockAds != null) {
            $query['block_ads'] = $request->blockAds;
        }
        if ($request->blockChatWidgets != null) {
            $query['block_chat_widgets'] = $request->blockChatWidgets;
        }
        if ($request->extractText != null) {
            $query['extract_text'] = $request->extractText;
        }
        if ($request->extractHtml != null) {
            $query['extract_html'] = $request->extractHtml;
        }
        if ($request->destroyScreenshot != null) {
            $query['destroy_screenshot'] = $request->destroyScreenshot;
        }
        if ($request->lazyLoad != null) {
            $query['lazy_load'] = $request->lazyLoad;
        }
        if ($request->retina != null) {
            $query['retina'] = $request->retina;
        }
        if ($request->darkMode != null) {
            $query['dark_mode'] = $request->darkMode;
        }
        if ($request->blockTracking != null) {
            $query['block_tracking'] = $request->blockTracking;
        }
        if ($request->enableIncognito != null) {
            $query['enable_incognito'] = $request->enableIncognito;
        }
        if ($request->omitBackground != null) {
            $query['omit_background'] = $request->omitBackground;
        }
        if ($request->thumbnailWidth != null) {
            $query['thumbnail_width'] = $request->thumbnailWidth;
        }
        if ($request->adjustTop != null) {
            $query['adjust_top'] = $request->adjustTop;
        }
        if ($request->waitForEvent != null) {
            $query['wait_for_event'] = $request->waitForEvent;
        }
        if ($request->grayscale != null) {
            $query['grayscale'] = $request->grayscale;
        }
        if ($request->delay != null) {
            $query['delay'] = $request->delay;
        }
        if ($request->timeout != null) {
            $query['timeout'] = $request->timeout;
        }
        if ($request->ttl != null) {
            $query['ttl'] = $request->ttl;
        }
        if ($request->clipX != null) {
            $query['clip[x]'] = $request->clipX;
        }
        if ($request->clipY != null) {
            $query['clip[y]'] = $request->clipY;
        }
        if ($request->clipWidth != null) {
            $query['clip[width]'] = $request->clipWidth;
        }
        if ($request->clipHeight != null) {
            $query['clip[height]'] = $request->clipHeight;
        }
        if ($request->cssUrl != null) {
            $query['css_url'] = $request->cssUrl;
        }
        if ($request->css != null) {
            $query['css'] = $request->css;
        }
        if ($request->jsUrl != null) {
            $query['js_url'] = $request->jsUrl;
        }
        if ($request->js != null) {
            $query['js'] = $request->js;
        }
        if ($request->blockJs != null) {
            $query['block_js'] = $request->blockJs;
        }
        if ($request->blockStylesheets != null) {
            $query['block_stylesheets'] = $request->blockStylesheets;
        }
        if ($request->blockImages != null) {
            $query['block_images'] = $request->blockImages;
        }
        if ($request->blockMedia != null) {
            $query['block_media'] = $request->blockMedia;
        }
        if ($request->blockFont != null) {
            $query['block_font'] = $request->blockFont;
        }
        if ($request->blockTextTrack != null) {
            $query['block_text_track'] = $request->blockTextTrack;
        }
        if ($request->blockXhr != null) {
            $query['block_xhr'] = $request->blockXhr;
        }
        if ($request->blockFetch != null) {
            $query['block_fetch'] = $request->blockFetch;
        }
        if ($request->blockEventSource != null) {
            $query['block_event_source'] = $request->blockEventSource;
        }
        if ($request->blockWebSocket != null) {
            $query['block_web_socket'] = $request->blockWebSocket;
        }
        if ($request->blockManifest != null) {
            $query['block_manifest'] = $request->blockManifest;
        }
        if ($request->blockSpecificRequests != null) {
            $query['block_specific_requests'] = $request->blockSpecificRequests;
        }
        if ($request->blurSelector != null) {
            $query['blur_selector'] = $request->blurSelector;
        }
        if ($request->removeSelector != null) {
            $query['remove_selector'] = $request->removeSelector;
        }
        if ($request->resultFileName != null) {
            $query['result_file_name'] = $request->resultFileName;
        }
        if ($request->scrollingScreenshot != null) {
            $query['scrolling_screenshot'] = $request->scrollingScreenshot;
        }
        if ($request->scrollSpeed != null) {
            $query['scroll_speed'] = $request->scrollSpeed;
        }
        if ($request->scrollBack != null) {
            $query['scroll_back'] = $request->scrollBack;
        }
        if ($request->startImmediately != null) {
            $query['start_immediately'] = $request->startImmediately;
        }
        if ($request->multipleScrolling != null) {
            $query['multiple_scrolling'] = $request->multipleScrolling;
        }
        if ($request->sizes != null) {
            $query['sizes'] = $request->sizes;
        }
        if ($request->duration != null) {
            $query['duration'] = $request->duration;
        }
        if ($request->failOnError != null) {
            $query['fail_on_error'] = $request->failOnError;
        }
        if ($request->longitude != null) {
            $query['longitude'] = $request->longitude;
        }
        if ($request->latitude != null) {
            $query['latitude'] = $request->latitude;
        }
        if ($request->proxy != null) {
            $query['proxy'] = $request->proxy;
        }
        if ($request->headers != null) {
            $query['headers'] = $request->headers;
        }
        if ($request->cookies != null) {
            $query['cookies'] = $request->cookies;
        }
        if ($request->scrollToElement != null) {
            $query['scroll_to_element'] = $request->scrollToElement;
        }
        if ($request->selector != null) {
            $query['selector'] = $request->selector;
        }
        if ($request->userAgent != null) {
            $query['user_agent'] = $request->userAgent;
        }
        if ($request->acceptLanguages != null) {
            $query['accept_languages'] = $request->acceptLanguages;
        }
        if ($request->customHtml != null) {
            $query['custom_html'] = $request->customHtml;
        }
        if ($request->imageQuality != null) {
            $query['image_quality'] = $request->imageQuality;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/screenshot",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Our Bulk Screenshot API allows you to capture screenshots of multiple webpages simultaneously, saving you time and effort. Instead of manually capturing each page one by one, you can batch process URLs and receive high-quality screenshots in the format you choose.
     *  Maximum `50 URLs` per request.
     *
     * @param BulkScreenshotCaptureRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkScreenshotCaptureResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkScreenshotCapture(BulkScreenshotCaptureRequest $request, ?array $options = null): ?BulkScreenshotCaptureResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/screenshot",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkScreenshotCaptureResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get live forex rates for all world currencies with customizable update frequency
     *
     * @param CurrencyLatestRatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyLatestRatesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyLatestRates(CurrencyLatestRatesRequest $request, ?array $options = null): ?CurrencyLatestRatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->base != null) {
            $query['base'] = $request->base;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        if ($request->updates != null) {
            $query['updates'] = $request->updates;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/rates/latest",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyLatestRatesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get historical exchange rates for any specific date
     *
     * @param CurrencyHistoricalRatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyHistoricalRatesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyHistoricalRates(CurrencyHistoricalRatesRequest $request, ?array $options = null): ?CurrencyHistoricalRatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['date'] = JsonSerializer::serializeDate($request->date);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->base != null) {
            $query['base'] = $request->base;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/rates/historical",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyHistoricalRatesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Convert amount between currencies using the latest exchange rates
     *
     * @param CurrencyConvertLatestRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyConvertLatestResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyConvertLatest(CurrencyConvertLatestRequest $request, ?array $options = null): ?CurrencyConvertLatestResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['from'] = $request->from;
        $query['to'] = $request->to;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->amount != null) {
            $query['amount'] = $request->amount;
        }
        if ($request->updates != null) {
            $query['updates'] = $request->updates;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/converter/latest/prices",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyConvertLatestResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Convert amount between currencies using historical rates
     *
     * @param CurrencyConvertHistoricalRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyConvertHistoricalResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyConvertHistorical(CurrencyConvertHistoricalRequest $request, ?array $options = null): ?CurrencyConvertHistoricalResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['from'] = $request->from;
        $query['to'] = $request->to;
        $query['date'] = JsonSerializer::serializeDate($request->date);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->amount != null) {
            $query['amount'] = $request->amount;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/converter/historical/prices",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyConvertHistoricalResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get exchange rates for a time range
     *
     * @param CurrencyTimeSeriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyTimeSeriesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyTimeSeries(CurrencyTimeSeriesRequest $request, ?array $options = null): ?CurrencyTimeSeriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->base != null) {
            $query['base'] = $request->base;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/time-series",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyTimeSeriesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get currency fluctuation data for a time period
     *
     * @param CurrencyFluctuationRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyFluctuationResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyFluctuation(CurrencyFluctuationRequest $request, ?array $options = null): ?CurrencyFluctuationResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->base != null) {
            $query['base'] = $request->base;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/fluctuation",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyFluctuationResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Convert amount using user's location
     *
     * @param CurrencyConvertByIpRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyConvertByIpResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyConvertByIp(CurrencyConvertByIpRequest $request, ?array $options = null): ?CurrencyConvertByIpResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['from'] = $request->from;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->updates != null) {
            $query['updates'] = $request->updates;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->amount != null) {
            $query['amount'] = $request->amount;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/converter/ip-to-currency",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyConvertByIpResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get list of all supported currencies with their metadata
     *
     * @param CurrencySupportedRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencySupportedResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencySupported(CurrencySupportedRequest $request, ?array $options = null): ?CurrencySupportedResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/supported",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencySupportedResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get currency symbols and codes
     *
     * @param CurrencySymbolsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencySymbolsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencySymbols(CurrencySymbolsRequest $request, ?array $options = null): ?CurrencySymbolsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/symbols",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencySymbolsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get information about historical data availability and limits
     *
     * @param CurrencyHistoricalLimitsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrencyHistoricalLimitsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currencyHistoricalLimits(CurrencyHistoricalLimitsRequest $request, ?array $options = null): ?CurrencyHistoricalLimitsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/currency/historical/data/limits",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrencyHistoricalLimitsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get live commodity rates with customizable update frequency
     *
     * @param CommodityLatestRatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CommodityLatestRatesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function commodityLatestRates(CommodityLatestRatesRequest $request, ?array $options = null): ?CommodityLatestRatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['updates'] = $request->updates;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        if ($request->quote != null) {
            $query['quote'] = $request->quote;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/commodity/rates/latest",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CommodityLatestRatesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get historical commodity rates for a specific date
     *
     * @param CommodityHistoricalRatesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CommodityHistoricalRatesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function commodityHistoricalRates(CommodityHistoricalRatesRequest $request, ?array $options = null): ?CommodityHistoricalRatesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['date'] = JsonSerializer::serializeDate($request->date);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/commodity/rates/historical",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CommodityHistoricalRatesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get commodity price fluctuation data for a time period
     *
     * @param CommodityFluctuationRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CommodityFluctuationResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function commodityFluctuation(CommodityFluctuationRequest $request, ?array $options = null): ?CommodityFluctuationResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/commodity/fluctuation",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CommodityFluctuationResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get commodity rates for a time range
     *
     * @param CommodityTimeSeriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CommodityTimeSeriesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function commodityTimeSeries(CommodityTimeSeriesRequest $request, ?array $options = null): ?CommodityTimeSeriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->symbols != null) {
            $query['symbols'] = $request->symbols;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/commodity/time-series",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CommodityTimeSeriesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get list of supported commodities
     *
     * @param CommoditySymbolsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CommoditySymbolsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function commoditySymbols(CommoditySymbolsRequest $request, ?array $options = null): ?CommoditySymbolsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/commodity/symbols",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CommoditySymbolsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieves a list of supported countries.
     *
     * @param VatSupportedCountriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?VatSupportedCountriesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function vatSupportedCountries(VatSupportedCountriesRequest $request, ?array $options = null): ?VatSupportedCountriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/vat/supported-countries",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return VatSupportedCountriesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Fetches VAT rate based on the specified or originating IP address.
     *
     * @param VatRateByIpRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<VatRateByIpResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function vatRateByIp(VatRateByIpRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->ipAddress != null) {
            $query['ipAddress'] = $request->ipAddress;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/vat/rates/ip-address",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [VatRateByIpResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Fetches VAT rates for a single country or state provided via query parameters.
     *
     * @param VatRateByCountryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<VatRateByCountryResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function vatRateByCountry(VatRateByCountryRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->state != null) {
            $query['state'] = $request->state;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/vat/rates/country",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [VatRateByCountryResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieves VAT details for multiple countries or country-state combinations in a single request. Maximum of `100` entries per request are allowed.
     *
     * @param BulkVatRateByCountryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkVatRateByCountryResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkVatRateByCountry(BulkVatRateByCountryRequest $request, ?array $options = null): ?BulkVatRateByCountryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/vat/rates/country",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkVatRateByCountryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates an EU or UK VAT number and returns registration status details.
     *
     * @param VatValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?VatValidateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function vatValidate(VatValidateRequest $request, ?array $options = null): ?VatValidateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['vatNumber'] = $request->vatNumber;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->requesterVatNumber != null) {
            $query['requesterVatNumber'] = $request->requesterVatNumber;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/vat/validation",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return VatValidateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Checks an IBAN for structural validity, checksum accuracy, and bank metadata.
     *
     * @param IbanValidateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?IbanValidateResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function ibanValidate(IbanValidateRequest $request, ?array $options = null): ?IbanValidateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['iban'] = $request->iban;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/iban/validation",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return IbanValidateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Fetches SWIFT codes for a given country, bank, and city.
     *
     * @param SwiftCodeFindRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<string>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function swiftCodeFind(SwiftCodeFindRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->country != null) {
            $query['country'] = $request->country;
        }
        if ($request->bank != null) {
            $query['bank'] = $request->bank;
        }
        if ($request->city != null) {
            $query['city'] = $request->city;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/swift-code/finder",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, ['string']); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Fetches detailed information about a SWIFT code.
     *
     * @param SwiftCodeLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SwiftCodeLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function swiftCodeLookup(SwiftCodeLookupRequest $request, ?array $options = null): ?SwiftCodeLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['swiftCode'] = $request->swiftCode;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/swift-code/lookup",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SwiftCodeLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param ZipcodeLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeLookup(ZipcodeLookupRequest $request, ?array $options = null): ?ZipcodeLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['code'] = $request->code;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->country != null) {
            $query['country'] = $request->country;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/lookup",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Validates a bulk of ZIP/postal codes and returns result for each. Maximum `100` ZIP/postal codes per request.
     *
     * @param BulkZipcodeLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkZipcodeLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkZipcodeLookup(BulkZipcodeLookupRequest $request, ?array $options = null): ?BulkZipcodeLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/lookup",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkZipcodeLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param ZipcodeSearchByCityRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeSearchByCityResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeSearchByCity(ZipcodeSearchByCityRequest $request, ?array $options = null): ?ZipcodeSearchByCityResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['city'] = $request->city;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->stateName != null) {
            $query['state_name'] = $request->stateName;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/search/city",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeSearchByCityResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param ZipcodeSearchByRegionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeSearchByRegionResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeSearchByRegion(ZipcodeSearchByRegionRequest $request, ?array $options = null): ?ZipcodeSearchByRegionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        $query['region'] = $request->region;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/search/region",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeSearchByRegionResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param ZipcodeSearchByRadiusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeSearchByRadiusResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeSearchByRadius(ZipcodeSearchByRadiusRequest $request, ?array $options = null): ?ZipcodeSearchByRadiusResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['radius'] = $request->radius;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->code != null) {
            $query['code'] = $request->code;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->country != null) {
            $query['country'] = $request->country;
        }
        if ($request->unit != null) {
            $query['unit'] = $request->unit;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/search/radius",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeSearchByRadiusResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get distance between postal codes. Maximum `100` postal codes per request.
     *
     * @param ZipcodeDistanceRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeDistanceResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeDistance(ZipcodeDistanceRequest $request, ?array $options = null): ?ZipcodeDistanceResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/distance",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeDistanceResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get matching ZIP/postal code pairs within a specified distance. Maximum `100` postal codes per request.
     *
     * @param ZipcodeDistanceMatchRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ZipcodeDistanceMatchResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function zipcodeDistanceMatch(ZipcodeDistanceMatchRequest $request, ?array $options = null): ?ZipcodeDistanceMatchResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/zipcode/distance/match",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ZipcodeDistanceMatchResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get current weather data including temperature, humidity, precipitation, wind conditions, atmospheric pressure, and air quality for any location. Accepts city names, coordinates, or IP addresses. Also includes astronomy data and timezone-aware timestamps.
     *
     * @param CurrentWeatherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CurrentWeatherResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function currentWeather(CurrentWeatherRequest $request, ?array $options = null): ?CurrentWeatherResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/current",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CurrentWeatherResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve current weather conditions for up to `50 locations` in a single request. A maximum of 50 locations (city names, IP addresses, or geographic coordinates) can be included in the request body.
     *
     * @param BulkCurrentWeatherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BulkCurrentWeatherResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkCurrentWeather(BulkCurrentWeatherRequest $request, ?array $options = null): ?BulkCurrentWeatherResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/current",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return BulkCurrentWeatherResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Access comprehensive weather forecasts with customizable precision - choose from daily overviews, hourly breakdowns, or even minute-by-minute data. Configure your date ranges or use the default 7-day forecast for standard weather planning.
     *
     * @param WeatherForecastRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WeatherForecastResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function weatherForecast(WeatherForecastRequest $request, ?array $options = null): ?WeatherForecastResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->startDate != null) {
            $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->forecastDays != null) {
            $query['forecastDays'] = $request->forecastDays;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/forecast",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return WeatherForecastResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Access past weather conditions for specific dates with records going back to 1940. Retrieve comprehensive historical data with both daily and hourly precision options.
     *
     * @param HistoricalWeatherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?HistoricalWeatherResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function historicalWeather(HistoricalWeatherRequest $request, ?array $options = null): ?HistoricalWeatherResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['date'] = JsonSerializer::serializeDate($request->date);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/historical",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return HistoricalWeatherResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Pull historical weather information for date ranges up to 90 days (daily data) or 7 days (hourly data). Get consistent formatting across your specified date range with reliable historical weather patterns.
     *
     * @param WeatherTimeSeriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WeatherTimeSeriesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function weatherTimeSeries(WeatherTimeSeriesRequest $request, ?array $options = null): ?WeatherTimeSeriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/time-series",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return WeatherTimeSeriesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Provides hourly forecasts of marine conditions including wave heights, wave directions, wave periods, swell info, sea surface temperatures, and ocean currents. Supports multiple geographical points and returns daily max wave statistics for up to 7 days. Ideal for maritime planning, navigation, and coastal activities.
     *
     * @param MarineWeatherRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MarineWeatherResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function marineWeather(MarineWeatherRequest $request, ?array $options = null): ?MarineWeatherResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->startDate != null) {
            $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/marine",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return MarineWeatherResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Monitor and predict air quality conditions using European and US AQI standards. Track pollutant concentrations including PM10, PM2.5, carbon monoxide, nitrogen dioxide, sulfur dioxide, ozone, and dust particles. Get current readings plus hourly forecasts up to 5 days ahead, complete with UV index and aerosol measurements for comprehensive air quality assessment.
     *
     * @param AirQualityRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AirQualityResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function airQuality(AirQualityRequest $request, ?array $options = null): ?AirQualityResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->startDate != null) {
            $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        }
        if ($request->endDate != null) {
            $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/air-quality",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AirQualityResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Provides flood forecast data for a given location, including river discharge metrics such as mean, median, maximum, minimum, and percentile values (p25, p75). Requires a startDate and endDate, with the date range limited to 16 days. Location can be specified using city name, latitude/longitude, or IP address.
     *
     * @param FloodForecastRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FloodForecastResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function floodForecast(FloodForecastRequest $request, ?array $options = null): ?FloodForecastResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['startDate'] = JsonSerializer::serializeDate($request->startDate);
        $query['endDate'] = JsonSerializer::serializeDate($request->endDate);
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->precision != null) {
            $query['precision'] = $request->precision;
        }
        if ($request->timezone != null) {
            $query['timezone'] = $request->timezone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/weather/flood",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return FloodForecastResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve countries, optionally filtered by region or subregion.
     *
     * @param GetCountriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCountriesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getCountries(GetCountriesRequest $request, ?array $options = null): ?GetCountriesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->region != null) {
            $query['region'] = $request->region;
        }
        if ($request->subregion != null) {
            $query['subregion'] = $request->subregion;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/countries",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCountriesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param GetCountryDetailsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCountryDetailsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getCountryDetails(GetCountryDetailsRequest $request, ?array $options = null): ?GetCountryDetailsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/country/details",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCountryDetailsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param GetRegionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetRegionsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getRegions(GetRegionsRequest $request, ?array $options = null): ?GetRegionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/regions",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetRegionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param GetSubregionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSubregionsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getSubregions(GetSubregionsRequest $request, ?array $options = null): ?GetSubregionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['region'] = $request->region;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/subregions",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSubregionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve administrative units based on ISO 3166-1 alpha-2 country code.
     *
     * @param GetAdminLevelsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAdminLevelsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getAdminLevels(GetAdminLevelsRequest $request, ?array $options = null): ?GetAdminLevelsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/admin-levels",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetAdminLevelsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve administrative divisions for a given country using ISO 3166-1 alpha-2 country codes. You can optionally filter by administrative levels.
     *
     * @param GetAdminUnitsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAdminUnitsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getAdminUnits(GetAdminUnitsRequest $request, ?array $options = null): ?GetAdminUnitsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->adminLevels != null) {
            $query['adminLevels'] = $request->adminLevels;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/admin-units",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetAdminUnitsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve detailed administrative unit information by country and optionally filtered by admin code.
     *
     * @param GetAdminUnitDetailsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAdminUnitDetailsResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getAdminUnitDetails(GetAdminUnitDetailsRequest $request, ?array $options = null): ?GetAdminUnitDetailsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        $query['admin_unit'] = $request->adminUnit;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/admin-unit/details",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetAdminUnitDetailsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve a list of cities within a country, optionally filtered by an administrative unit code.
     *
     * @param GetCitiesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetCitiesResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getCities(GetCitiesRequest $request, ?array $options = null): ?GetCitiesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['country'] = $request->country;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->adminUnit != null) {
            $query['admin_unit'] = $request->adminUnit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geo/cities",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetCitiesResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get list of all supported flags with their metadata
     *
     * @param GetSupportedFlagsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<GetSupportedFlagsResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getSupportedFlags(GetSupportedFlagsRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/flags/supported",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [GetSupportedFlagsResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve the flag for a specific country
     *
     * @param GetFlagsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function getFlags(GetFlagsRequest $request, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['name'] = $request->name;
        $query['shape'] = $request->shape;
        $query['type'] = $request->type;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->size != null) {
            $query['size'] = $request->size;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/flags",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve current time, date, and timezone-related information by specifying a timezone name, location address, location coordinates, IP address, or use the client IP address if no parameter is passed.
     *
     * @param TimezoneLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TimezoneLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function timezoneLookup(TimezoneLookupRequest $request, ?array $options = null): ?TimezoneLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->tz != null) {
            $query['tz'] = $request->tz;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->lang != null) {
            $query['lang'] = $request->lang;
        }
        if ($request->iataCode != null) {
            $query['iata_code'] = $request->iataCode;
        }
        if ($request->icaoCode != null) {
            $query['icao_code'] = $request->icaoCode;
        }
        if ($request->loCode != null) {
            $query['lo_code'] = $request->loCode;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geolocation/timezone",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TimezoneLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Converts a given time from one timezone to another using various input types like timezone name, coordinates, location, or codes.
     *
     * @param TimezoneConvertRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TimezoneConvertResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function timezoneConvert(TimezoneConvertRequest $request, ?array $options = null): ?TimezoneConvertResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->time != null) {
            $query['time'] = $request->time;
        }
        if ($request->tzFrom != null) {
            $query['tz_from'] = $request->tzFrom;
        }
        if ($request->tzTo != null) {
            $query['tz_to'] = $request->tzTo;
        }
        if ($request->latFrom != null) {
            $query['lat_from'] = $request->latFrom;
        }
        if ($request->longFrom != null) {
            $query['long_from'] = $request->longFrom;
        }
        if ($request->latTo != null) {
            $query['lat_to'] = $request->latTo;
        }
        if ($request->longTo != null) {
            $query['long_to'] = $request->longTo;
        }
        if ($request->locationFrom != null) {
            $query['location_from'] = $request->locationFrom;
        }
        if ($request->locationTo != null) {
            $query['location_to'] = $request->locationTo;
        }
        if ($request->iataFrom != null) {
            $query['iata_from'] = $request->iataFrom;
        }
        if ($request->iataTo != null) {
            $query['iata_to'] = $request->iataTo;
        }
        if ($request->icaoFrom != null) {
            $query['icao_from'] = $request->icaoFrom;
        }
        if ($request->icaoTo != null) {
            $query['icao_to'] = $request->icaoTo;
        }
        if ($request->locodeFrom != null) {
            $query['locode_from'] = $request->locodeFrom;
        }
        if ($request->locodeTo != null) {
            $query['locode_to'] = $request->locodeTo;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/timezone/converter",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TimezoneConvertResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Parse User Agent string to get detailed browser, device, and operating system information
     *
     * @param UserAgentLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UserAgentLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function userAgentLookup(UserAgentLookupRequest $request, ?array $options = null): ?UserAgentLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/user-agent/lookup",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UserAgentLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Parse up to `50,000 User-Agent strings` at once in a single request.
     *
     * @param BulkUserAgentLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<BulkUserAgentLookupResponseItem>
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function bulkUserAgentLookup(BulkUserAgentLookupRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/user-agent/lookup",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [BulkUserAgentLookupResponseItem::class]); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Perform Optical Character Recognition (OCR) on images, PDFs, or ZIP archives. Supports two models: `mini-ocr-v1` for CAPTCHA-optimized OCR and `ocr-v1` for general-purpose document text extraction. Supports zonal OCR to extract text from specific regions of an image.
     *
     * **Notes:**
     * - The `zone` query parameter cannot be given with .pdf and .zip types as it can only be applied to single image query.
     * - The `page_range` query parameter cannot be given in any other type except .pdf types.
     * - PDFs containing images in them are allowed only for processing.
     * - The `mini-ocr-v1` model doesn’t support the following query parameters:
     *     - `page_range` (.pdf types)
     *     - `zone`
     *
     * @param OcrPredictRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OcrPredictResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function ocrPredict(OcrPredictRequest $request, ?array $options = null): ?OcrPredictResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        $query['model'] = $request->model;
        if ($request->url != null) {
            $query['url'] = $request->url;
        }
        if ($request->pageRange != null) {
            $query['page_range'] = $request->pageRange;
        }
        if ($request->zone != null) {
            $query['zone'] = $request->zone;
        }
        if ($request->newLine != null) {
            $query['new_line'] = $request->newLine;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/ocr/predict",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return OcrPredictResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Analyze text for grammar errors and return the exact words flagged as grammatically incorrect with zero-based word positions.
     *
     * @param GrammarDetectRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrammarDetectResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function grammarDetect(GrammarDetectRequest $request, ?array $options = null): ?GrammarDetectResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/readability/grammar/detect",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GrammarDetectResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Submit text with grammatical issues and receive a clean grammar-corrected result for proofreading and content workflows.
     *
     * @param GrammarCorrectRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrammarCorrectResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function grammarCorrect(GrammarCorrectRequest $request, ?array $options = null): ?GrammarCorrectResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/readability/grammar/correct",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GrammarCorrectResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Analyze text and return weak, vague, or filler words with zero-based word positions to help writers produce clearer and more concise content.
     *
     * @param WeakWordsDetectRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WeakWordsDetectResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function weakWordsDetect(WeakWordsDetectRequest $request, ?array $options = null): ?WeakWordsDetectResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/readability/weak-words",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return WeakWordsDetectResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Analyze text readability using industry-standard formulas including Flesch Reading Ease, Flesch-Kincaid Grade Level, Gunning Fog Index, SMOG Index, Coleman-Liau Index, and Automated Readability Index.
     *
     * @param ReadabilityScoreRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ReadabilityScoreResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function readabilityScore(ReadabilityScoreRequest $request, ?array $options = null): ?ReadabilityScoreResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->target != null) {
            $query['target'] = $request->target;
        }
        if ($request->exclude != null) {
            $query['exclude'] = $request->exclude;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/readability/score",
                    method: HttpMethod::POST,
                    query: $query,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ReadabilityScoreResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve sunrise and sunset times, current position of the moon, and other related information by specifying a location address, location coordinates, IP address, or using the client IP address if no parameter is passed.
     *
     * @param AstronomyLookupRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AstronomyLookupResponse
     * @throws ApifreaksException
     * @throws ApifreaksApiException
     */
    public function astronomyLookup(AstronomyLookupRequest $request, ?array $options = null): ?AstronomyLookupResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['apiKey'] = $request->apiKey;
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        if ($request->location != null) {
            $query['location'] = $request->location;
        }
        if ($request->lat != null) {
            $query['lat'] = $request->lat;
        }
        if ($request->long != null) {
            $query['long'] = $request->long;
        }
        if ($request->ip != null) {
            $query['ip'] = $request->ip;
        }
        if ($request->lang != null) {
            $query['lang'] = $request->lang;
        }
        if ($request->date != null) {
            $query['date'] = JsonSerializer::serializeDate($request->date);
        }
        if ($request->elevation != null) {
            $query['elevation'] = $request->elevation;
        }
        if ($request->timeZone != null) {
            $query['time_zone'] = $request->timeZone;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "v1.0/geolocation/astronomy",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AstronomyLookupResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ApifreaksException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ApifreaksException(message: $e->getMessage(), previous: $e);
        }
        throw new ApifreaksApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
