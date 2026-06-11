# Reference
This reference lists the generated methods available on `Apifreaks\ApifreaksClient`.

<details><summary><code>$client->geolocationLookup($request) -> GeolocationLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get detailed geolocation data for an IP address including country, city, timezone, currency, and optional security and user-agent information

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GeolocationLookupRequest;

$client = new ApifreaksClient();
$request = new GeolocationLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->geolocationLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GeolocationLookupRequestFormat>` — optional. Format of the response.

**ip:** `?string` — optional. IPv4, IPv6, or hostname for geolocation lookup

**lang:** `?value-of<GeolocationLookupRequestLang>` — optional. Response language for location fields

**fields:** `?string` — optional. Comma separated list of fields to include in response

**excludes:** `?string` — optional. Comma separated list of fields to exclude from response

**include:** `?string` — optional. Additional data to include (location, network, security, currency, time_zone, user_agent, country_metadata , hostname, liveHostname, hostnameFallbackLivet)

#### ↩️ Response

`GeolocationLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkGeolocationLookup($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve detailed geolocation data for multiple IP addresses in a single request. Supports up to `50,000` IP-addresses/host-names per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkGeolocationLookupRequest;

$client = new ApifreaksClient();
$request = new BulkGeolocationLookupRequest([
    'apiKey' => "apiKey",
    'ips' => ["8.8.8.8", "1.1.1.1"],
]);

$response = $client->bulkGeolocationLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkGeolocationLookupRequestFormat>` — optional. Format of the response.

**lang:** `?string` — optional. Language of the response.

**fields:** `?string` — optional. Comma-separated list of fields to include in the response. Can include "geo".

**excludes:** `?string` — optional. Comma-separated list of fields to exclude from the response (except "ip").

**include:** `?string` — optional. Comma-separated list of additional information to include in the response.

**ips:** `array<string>` — required. List of IP addresses or hostnames to lookup

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->ipSecurityLookup($request) -> IpSecurityLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get comprehensive security information for a given IP address. Detects VPNs, proxies, Tor nodes, and other security threats.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\IpSecurityLookupRequest;

$client = new ApifreaksClient();
$request = new IpSecurityLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->ipSecurityLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<IpSecurityLookupRequestFormat>` — optional. Format of the response.

**ip:** `?string` — optional. A valid IPv4 or IPv6 address to look up. If omitted, the API uses the public IP of the requesting client.

**fields:** `?string` — optional. Comma-separated list of fields to return. Supports dot notation (e.g. security.threat_score).

**excludes:** `?string` — optional. Comma-separated list of fields to remove from the response. Supports dot notation (e.g. security.is_tor).

#### ↩️ Response

`IpSecurityLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkIpSecurityLookup($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

The Bulk IP Security Lookup API allows you to retrieve security details for up to `50,000` IP-addresses in a single request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkIpSecurityLookupRequest;

$client = new ApifreaksClient();
$request = new BulkIpSecurityLookupRequest([
    'apiKey' => "apiKey",
    'ips' => ["8.8.8.8", "1.1.1.1"],
]);

$response = $client->bulkIpSecurityLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkIpSecurityLookupRequestFormat>` — optional. Format of the response.

**fields:** `?string` — optional. Comma-separated list of fields to return. Supports dot notation (e.g. security.threat_score).

**excludes:** `?string` — optional. Comma-separated list of fields to remove from the response. Supports dot notation (e.g. security.is_tor).

**ips:** `array<string>` — required. List of IP addresses to lookup

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->geocoderSearch($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Convert a given address or place name into geographic coordinates (latitude and longitude).

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GeocoderSearchRequest;

$client = new ApifreaksClient();
$request = new GeocoderSearchRequest([
    'apiKey' => "apiKey",
    'query' => "Wembley Stadium, London",
]);

$response = $client->geocoderSearch($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GeocoderSearchRequestFormat>` — optional. Format of the response.

**query:** `string` — required. Free-form search query, e.g. Wembley Stadium, London

**limit:** `?int` — optional. Max number of results to return (1–40). May return fewer if matches are weak.

**minLat:** `?float` — optional. Minimum latitude for the viewbox. Must be ≤ max_lat and between -90 and 90.

**maxLat:** `?float` — optional. Maximum latitude for the viewbox. Must be ≥ min_lat and between -90 and 90.

**minLon:** `?float` — optional. Minimum longitude for the viewbox. Must be ≤ max_lon and between -180 and 180.

**maxLon:** `?float` — optional. Maximum longitude for the viewbox. Must be ≥ min_lon and between -180 and 180.

**acceptLanguage:** `?string` — optional. Preferred language order for showing search results. This may either be a simple comma-separated list of language codes or a single entry. The results will be in the 1st language which is matched from the header. As a fallback if the results are not supported in the given language, 'en' will be used.

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->geocoderReverse($request) -> GeocoderReverseResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Convert geographic coordinates (latitude and longitude) into a human-readable address or place name.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GeocoderReverseRequest;

$client = new ApifreaksClient();
$request = new GeocoderReverseRequest([
    'apiKey' => "apiKey",
    'lat' => 40.7128,
    'lon' => -74.0060,
]);

$response = $client->geocoderReverse($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GeocoderReverseRequestFormat>` — optional. Format of the response.

**lat:** `float` — required. WGS84 latitude value ranging from -90 to 90.

**lon:** `float` — required. WGS84 longitude value ranging from -180 to 180.

**acceptLanguage:** `?string` — optional. Preferred language order for showing search results. This may either be a simple comma-separated list of language codes or a single entry. The results will be in the 1st language which is matched from the header. As a fallback if the results are not supported in the given language, en will be used.

#### ↩️ Response

`GeocoderReverseResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainWhoisLookup($request) -> DomainWhoisLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve current WHOIS information for a domain name. This endpoint provides detailed registration information including registrar details, dates, nameservers, and registrant information.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainWhoisLookupRequest;

$client = new ApifreaksClient();
$request = new DomainWhoisLookupRequest([
    'apiKey' => "apiKey",
    'domainName' => "example.com",
]);

$response = $client->domainWhoisLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainWhoisLookupRequestFormat>` — optional. Response format (defaults to json)

**domainName:** `string` — required. Domain name for WHOIS lookup

#### ↩️ Response

`DomainWhoisLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkDomainWhoisLookup($request) -> BulkDomainWhoisLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve WHOIS information for `100 Domains per Request`.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkDomainWhoisLookupRequest;

$client = new ApifreaksClient();
$request = new BulkDomainWhoisLookupRequest([
    'apiKey' => "apiKey",
    'domainNames' => ["example.com", "openai.com"],
]);

$response = $client->bulkDomainWhoisLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkDomainWhoisLookupRequestFormat>` — optional. Format of the response.

**domainNames:** `array<string>` — required. A list of domain names for which WHOIS data is requested.

#### ↩️ Response

`BulkDomainWhoisLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->ipWhoisLookup($request) -> IpWhoisLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Returns WHOIS registration details for a specified IP address (IPv4 or IPv6).

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\IpWhoisLookupRequest;

$client = new ApifreaksClient();
$request = new IpWhoisLookupRequest([
    'apiKey' => "apiKey",
    'ip' => "8.8.8.8",
]);

$response = $client->ipWhoisLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<IpWhoisLookupRequestFormat>` — optional. Format of the response.

**ip:** `string` — required. The IP address (IPv4 or IPv6) for which WHOIS data is requested.

#### ↩️ Response

`IpWhoisLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->asnWhoisLookup($request) -> AsnWhoisLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Returns WHOIS registration details for a specified ASN, with or without the 'as' prefix.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\AsnWhoisLookupRequest;

$client = new ApifreaksClient();
$request = new AsnWhoisLookupRequest([
    'apiKey' => "apiKey",
    'asn' => "AS15169",
]);

$response = $client->asnWhoisLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<AsnWhoisLookupRequestFormat>` — optional. Format of the response.

**asn:** `string` — required. The Autonomous System Number (ASN) to retrieve WHOIS data for. Can be prefixed with 'as' or not.

#### ↩️ Response

`AsnWhoisLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainWhoisHistory($request) -> DomainWhoisHistoryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve historical WHOIS records for a domain name. This endpoint provides a timeline of all recorded changes in domain registration information.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainWhoisHistoryRequest;

$client = new ApifreaksClient();
$request = new DomainWhoisHistoryRequest([
    'apiKey' => "apiKey",
    'domainName' => "example.com",
]);

$response = $client->domainWhoisHistory($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainWhoisHistoryRequestFormat>` — optional. Format of the response.

**domainName:** `string` — required. Domain name for historical WHOIS lookup

#### ↩️ Response

`DomainWhoisHistoryResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainWhoisReverse($request) -> DomainWhoisReverseResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Performs a reverse WHOIS search using one or more search parameters like keyword, email, owner, or company.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainWhoisReverseRequest;

$client = new ApifreaksClient();
$request = new DomainWhoisReverseRequest([
    'apiKey' => "apiKey",
]);

$response = $client->domainWhoisReverse($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainWhoisReverseRequestFormat>` — optional. Format of the response.

**keyword:** `?string` — optional. Keyword search term for reverse WHOIS by keyword (case-insensitive pattern matching).

**email:** `?string` — optional. Email search term for reverse WHOIS by email address (case-insensitive exact or regex match; * wildcard supported).

**owner:** `?string` — optional. Registrant or owner name for reverse WHOIS (a full-text search phrase matching technique to retrieve results).

**company:** `?string` — optional. Organization or company name for reverse WHOIS (full-text search phrase matching technique to retrieve results).

**exact:** `?bool` — optional. Accepts 'true' or 'false'. "true" returns only records that exactly match the input (keyword, owner/registrant, or company). "false" returns all matches and is the default when omitted.

**mode:** `?value-of<DomainWhoisReverseRequestMode>` — optional

**page:** `?int` — optional. Page number for paginated results.

#### ↩️ Response

`DomainWhoisReverseResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainDnsLookup($request) -> DomainDnsLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve real-time DNS records for any hostname. Supports multiple record types including A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainDnsLookupRequest;

$client = new ApifreaksClient();
$request = new DomainDnsLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->domainDnsLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainDnsLookupRequestFormat>` — optional. Format of the response.

**hostName:** `?string` — optional. Hostname or URL whose DNS records are required.

**ipAddress:** `?string` — optional. The IP address for requested DNS's PTR record. 'type' parameter must be set to 'all'.

**type:** `?array<string>` — optional. A comma-separated list of DNS record types for lookup. Possible values: A, AAAA, MX, NS, SOA, SPF, TXT, CNAME, or all. When ipAddress is provided, type must be "all".

#### ↩️ Response

`DomainDnsLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkDomainDnsLookup($request) -> BulkDomainDnsLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Perform DNS lookups for multiple hostnames in a single request. Supports up to `100 host-names per request` and returns DNS records including A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkDomainDnsLookupRequest;

$client = new ApifreaksClient();
$request = new BulkDomainDnsLookupRequest([
    'apiKey' => "apiKey",
    'domainNames' => ["example.com", "openai.com"],
]);

$response = $client->bulkDomainDnsLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkDomainDnsLookupRequestFormat>` — optional. Format of the response.

**type:** `?array<string>` — optional

**domainNames:** `array<string>` — required. List of hostnames to lookup DNS records for

#### ↩️ Response

`BulkDomainDnsLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainDnsHistory($request) -> DomainDnsHistoryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve historical DNS records for any hostname. Access unique historical data for A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME records, including subdomains. Results are paginated with up to 100 unique records per page.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainDnsHistoryRequest;

$client = new ApifreaksClient();
$request = new DomainDnsHistoryRequest([
    'apiKey' => "apiKey",
    'hostName' => "example.com",
]);

$response = $client->domainDnsHistory($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainDnsHistoryRequestFormat>` — optional. Format of the response.

**hostName:** `string` — required. Hostname or URL whose historical DNS records are required

**type:** `?array<string>` — optional

**page:** `?int` — optional. Page number for paginated results

#### ↩️ Response

`DomainDnsHistoryResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainDnsReverse($request) -> DomainDnsReverseResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve all the hostnames associated with any particular A, AAAA, MX, NS, SOA, SPF, TXT, and CNAME DNS records. For instance, you can access all the hostnames hosted on any IP/CIDR notation, all the domain names using Cloudflare name servers, and all the domain names using Google Mailbox

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainDnsReverseRequest;

$client = new ApifreaksClient();
$request = new DomainDnsReverseRequest([
    'apiKey' => "apiKey",
    'type' => "A",
    'value' => "8.8.8.0/24",
]);

$response = $client->domainDnsReverse($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainDnsReverseRequestFormat>` — optional. Format of the response.

**type:** `value-of<DomainDnsReverseRequestType>` — required

**value:** `string` — required. Provide an IP or CIDR for A/AAAA lookups, or a hostname/selector for MX, NS, SOA, SPF, TXT, and CNAME queries. Wildcard regex patterns are also supported (e.g., mail.google.com, m*.google.com, _spf.g*.com, s*.g*.com).

**exact:** `?bool` — optional. Accepts 'true' or 'false'. "true" returns only records that exactly match the input (NS, MX, CNAME, SOA, SPF, TXT). "false" returns all matches (default when omitted).

**page:** `?int` — optional. Page number to paginate through results (defaults to 1).

#### ↩️ Response

`DomainDnsReverseResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->webScrape($request) -> WebScrapeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Execute a series of web scraping instructions on a target URL. Supports various operations like form filling, clicking, data extraction, and CAPTCHA solving.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\WebScrapeRequest;

$client = new ApifreaksClient();
$request = new WebScrapeRequest([
    'apiKey' => "apiKey",
    'url' => "https://example.com",
    'body' => [],
]);

$response = $client->webScrape($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<WebScrapeRequestFormat>` — optional. Response format returned by the API.

**url:** `string` — required. Target URL to scrape

**text:** `?bool` — optional. Set to `true` to return the data in text format else `false` for data in html format with tags.

**jsEnabled:** `?bool` — optional

**proxy:** `( bool |string |array<string, mixed> )|null` — optional. Use proxy for requests

**sslIgnore:** `?bool` — optional

**windowSize:** `?string` — optional

**adBlock:** `?bool` — optional

**captcha:** `?bool` — optional

**body:** `( WebScrapeRequestBodyBlockUrl |WebScrapeRequestBodyOne )` — required

#### ↩️ Response

`WebScrapeResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->emailValidate($request) -> EmailValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Validates a single email address and returns result.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\EmailValidateRequest;

$client = new ApifreaksClient();
$request = new EmailValidateRequest([
    'apiKey' => "apiKey",
    'email' => "user@example.com",
]);

$response = $client->emailValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<EmailValidateRequestFormat>` — optional. Format of the response

**email:** `string` — required. Email address to validate

**name:** `?string` — optional. Name of the email address

**ip:** `?string` — optional. IP address of the email address

#### ↩️ Response

`EmailValidateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkEmailValidate($request) -> BulkEmailValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Validates a bulk of email addresses and returns result for each. Maximum `10` email addresses per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkEmailValidateRequest;

$client = new ApifreaksClient();
$request = new BulkEmailValidateRequest([
    'apiKey' => "apiKey",
    'emailData' => [["email" => "user@example.com"]],
]);

$response = $client->bulkEmailValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkEmailValidateRequestFormat>` — optional. Format of the response

**emailData:** `array<BulkEmailValidateRequestEmailDataItem>` — required. Array of email objects for bulk validation

#### ↩️ Response

`BulkEmailValidateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->phoneValidate($request) -> PhoneValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Validates a single phone number and returns detailed metadata including carrier, line type, geolocation, time zones, and standardized formats.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PhoneValidateRequest;

$client = new ApifreaksClient();
$request = new PhoneValidateRequest([
    'apiKey' => "apiKey",
    'number' => "+14155552671",
]);

$response = $client->phoneValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PhoneValidateRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object. If not provided, the API defaults to JSON format.

**number:** `string` — required. Phone number to validate. Accepts international format (+14155552671), local format (4155552671) with region, or IDD format (0014155552671) with dialer_region.

**region:** `?string` — optional. Two-letter ISO country code (e.g., US, GB). Required when number is in local format without + prefix. Cannot be used together with dialer_region.

**dialerRegion:** `?string` — optional. Two-letter ISO country code indicating the country the number is being dialed from. Required when number uses IDD exit code. Cannot be used together with region.

#### ↩️ Response

`PhoneValidateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkPhoneValidate($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Validates up to 100 phone numbers in a single request. Each number is processed independently — invalid entries return per-number errors without affecting the rest of the batch.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkPhoneValidateRequest;

$client = new ApifreaksClient();
$request = new BulkPhoneValidateRequest([
    'apiKey' => "apiKey",
    'numbers' => [["number" => "+14155552671"]],
]);

$response = $client->bulkPhoneValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkPhoneValidateRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object. If not provided, the API defaults to JSON format.

**numbers:** `array<BulkPhoneValidateRequestNumbersItem>` — required. Array of phone number objects. Maximum 100 per request.

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->domainSslLookup($request) -> DomainSslLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve comprehensive SSL certificate information without the certificate chain. This endpoint provides detailed information about the SSL certificate including expiry dates, issuer details, and encryption methods.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainSslLookupRequest;

$client = new ApifreaksClient();
$request = new DomainSslLookupRequest([
    'apiKey' => "apiKey",
    'domainName' => "example.com",
]);

$response = $client->domainSslLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainSslLookupRequestFormat>` — optional. Format of the response.

**domainName:** `string` — required. Domain name or URL whose SSL certificate lookup is required

**sslRaw:** `?bool` — optional. Set to true to get the raw openSSL response of the domain

#### ↩️ Response

`DomainSslLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainSslChainLookup($request) -> DomainSslChainLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve the complete SSL certificate chain from root Certificate Authority (CA) to end-user certificate. This endpoint provides comprehensive information about each certificate in the chain.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainSslChainLookupRequest;

$client = new ApifreaksClient();
$request = new DomainSslChainLookupRequest([
    'apiKey' => "apiKey",
    'domainName' => "example.com",
]);

$response = $client->domainSslChainLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainSslChainLookupRequestFormat>` — optional. Format of the response.

**domainName:** `string` — required. Domain name or URL whose SSL certificate chain lookup is required

**sslRaw:** `?bool` — optional. Set to true to get the raw openSSL response for each certificate in the chain

#### ↩️ Response

`DomainSslChainLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainAvailabilityCheck($request) -> DomainAvailabilityCheckResponse</code></summary>
<dl>
<dd>

#### 📝 Description

The Domain Search API is designed to simplify the process of finding available domain names across all top-level domains (TLDs) and second-level domains (SLDs).

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainAvailabilityCheckRequest;

$client = new ApifreaksClient();
$request = new DomainAvailabilityCheckRequest([
    'apiKey' => "apiKey",
    'domain' => "example.com",
]);

$response = $client->domainAvailabilityCheck($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainAvailabilityCheckRequestFormat>` — optional. Format of the response.

**domain:** `string` — required. Domain name whose availability is to be checked.

**source:** `?value-of<DomainAvailabilityCheckRequestSource>` — optional. Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.

#### ↩️ Response

`DomainAvailabilityCheckResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkDomainAvailabilityCheck($request) -> BulkDomainAvailabilityCheckResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Perform Bulk Domain Availability checks using a list of domains. Supports upto `100 Domains Per Request`.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkDomainAvailabilityCheckRequest;

$client = new ApifreaksClient();
$request = new BulkDomainAvailabilityCheckRequest([
    'apiKey' => "apiKey",
    'domainNames' => ["example.com", "openai.com"],
]);

$response = $client->bulkDomainAvailabilityCheck($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkDomainAvailabilityCheckRequestFormat>` — optional. Format of the response.

**source:** `?value-of<BulkDomainAvailabilityCheckRequestSource>` — optional. Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.

**domainNames:** `array<string>` — required. List of domain names to check.

#### ↩️ Response

`BulkDomainAvailabilityCheckResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->domainAvailabilitySuggestions($request) -> DomainAvailabilitySuggestionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

The Domain Search API is designed to simplify the process of finding available domain names across all top-level domains (TLDs) and second-level domains (SLDs).

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\DomainAvailabilitySuggestionsRequest;

$client = new ApifreaksClient();
$request = new DomainAvailabilitySuggestionsRequest([
    'apiKey' => "apiKey",
    'domain' => "example.com",
]);

$response = $client->domainAvailabilitySuggestions($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<DomainAvailabilitySuggestionsRequestFormat>` — optional. Format of the response.

**domain:** `string` — required. Domain name for availability and suggestions.

**source:** `?value-of<DomainAvailabilitySuggestionsRequestSource>` — optional. Specify the data source for domain availability checks. Use "dns" for DNS-based lookups or "whois" for WHOIS-based lookups. By default, "dns" is used.

**count:** `?int` — optional. Number of suggestions to retrieve.

#### ↩️ Response

`DomainAvailabilitySuggestionsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->subdomainsLookup($request) -> SubdomainsLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

The Subdomain Lookup API is designed to retrieve subdomains related to the given domain name. It helps you explore subdomains that are available for registration or usage.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\SubdomainsLookupRequest;

$client = new ApifreaksClient();
$request = new SubdomainsLookupRequest([
    'apiKey' => "apiKey",
    'domain' => "example.com",
]);

$response = $client->subdomainsLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<SubdomainsLookupRequestFormat>` — optional. Format of the response.

**domain:** `string` — required. Domain name for availability and suggestions.

**after:** `?DateTime` — optional. Filter subdomains seen after this date (format YYYY-MM-DD).

**before:** `?DateTime` — optional. Filter subdomains seen before this date( format YYYY-MM-DD).

**status:** `?value-of<SubdomainsLookupRequestStatus>` — optional. Filter subdomains by status (active or inactive).

**page:** `?string` — optional. Page number for paginated results.

#### ↩️ Response

`SubdomainsLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfMerge($request) -> PdfMergeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API merges multiple PDF files into a single PDF, in the order they are provided

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfMergeRequest;

$client = new ApifreaksClient();
$request = new PdfMergeRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfMerge($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfMergeRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?array<string>` — optional. An array of unique file IDs referencing PDF files previously uploaded to the API Freaks server. Use this parameter to merge existing files without re-uploading them. Provide multiple IDs to merge files in the specified order.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. Specifies the desired name for the resulting merged PDF file. If not provided, a default name will be assigned.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?array<File>` — optional

#### ↩️ Response

`PdfMergeResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfRemovePages($request) -> PdfRemovePagesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API removes a selection or range of pages from a PDF file.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfRemovePagesRequest;

$client = new ApifreaksClient();
$request = new PdfRemovePagesRequest([
    'apiKey' => "apiKey",
    'pages' => "1-3",
]);

$response = $client->pdfRemovePages($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfRemovePagesRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique identifier of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output PDF file after pages have been removed. If not provided, a default name will be assigned.

**pages:** `string` — required. Specifies which pages to remove from the PDF. Accepts individual page numbers (e.g., '1,7') and/or ascending page ranges (e.g., '3-5'). Use commas to separate entries and hyphens for ranges. Reverse ranges (e.g., '5-3') are not allowed. Alternatively, you may provide only one of the following keywords: 'even' (removes all even-numbered pages), 'odd' (removes all odd-numbered pages), or 'last' (removes only the last page). The keyword 'all' is not supported for this operation. Examples: '1,3-5', 'even'. Mixing special keywords with specific pages/ranges is not allowed.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfRemovePagesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfSplit($request) -> PdfSplitResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API splits a PDF into multiple parts based on specified page numbers or ranges.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfSplitRequest;

$client = new ApifreaksClient();
$request = new PdfSplitRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfSplit($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfSplitRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired base name for the output PDF files after splitting. If not provided, a default naming convention will be used.

**pages:** `?array<string>` — optional

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfSplitResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfRotate($request) -> PdfRotateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API rotates pages of a PDF by a specified angle (in multiples of 90 degrees).

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfRotateRequest;

$client = new ApifreaksClient();
$request = new PdfRotateRequest([
    'apiKey' => "apiKey",
    'rotate' => 90,
]);

$response = $client->pdfRotate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfRotateRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output PDF file after rotation. If not provided, a default name will be assigned.

**pages:** `?string` — optional. Specifies which pages to rotate. Accepts individual page numbers (e.g., '1,7') and/or ascending page ranges (e.g., '3-5'). Use commas to separate entries and hyphens for ranges. Reverse ranges (e.g., '5-3') are not allowed. Alternatively, provide only one of the following keywords: 'even' (rotate all even-numbered pages), 'odd' (rotate all odd-numbered pages), 'last' (rotate only the last page), or 'all' (rotate all pages). Examples: '1,3-5', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**rotate:** `int` — required. The angle in degrees to rotate the selected pages. Must be one of the following values: 0, 90, 180, 270, -90, -180, or -270. All rotations are applied clockwise.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfRotateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfCompress($request) -> PdfCompressResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API compresses a given PDF file to reduce its file size.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfCompressRequest;

$client = new ApifreaksClient();
$request = new PdfCompressRequest([
    'apiKey' => "apiKey",
    'compressionLevel' => "low",
]);

$response = $client->pdfCompress($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfCompressRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file.

**output:** `?string` — optional. Name of the output PDF.

**compressionLevel:** `value-of<PdfCompressRequestCompressionLevel>` — required. Controls how aggressively the PDF is compressed. Lower levels preserve more quality, while higher levels reduce file size more.

**destroy:** `?bool` — optional. If set to true, the input file(s) will be deleted from the server immediately after the output is generated.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfCompressResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfExtractPages($request) -> PdfExtractPagesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API extracts specific pages or page ranges from a PDF file and returns them as a new PDF.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfExtractPagesRequest;

$client = new ApifreaksClient();
$request = new PdfExtractPagesRequest([
    'apiKey' => "apiKey",
    'pages' => "1-3",
]);

$response = $client->pdfExtractPages($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfExtractPagesRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output PDF file after pages have been extracted. If not provided, a default name will be assigned.

**pages:** `string` — required. Specifies which pages to extract from the PDF. You can provide individual page numbers (e.g., '2') and/or page ranges in any order, including descending (e.g., '9-5', '16-last'). Use commas to separate entries and hyphens for ranges. You may alternatively pass only one of the special keywords: 'even' (extracts all even-numbered pages), 'odd' (extracts all odd-numbered pages), 'last' (extracts only the last page), or 'all' (extracts all pages into individual files). Examples: '2,6-3', 'even', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**separated:** `?bool` — optional. If set to `true`, each of the specified pages will be extracted and returned as a separate PDF file.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfExtractPagesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfLinearize($request) -> PdfLinearizeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

API endpoint that linearizes any given PDF, restructuring it for faster loading and page-by-page viewing in web browsers.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfLinearizeRequest;

$client = new ApifreaksClient();
$request = new PdfLinearizeRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfLinearize($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfLinearizeRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output PDF file after pages have been extracted. If not provided, a default name will be assigned.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfLinearizeResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfEncrypt($request) -> PdfEncryptResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API encrypts a PDF file by setting a password required to open it.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfEncryptRequest;

$client = new ApifreaksClient();
$request = new PdfEncryptRequest([
    'apiKey' => "apiKey",
    'userPassword' => "password",
]);

$response = $client->pdfEncrypt($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfEncryptRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output encrypted PDF file. If not provided, a default name will be assigned.

**filePassword:** `?string` — optional. The password to unlock the input file if it is already protected. Either the owner password or user password can be provided. The owner password takes precedence. Password Length should be between 6 and 128 characters.

**userPassword:** `string` — required. Sets the user password required to open and view the encrypted PDF file. Password Length should be between 6 and 128 characters.

**ownerPassword:** `?string` — optional. Sets the owner password for the PDF file. This password provides full access, including the ability to remove restrictions. If not provided, the `user_password` will also be used as the owner password. Password Length should be between 6 and 128 characters.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfEncryptResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfDecrypt($request) -> PdfDecryptResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API decrypts PDF files, removing all encryption, including open passwords and permission restrictions.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfDecryptRequest;

$client = new ApifreaksClient();
$request = new PdfDecryptRequest([
    'apiKey' => "apiKey",
    'filePassword' => "value",
]);

$response = $client->pdfDecrypt($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfDecryptRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output decrypted PDF file. If not provided, a default name will be assigned.

**filePassword:** `string` — required. The password to unlock the input file if it is protected. Either the owner password or user password can be provided. The owner password takes precedence. Password Length should be between 6 and 128 characters.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfDecryptResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfRestrict($request) -> PdfRestrictResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API applies permission restrictions on a PDF file, such as disabling printing, copying, or editing. This can include password protection to enforce restrictions.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfRestrictRequest;

$client = new ApifreaksClient();
$request = new PdfRestrictRequest([
    'apiKey' => "apiKey",
    'userPassword' => "password",
]);

$response = $client->pdfRestrict($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfRestrictRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output restricted PDF file. If not provided, a default name will be assigned.

**filePassword:** `?string` — optional. The password to unlock the input file if it is already secured. Provide the owner password if available; otherwise, the user password. The owner password takes precedence. Password Length should be between 6 and 128 characters.

**userPassword:** `string` — required. Sets the password users will use to open the PDF. If this is not set, only the owner password will be configured, and anyone can open the PDF file with the provided restrictions enabled. Password Length should be between 6 and 128 characters.

**ownerPassword:** `?string` — optional. Sets the password that allows full access to the PDF (e.g., removing restrictions). If not provided, the `user_password` (if set) will also be used as the owner password. Password Length should be between 6 and 128 characters.

**restrictions:** `?array<value-of<PdfRestrictRequestRestrictionsItem>>` — optional

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfRestrictResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfUnrestrict($request) -> PdfUnrestrictResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API removes permission restrictions from a PDF while keeping it encrypted. If you want to remove all security (including encryption), use the `/pdf/decrypt` endpoint instead.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfUnrestrictRequest;

$client = new ApifreaksClient();
$request = new PdfUnrestrictRequest([
    'apiKey' => "apiKey",
    'filePassword' => "value",
]);

$response = $client->pdfUnrestrict($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfUnrestrictRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**filePassword:** `string` — required. The password to unlock the input file. Either the owner password or user password can be provided. The owner password takes precedence. Password Length should be between 6 and 128 characters.

**userPassword:** `?string` — optional. Sets the user password for the PDF file. Password Length should be between 6 and 128 characters.

**ownerPassword:** `?string` — optional. Sets the owner password for the PDF file. If the owner password is not provided, the `user_password` will also be used as the owner password. Password Length should be between 6 and 128 characters.

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfUnrestrictResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfConvertToPng($request) -> PdfConvertToPngResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API converts a given PDF file into a sequence of PNG images.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfConvertToPngRequest;

$client = new ApifreaksClient();
$request = new PdfConvertToPngRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfConvertToPng($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfConvertToPngRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**pages:** `?string` — optional. Specifies the pages or ranges at which to split the PDF. Accepts individual page numbers (e.g., '1') and/or page ranges (e.g., '4-2', 'last'). Ranges can be ascending or descending. Use commas to separate entries and hyphens for ranges. Alternatively, provide only one of the following keywords: 'even' (split at every even-numbered page), 'odd' (split at every odd-numbered page), 'last' (split at the last page only), or 'all' (split into single pages). Examples: '1,4-2,last', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**resolution:** `?int` — optional. Specifies the resolution (in DPI) for the output images. Acceptable Range is from 20 to 1200.

**imageSmoothing:** `?string` — optional. Determines the smoothing options to apply during image conversion. Valid values are 'none', 'all' or a combination of 'text', 'line', and 'image' (comma-separated).If not provided, no smoothing will be applied.

**profile:** `?value-of<PdfConvertToPngRequestProfile>` — optional. Specifies the color profile for the output PNG images. Acceptable values: bw (1-bit black & white, smallest size, no grayscale or color), gray (8-bit grayscale), rgb (24-bit RGB color, default), rgba (32-bit RGB color with alpha channel for transparency), 4-bit (4-bit indexed color, up to 16 colors, smaller size), or 8-bit (8-bit indexed color, up to 256 colors).

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfConvertToPngResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfConvertToJpg($request) -> PdfConvertToJpgResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API converts a given PDF file into a sequence of JPG images.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfConvertToJpgRequest;

$client = new ApifreaksClient();
$request = new PdfConvertToJpgRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfConvertToJpg($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfConvertToJpgRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**quality:** `?int` — optional. Controls JPG compression quality. Higher values yield sharper images with larger file sizes.

**pages:** `?string` — optional. Specifies the pages or ranges at which to split the PDF. Accepts individual page numbers (e.g., '1') and/or page ranges (e.g., '4-2', 'last'). Ranges can be ascending or descending. Use commas to separate entries and hyphens for ranges. Alternatively, provide only one of the following keywords: 'even' (split at every even-numbered page), 'odd' (split at every odd-numbered page), 'last' (split at the last page only), or 'all' (split into single pages). Examples: '1,4-2,last', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**resolution:** `?int` — optional. Specifies the resolution (in DPI) for the output images. Acceptable Range is from 20 to 1200.

**imageSmoothing:** `?string` — optional. Determines the smoothing options to apply during image conversion. Valid values are 'none', 'all' or a combination of 'text', 'line', and 'image' (comma-separated).If not provided, no smoothing will be applied.

**profile:** `?value-of<PdfConvertToJpgRequestProfile>` — optional. Specifies the color profile for the output PNG images. Acceptable values: bw (1-bit black & white, smallest size, no grayscale or color), gray (8-bit grayscale), rgb (24-bit RGB color, default), rgba (32-bit RGB color with alpha channel for transparency), 4-bit (4-bit indexed color, up to 16 colors, smaller size), or 8-bit (8-bit indexed color, up to 256 colors).

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfConvertToJpgResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfConvertToTiff($request) -> PdfConvertToTiffResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API converts a given PDF file into a sequence of TIFF images. The output images can be saved as a single TIFF file, or as a sequence of TIFF files.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfConvertToTiffRequest;

$client = new ApifreaksClient();
$request = new PdfConvertToTiffRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfConvertToTiff($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfConvertToTiffRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**pages:** `?string` — optional. Specifies the pages or ranges at which to split the PDF. Accepts individual page numbers (e.g., '1') and/or page ranges (e.g., '4-2', 'last'). Ranges can be ascending or descending. Use commas to separate entries and hyphens for ranges. Alternatively, provide only one of the following keywords: 'even' (split at every even-numbered page), 'odd' (split at every odd-numbered page), 'last' (split at the last page only), or 'all' (split into single pages). Examples: '1,4-2,last', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**resolution:** `?int` — optional. Specifies the resolution (in DPI) for the output images. Acceptable Range is from 20 to 1200.

**imageSmoothing:** `?string` — optional. Determines the smoothing options to apply during image conversion. Valid values are 'none', 'all' or a combination of 'text', 'line', and 'image' (comma-separated).If not provided, no smoothing will be applied.

**profile:** `?value-of<PdfConvertToTiffRequestProfile>` — optional. Specifies the color profile for the output PNG images. Acceptable values: bw (1-bit black & white, smallest size, no grayscale or color), gray (8-bit grayscale), rgb (24-bit RGB color, default), rgba (32-bit RGB color with alpha channel for transparency), 4-bit (4-bit indexed color, up to 16 colors, smaller size), or 8-bit (8-bit indexed color, up to 256 colors).

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfConvertToTiffResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfConvertToBmp($request) -> PdfConvertToBmpResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Converts a PDF file to a BMP image.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfConvertToBmpRequest;

$client = new ApifreaksClient();
$request = new PdfConvertToBmpRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfConvertToBmp($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfConvertToBmpRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**pages:** `?string` — optional. Specifies the pages or ranges at which to split the PDF. Accepts individual page numbers (e.g., '1') and/or page ranges (e.g., '4-2', 'last'). Ranges can be ascending or descending. Use commas to separate entries and hyphens for ranges. Alternatively, provide only one of the following keywords: 'even' (split at every even-numbered page), 'odd' (split at every odd-numbered page), 'last' (split at the last page only), or 'all' (split into single pages). Examples: '1,4-2,last', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**resolution:** `?int` — optional. Specifies the resolution (in DPI) for the output images. Acceptable Range is from 20 to 1200.

**imageSmoothing:** `?string` — optional. Determines the smoothing options to apply during image conversion. Valid values are 'none', 'all' or a combination of 'text', 'line', and 'image' (comma-separated).If not provided, no smoothing will be applied.

**profile:** `?value-of<PdfConvertToBmpRequestProfile>` — optional. Specifies the color profile for the output PNG images. Acceptable values: bw (1-bit black & white, smallest size, no grayscale or color), gray (8-bit grayscale), rgb (24-bit RGB color, default), rgba (32-bit RGB color with alpha channel for transparency), 4-bit (4-bit indexed color, up to 16 colors, smaller size), or 8-bit (8-bit indexed color, up to 256 colors).

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfConvertToBmpResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfConvertToGif($request) -> PdfConvertToGifResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API converts a given PDF file into a sequence of GIF images.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfConvertToGifRequest;

$client = new ApifreaksClient();
$request = new PdfConvertToGifRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfConvertToGif($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfConvertToGifRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `?string` — optional. The unique ID of a PDF file already uploaded to the API Freaks server. Use this as an alternative to uploading a new file directly.

**destroy:** `?bool` — optional. If set to `true`, the input file(s) will be permanently deleted from the server immediately after the output PDF is generated.

**output:** `?string` — optional. The desired name for the output unrestricted PDF file. If not provided, a default name will be assigned.

**pages:** `?string` — optional. Specifies the pages or ranges at which to split the PDF. Accepts individual page numbers (e.g., '1') and/or page ranges (e.g., '4-2', 'last'). Ranges can be ascending or descending. Use commas to separate entries and hyphens for ranges. Alternatively, provide only one of the following keywords: 'even' (split at every even-numbered page), 'odd' (split at every odd-numbered page), 'last' (split at the last page only), or 'all' (split into single pages). Examples: '1,4-2,last', 'odd', 'all'. Mixing special keywords with specific pages/ranges is not allowed.

**resolution:** `?int` — optional. Specifies the resolution (in DPI) for the output images. Acceptable Range is from 20 to 1200.

**imageSmoothing:** `?string` — optional. Determines the smoothing options to apply during image conversion. Valid values are 'none', 'all' or a combination of 'text', 'line', and 'image' (comma-separated).If not provided, no smoothing will be applied.

**profile:** `?value-of<PdfConvertToGifRequestProfile>` — optional. Specifies the color profile for the output PNG images. Acceptable values: bw (1-bit black & white, smallest size, no grayscale or color), gray (8-bit grayscale), rgb (24-bit RGB color, default), rgba (32-bit RGB color with alpha channel for transparency), 4-bit (4-bit indexed color, up to 16 colors, smaller size), or 8-bit (8-bit indexed color, up to 256 colors).

**webhookUrl:** `?string` — optional. The URL to which the webhook notification will be sent after the task is completed.

**webhookFailureNotification:** `?bool` — optional. If true, a notification will also be sent by email in case the webhook request fails all the retries.  The email notification will be sent to the requesting user or their organization’s admin if part of one.

**webhookAuthorization:** `?string` — optional. Optional custom header for webhook requests. Format: `Key:Value` (e.g., `Authorization:Bearer token123`). This will be sent as an HTTP header in the webhook call.

**file:** `?File` — optional

#### ↩️ Response

`PdfConvertToGifResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfUploadResources($request) -> PdfUploadResourcesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API uploads multiple PDF files to the API Freaks server and generates their unique file IDs.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfUploadResourcesRequest;

$client = new ApifreaksClient();
$request = new PdfUploadResourcesRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfUploadResources($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfUploadResourcesRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**file:** `?array<File>` — optional

#### ↩️ Response

`PdfUploadResourcesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfUploadBinary($request) -> PdfUploadBinaryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API uploads PDF files to the API Freaks server in binary format.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfUploadBinaryRequest;

$client = new ApifreaksClient();
$request = new PdfUploadBinaryRequest([
    'apiKey' => "apiKey",
    'fileName' => "value",
]);

$response = $client->pdfUploadBinary($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfUploadBinaryRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileName:** `string` — required

#### ↩️ Response

`PdfUploadBinaryResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfDownloadResource($request) -> string</code></summary>
<dl>
<dd>

#### 📝 Description

This API downloads PDF files or ZIP archives from the server using their unique resource ID.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfDownloadResourceRequest;

$client = new ApifreaksClient();
$request = new PdfDownloadResourceRequest([
    'apiKey' => "apiKey",
    'resourceId' => "value",
]);

$response = $client->pdfDownloadResource($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfDownloadResourceRequestFormat>` — optional

**resourceId:** `string` — required. The unique identifier of the file or ZIP archive to download.

#### ↩️ Response

`string`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfGetTaskStatus($request) -> PdfGetTaskStatusResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API checks the status of a previously initiated PDF processing task using its unique task ID.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfGetTaskStatusRequest;

$client = new ApifreaksClient();
$request = new PdfGetTaskStatusRequest([
    'apiKey' => "apiKey",
    'taskId' => "value",
]);

$response = $client->pdfGetTaskStatus($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfGetTaskStatusRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**taskId:** `string` — required. The unique ID of the PDF processing task for which the status is requested.

#### ↩️ Response

`PdfGetTaskStatusResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfGetFileStatus($request) -> PdfGetFileStatusResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API checks the status of a PDF file using its unique file ID, providing information about its creation and potential deletion time.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfGetFileStatusRequest;

$client = new ApifreaksClient();
$request = new PdfGetFileStatusRequest([
    'apiKey' => "apiKey",
    'fileId' => "value",
]);

$response = $client->pdfGetFileStatus($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfGetFileStatusRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `string` — required. The unique ID of the file whose status is requested.

#### ↩️ Response

`PdfGetFileStatusResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfListFiles($request) -> PdfListFilesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API retrieves a list of all PDF files uploaded and generated by a specific user. Please note that if the user is part of an organization, only the Organization Administrator can access this endpoint. Organization Members cannot access this endpoint.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfListFilesRequest;

$client = new ApifreaksClient();
$request = new PdfListFilesRequest([
    'apiKey' => "apiKey",
]);

$response = $client->pdfListFiles($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfListFilesRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

#### ↩️ Response

`PdfListFilesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->pdfDeleteFile($request) -> PdfDeleteFileResponse</code></summary>
<dl>
<dd>

#### 📝 Description

This API deletes a PDF file using its unique file ID.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\PdfDeleteFileRequest;

$client = new ApifreaksClient();
$request = new PdfDeleteFileRequest([
    'apiKey' => "apiKey",
    'fileId' => "value",
]);

$response = $client->pdfDeleteFile($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<PdfDeleteFileRequestFormat>` — optional. Specifies the desired format for the API response. Choose 'json' for a JSON object or 'xml' for an XML structure.

**fileId:** `string` — required. The unique ID of the file to be deleted.

#### ↩️ Response

`PdfDeleteFileResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->screenshotCapture($request) -> string</code></summary>
<dl>
<dd>

#### 📝 Description

Capture full-page screenshots and videos of websites with advanced options like device simulation, custom code injection, cookie banner blocking, and scrollable content recording. Supports multiple output formats including JSON, image, GIF, MP4, and WebM.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ScreenshotCaptureRequest;

$client = new ApifreaksClient();
$request = new ScreenshotCaptureRequest([
    'apiKey' => "apiKey",
    'url' => "https://example.com",
]);

$response = $client->screenshotCapture($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**output:** `?value-of<ScreenshotCaptureRequestOutput>` — optional. Output format for screenshot results

**fileType:** `?value-of<ScreenshotCaptureRequestFileType>` — optional. File type for screenshot output

**url:** `string` — required. URLs to capture screenshots of

**width:** `?int` — optional. Browser viewport width in pixels

**height:** `?int` — optional. Browser viewport height in pixels

**fullPage:** `?bool` — optional. Capture a full-page screenshot

**fresh:** `?bool` — optional. Bypass cache and take a fresh screenshot

**noCookieBanners:** `?bool` — optional. Remove cookie banners from the screenshot

**enableCaching:** `?bool` — optional. Enable caching for repeated requests

**blockAds:** `?bool` — optional. Block advertisements on the page

**blockChatWidgets:** `?bool` — optional. Block chat widget scripts from loading

**extractText:** `?bool` — optional. Extract visible text from the page

**extractHtml:** `?bool` — optional. Extract HTML content of the page

**destroyScreenshot:** `?bool` — optional. Auto-destroy screenshot after fetch

**lazyLoad:** `?bool` — optional. Enable lazy-loading content before screenshot

**retina:** `?bool` — optional. Capture screenshot in high-DPI (Retina) mode

**darkMode:** `?bool` — optional. Render page in dark mode

**blockTracking:** `?bool` — optional. Block common user-tracking scripts

**enableIncognito:** `?bool` — optional. Enable private/incognito mode for browser session

**omitBackground:** `?bool` — optional. Omit background color (transparent background)

**thumbnailWidth:** `?int` — optional. Thumbnail width in pixels

**adjustTop:** `?int` — optional. Adjust top in pixels

**waitForEvent:** `?value-of<ScreenshotCaptureRequestWaitForEvent>` — optional. Wait for a specific load event before capturing the screenshot.

**grayscale:** `?int` — optional. Range:0 to 100 for grayscale filter

**delay:** `?int` — optional. How many milliseconds to wait before taking the screenshot

**timeout:** `?int` — optional. Maximum timeout in milliseconds. Defalut is `10,000`

**ttl:** `?int` — optional. Number of seconds the screenshot should be cached

**clipX:** `?int` — optional. X position of the clipping rectangle in pixels

**clipY:** `?int` — optional. Y position of the clipping rectangle in pixels

**clipWidth:** `?int` — optional. Width of the clipping rectangle in pixels

**clipHeight:** `?int` — optional. Height of the clipping rectangle in pixels

**cssUrl:** `?string` — optional. URL to CSS file

**css:** `?string` — optional. Your custom CSS code

**jsUrl:** `?string` — optional. URL to JS file

**js:** `?string` — optional. Your JS code

**blockJs:** `?bool` — optional. Block Scripts

**blockStylesheets:** `?bool` — optional. Block Stylesheets

**blockImages:** `?bool` — optional. Block Images

**blockMedia:** `?bool` — optional. Block Media

**blockFont:** `?bool` — optional. Block Fonts

**blockTextTrack:** `?bool` — optional. Block Text Tracks

**blockXhr:** `?bool` — optional. Block XHR Requests

**blockFetch:** `?bool` — optional. Block Fetch Requests

**blockEventSource:** `?bool` — optional. Block Event Source

**blockWebSocket:** `?bool` — optional. Block Web Sockets

**blockManifest:** `?bool` — optional. Block Manifest

**blockSpecificRequests:** `?string` — optional. Comma- or newline-separated list of specific requests to block. Each line and comma are treated as separate requests for processing. Example: https://example.com, https://example.js

**blurSelector:** `?string` — optional

**removeSelector:** `?string` — optional

**resultFileName:** `?string` — optional

**scrollingScreenshot:** `?bool` — optional. **`Scrolling Screenshot`**: Capture a long scrolling screenshot. When true, disable `fullPage` and `freshScreenshot`.

**scrollSpeed:** `?value-of<ScreenshotCaptureRequestScrollSpeed>` — optional. Speed of scrolling during the screenshot.

**scrollBack:** `?bool` — optional. If true, the scroll will reverse back to the top after reaching the bottom.

**startImmediately:** `?bool` — optional. If true, the scrolling capture will start immediately upon page load.

**multipleScrolling:** `?bool` — optional. If true, multiple scrolling screenshots will be taken at different viewport sizes.

**sizes:** `?array<string>` — optional. Comma-separated list of viewport sizes in the format index:XXw:YYh. Example: sizes=0:120w:300h,1:240w:500h

**duration:** `?float` — optional. Duration in seconds for the scrolling capture. Acceptable range: 0 to 100 seconds.

**failOnError:** `?bool` — optional

**longitude:** `?float` — optional

**latitude:** `?float` — optional

**proxy:** `?string` — optional

**headers:** `?string` — optional

**cookies:** `?string` — optional

**scrollToElement:** `?string` — optional

**selector:** `?string` — optional

**userAgent:** `?string` — optional

**acceptLanguages:** `?string` — optional

**customHtml:** `?string` — optional

**imageQuality:** `?float` — optional

#### ↩️ Response

`string`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkScreenshotCapture($request) -> BulkScreenshotCaptureResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Our Bulk Screenshot API allows you to capture screenshots of multiple webpages simultaneously, saving you time and effort. Instead of manually capturing each page one by one, you can batch process URLs and receive high-quality screenshots in the format you choose. Maximum `50 URLs` per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkScreenshotCaptureRequest;

$client = new ApifreaksClient();
$request = new BulkScreenshotCaptureRequest([
    'apiKey' => "apiKey",
    'urls' => ["https://example.com"],
]);

$response = $client->bulkScreenshotCapture($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkScreenshotCaptureRequestFormat>` — optional

**urls:** `array<BulkScreenshotCaptureRequestUrlsItem>` — required. List of website URLs to capture screenshots of

#### ↩️ Response

`BulkScreenshotCaptureResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyLatestRates($request) -> CurrencyLatestRatesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get live forex rates for all world currencies with customizable update frequency

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyLatestRatesRequest;

$client = new ApifreaksClient();
$request = new CurrencyLatestRatesRequest([
    'apiKey' => "apiKey",
]);

$response = $client->currencyLatestRates($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyLatestRatesRequestFormat>` — optional. Format of the response.

**base:** `?string` — optional. Base currency for rate calculations

**symbols:** `?array<string>` — optional. Comma separated list of desired currency codes

**updates:** `?value-of<CurrencyLatestRatesRequestUpdates>` — optional. Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)

#### ↩️ Response

`CurrencyLatestRatesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyHistoricalRates($request) -> CurrencyHistoricalRatesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get historical exchange rates for any specific date

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyHistoricalRatesRequest;

$client = new ApifreaksClient();
$request = new CurrencyHistoricalRatesRequest([
    'apiKey' => "apiKey",
    'date' => "2024-01-01",
]);

$response = $client->currencyHistoricalRates($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyHistoricalRatesRequestFormat>` — optional. Format of the response.

**base:** `?string` — optional. Base currency for rate calculations

**symbols:** `?array<string>` — optional. Comma separated list of desired currency codes

**date:** `DateTime` — required. Specific date in YYYY-MM-DD format

#### ↩️ Response

`CurrencyHistoricalRatesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyConvertLatest($request) -> CurrencyConvertLatestResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Convert amount between currencies using the latest exchange rates

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyConvertLatestRequest;

$client = new ApifreaksClient();
$request = new CurrencyConvertLatestRequest([
    'apiKey' => "apiKey",
    'from' => "value",
    'to' => "value",
]);

$response = $client->currencyConvertLatest($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyConvertLatestRequestFormat>` — optional. Format of the response.

**from:** `string` — required. Source currency code

**to:** `string` — required. Target currency code

**amount:** `?float` — optional. Amount to convert

**updates:** `?value-of<CurrencyConvertLatestRequestUpdates>` — optional. Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)

#### ↩️ Response

`CurrencyConvertLatestResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyConvertHistorical($request) -> CurrencyConvertHistoricalResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Convert amount between currencies using historical rates

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyConvertHistoricalRequest;

$client = new ApifreaksClient();
$request = new CurrencyConvertHistoricalRequest([
    'apiKey' => "apiKey",
    'from' => "value",
    'to' => "value",
    'date' => "2024-01-01",
]);

$response = $client->currencyConvertHistorical($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyConvertHistoricalRequestFormat>` — optional. Format of the response.

**from:** `string` — required. From currency symbol

**to:** `string` — required. To currency symbol

**amount:** `?float` — optional. The Amount to be converted

**date:** `DateTime` — required. specific date (format YYYY-MM-DD) of which exchange rates is used.

#### ↩️ Response

`CurrencyConvertHistoricalResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyTimeSeries($request) -> CurrencyTimeSeriesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get exchange rates for a time range

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyTimeSeriesRequest;

$client = new ApifreaksClient();
$request = new CurrencyTimeSeriesRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
]);

$response = $client->currencyTimeSeries($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyTimeSeriesRequestFormat>` — optional. Format of the response.

**startDate:** `DateTime` — required. Start date (format YYYY-MM-DD) of the preferred time frame

**endDate:** `?DateTime` — optional. End date (format YYYY-MM-DD) of the preferred time frame

**base:** `?string` — optional. Base currency

**symbols:** `?array<string>` — optional. comma separated list of desired currencies/ commodities symbols

#### ↩️ Response

`CurrencyTimeSeriesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyFluctuation($request) -> CurrencyFluctuationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get currency fluctuation data for a time period

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyFluctuationRequest;

$client = new ApifreaksClient();
$request = new CurrencyFluctuationRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
]);

$response = $client->currencyFluctuation($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyFluctuationRequestFormat>` — optional. Format of the response.

**startDate:** `DateTime` — required. Start date (format YYYY-MM-DD) of the preferred time frame

**endDate:** `?DateTime` — optional. End date (format YYYY-MM-DD) of the preferred time frame

**base:** `?string` — optional. Base currency

**symbols:** `?array<string>` — optional. comma separated list of desired currencies/ commodities symbols

#### ↩️ Response

`CurrencyFluctuationResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyConvertByIp($request) -> CurrencyConvertByIpResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Convert amount using user's location

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyConvertByIpRequest;

$client = new ApifreaksClient();
$request = new CurrencyConvertByIpRequest([
    'apiKey' => "apiKey",
    'from' => "value",
]);

$response = $client->currencyConvertByIp($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyConvertByIpRequestFormat>` — optional. Format of the response.

**updates:** `?value-of<CurrencyConvertByIpRequestUpdates>` — optional. Exchange rates update period (1d=daily, 1h=hourly, 10m=10 minutes, 1m=1 minute)

**from:** `string` — required. From currency symbol

**ip:** `?string` — optional. IPv4 or IPv6 geolocated currency

**amount:** `?float` — optional. Amount to convert

#### ↩️ Response

`CurrencyConvertByIpResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencySupported($request) -> CurrencySupportedResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get list of all supported currencies with their metadata

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencySupportedRequest;

$client = new ApifreaksClient();
$request = new CurrencySupportedRequest([
    'apiKey' => "apiKey",
]);

$response = $client->currencySupported($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencySupportedRequestFormat>` — optional. Format of the response.

#### ↩️ Response

`CurrencySupportedResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencySymbols($request) -> CurrencySymbolsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get currency symbols and codes

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencySymbolsRequest;

$client = new ApifreaksClient();
$request = new CurrencySymbolsRequest([
    'apiKey' => "apiKey",
]);

$response = $client->currencySymbols($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencySymbolsRequestFormat>` — optional. Format of the response.

#### ↩️ Response

`CurrencySymbolsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currencyHistoricalLimits($request) -> CurrencyHistoricalLimitsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get information about historical data availability and limits

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrencyHistoricalLimitsRequest;

$client = new ApifreaksClient();
$request = new CurrencyHistoricalLimitsRequest([
    'apiKey' => "apiKey",
]);

$response = $client->currencyHistoricalLimits($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrencyHistoricalLimitsRequestFormat>` — optional. Format of the response.

#### ↩️ Response

`CurrencyHistoricalLimitsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->commodityLatestRates($request) -> CommodityLatestRatesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get live commodity rates with customizable update frequency

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CommodityLatestRatesRequest;

$client = new ApifreaksClient();
$request = new CommodityLatestRatesRequest([
    'apiKey' => "apiKey",
    'updates' => "value",
]);

$response = $client->commodityLatestRates($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CommodityLatestRatesRequestFormat>` — optional. Format of the Response

**symbols:** `?array<string>` — optional. Comma separated list of desired commodities symbols *(e.g. XAU,XAG,WTI,BRENT)* **Required**

**updates:** `value-of<CommodityLatestRatesRequestUpdates>` — required. Exchange rates update period. Possible values are: (1) `10m` - 10 minute update (2) `1m` - 1 minute update **Required**

**quote:** `?string` — optional. Specifies the target currency for the exchange rate; default quote currency is the market currency of commodity *(e.g. USD, EUR, INR)*

#### ↩️ Response

`CommodityLatestRatesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->commodityHistoricalRates($request) -> CommodityHistoricalRatesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get historical commodity rates for a specific date

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CommodityHistoricalRatesRequest;

$client = new ApifreaksClient();
$request = new CommodityHistoricalRatesRequest([
    'apiKey' => "apiKey",
    'date' => "2024-01-01",
]);

$response = $client->commodityHistoricalRates($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CommodityHistoricalRatesRequestFormat>` — optional. Format of the response.

**date:** `DateTime` — required. Historical date (YYYY-MM-DD)

**symbols:** `?array<string>` — optional. Comma-separated list of commodity symbols

#### ↩️ Response

`CommodityHistoricalRatesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->commodityFluctuation($request) -> CommodityFluctuationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get commodity price fluctuation data for a time period

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CommodityFluctuationRequest;

$client = new ApifreaksClient();
$request = new CommodityFluctuationRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
    'endDate' => "2024-01-31",
]);

$response = $client->commodityFluctuation($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CommodityFluctuationRequestFormat>` — optional. Format of the response.

**symbols:** `?array<string>` — optional. Comma-separated list of commodity symbols

**startDate:** `DateTime` — required. Start date (YYYY-MM-DD)

**endDate:** `DateTime` — required. End date (YYYY-MM-DD)

#### ↩️ Response

`CommodityFluctuationResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->commodityTimeSeries($request) -> CommodityTimeSeriesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get commodity rates for a time range

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CommodityTimeSeriesRequest;

$client = new ApifreaksClient();
$request = new CommodityTimeSeriesRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
    'endDate' => "2024-01-31",
]);

$response = $client->commodityTimeSeries($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CommodityTimeSeriesRequestFormat>` — optional. Format of the response.

**symbols:** `?array<string>` — optional. Comma-separated list of commodity symbols

**startDate:** `DateTime` — required. Start date (YYYY-MM-DD)

**endDate:** `DateTime` — required. End date (YYYY-MM-DD)

#### ↩️ Response

`CommodityTimeSeriesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->commoditySymbols($request) -> CommoditySymbolsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get list of supported commodities

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CommoditySymbolsRequest;

$client = new ApifreaksClient();
$request = new CommoditySymbolsRequest([
    'apiKey' => "apiKey",
]);

$response = $client->commoditySymbols($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CommoditySymbolsRequestFormat>` — optional. Format of the response.

#### ↩️ Response

`CommoditySymbolsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->vatSupportedCountries($request) -> VatSupportedCountriesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieves a list of supported countries.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\VatSupportedCountriesRequest;

$client = new ApifreaksClient();
$request = new VatSupportedCountriesRequest([
    'apiKey' => "apiKey",
]);

$response = $client->vatSupportedCountries($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<VatSupportedCountriesRequestFormat>` — optional. Format of the response. Default is JSON.

**type:** `?value-of<VatSupportedCountriesRequestType>` — optional. Type of supported country. Supported values: IBAN, SWIFT, VAT. By default, it returns all supported countries for all types.

#### ↩️ Response

`VatSupportedCountriesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->vatRateByIp($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Fetches VAT rate based on the specified or originating IP address.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\VatRateByIpRequest;

$client = new ApifreaksClient();
$request = new VatRateByIpRequest([
    'apiKey' => "apiKey",
]);

$response = $client->vatRateByIp($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<VatRateByIpRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**ipAddress:** `?string` — optional. IPv4 or IPv6 address to look up VAT rate for. If omitted, the originating IP address will be used.

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->vatRateByCountry($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Fetches VAT rates for a single country or state provided via query parameters.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\VatRateByCountryRequest;

$client = new ApifreaksClient();
$request = new VatRateByCountryRequest([
    'apiKey' => "apiKey",
    'country' => "US",
]);

$response = $client->vatRateByCountry($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<VatRateByCountryRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**country:** `string` — required. Country identifier in Alpha-2 (PK), Alpha-3 (PAK), or full name (Pakistan). Combine with the optional "state" query for sub-national VAT; values are case-insensitive and may use underscores instead of spaces.

**state:** `?string` — optional. Optional state or region in Alpha-2 (NY) or full name (New_York). Use with "country" for state-level VAT; values are case-insensitive and may use underscores.

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkVatRateByCountry($request) -> BulkVatRateByCountryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieves VAT details for multiple countries or country-state combinations in a single request. Maximum of `100` entries per request are allowed.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkVatRateByCountryRequest;

$client = new ApifreaksClient();
$request = new BulkVatRateByCountryRequest([
    'apiKey' => "apiKey",
    'countries' => [],
]);

$response = $client->bulkVatRateByCountry($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkVatRateByCountryRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**countries:** `array<BulkVatRateByCountryRequestCountriesItem>` — required

#### ↩️ Response

`BulkVatRateByCountryResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->vatValidate($request) -> VatValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Validates an EU or UK VAT number and returns registration status details.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\VatValidateRequest;

$client = new ApifreaksClient();
$request = new VatValidateRequest([
    'apiKey' => "apiKey",
    'vatNumber' => "value",
]);

$response = $client->vatValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<VatValidateRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**vatNumber:** `string` — required. EU or UK VAT number to validate.

**requesterVatNumber:** `?string` — optional. Requester EU or UK VAT number.

#### ↩️ Response

`VatValidateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->ibanValidate($request) -> IbanValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Checks an IBAN for structural validity, checksum accuracy, and bank metadata.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\IbanValidateRequest;

$client = new ApifreaksClient();
$request = new IbanValidateRequest([
    'apiKey' => "apiKey",
    'iban' => "value",
]);

$response = $client->ibanValidate($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<IbanValidateRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**iban:** `string` — required. IBAN to validate.

#### ↩️ Response

`IbanValidateResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->swiftCodeFind($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Fetches SWIFT codes for a given country, bank, and city.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\SwiftCodeFindRequest;

$client = new ApifreaksClient();
$request = new SwiftCodeFindRequest([
    'apiKey' => "apiKey",
]);

$response = $client->swiftCodeFind($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<SwiftCodeFindRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**country:** `?string` — optional. Country name (accepts full name, e.g., Pakistan, United States). If only the country parameter is supplied, lists all banks in the country.

**bank:** `?string` — optional. Bank name (upper case) used to filter SWIFT codes. Should be used together with the country parameter. If only country and bank are provided (without city), returns the list of cities for that bank.

**city:** `?string` — optional. Gives SWIFT codes for a bank. Optionally specify the city (upper case) to narrow results to a specific city for that bank.

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->swiftCodeLookup($request) -> SwiftCodeLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Fetches detailed information about a SWIFT code.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\SwiftCodeLookupRequest;

$client = new ApifreaksClient();
$request = new SwiftCodeLookupRequest([
    'apiKey' => "apiKey",
    'swiftCode' => "value",
]);

$response = $client->swiftCodeLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<SwiftCodeLookupRequestFormat>` — optional. Specify the desired response format. Options: 'json' (default) or 'xml'.

**swiftCode:** `string` — required. SWIFT/BIC code to lookup (must be 8 or 11 characters).

#### ↩️ Response

`SwiftCodeLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeLookup($request) -> ZipcodeLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeLookupRequest;

$client = new ApifreaksClient();
$request = new ZipcodeLookupRequest([
    'apiKey' => "apiKey",
    'code' => "value",
]);

$response = $client->zipcodeLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeLookupRequestFormat>` — optional. Format of the response.

**code:** `string` — required. Comma separated list of postal / zip codes. Max. 100 values.

**country:** `?string` — optional. Country code in ISO 3166-1 alpha-2 format. If not provided, search results will be returned from all countries.

#### ↩️ Response

`ZipcodeLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkZipcodeLookup($request) -> BulkZipcodeLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Validates a bulk of ZIP/postal codes and returns result for each. Maximum `100` ZIP/postal codes per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkZipcodeLookupRequest;

$client = new ApifreaksClient();
$request = new BulkZipcodeLookupRequest([
    'apiKey' => "apiKey",
    'codes' => [],
]);

$response = $client->bulkZipcodeLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkZipcodeLookupRequestFormat>` — optional. Format of the response.

**codes:** `array<string>` — required. Comma separated list of postal / zip codes. Max. 100 values.

**country:** `?string` — optional. Country code in ISO 3166-1 alpha-2 format. If not provided, search results will be returned from all countries.

#### ↩️ Response

`BulkZipcodeLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeSearchByCity($request) -> ZipcodeSearchByCityResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeSearchByCityRequest;

$client = new ApifreaksClient();
$request = new ZipcodeSearchByCityRequest([
    'apiKey' => "apiKey",
    'city' => "London",
    'country' => "US",
]);

$response = $client->zipcodeSearchByCity($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeSearchByCityRequestFormat>` — optional. Format of the response.

**city:** `string` — required. Name of the city in which we want to find zipcodes in.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**stateName:** `?string` — optional. Name of the state or province associated with the country.

**page:** `?int` — optional. Page number to retrieve paginated results.

#### ↩️ Response

`ZipcodeSearchByCityResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeSearchByRegion($request) -> ZipcodeSearchByRegionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeSearchByRegionRequest;

$client = new ApifreaksClient();
$request = new ZipcodeSearchByRegionRequest([
    'apiKey' => "apiKey",
    'country' => "US",
    'region' => "value",
]);

$response = $client->zipcodeSearchByRegion($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeSearchByRegionRequestFormat>` — optional. Format of the response.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**region:** `string` — required. Name of the region, state or province associated with the country.

**page:** `?int` — optional. Page no. to retrieve paginated results.

#### ↩️ Response

`ZipcodeSearchByRegionResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeSearchByRadius($request) -> ZipcodeSearchByRadiusResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeSearchByRadiusRequest;

$client = new ApifreaksClient();
$request = new ZipcodeSearchByRadiusRequest([
    'apiKey' => "apiKey",
    'radius' => 1.0,
]);

$response = $client->zipcodeSearchByRadius($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeSearchByRadiusRequestFormat>` — optional. Format of the response.

**code:** `?string` — optional. Postal/Zip code to be used as the center point for the search.

**lat:** `?float` — optional. Latitude coordinate for the base location.

**long:** `?float` — optional. Longitude coordinate for the base location.

**country:** `?string` — optional. Country code in ISO 3166-1 alpha-2 format. Required only when using the code parameter.

**radius:** `float` — required. Search radius for the query. The maximum allowed values are: - 100 km - 100 mi - 109361 yd - 100000 m - 328084 ft - 3937007.75 in

**unit:** `?value-of<ZipcodeSearchByRadiusRequestUnit>` — optional. Supported distance units are m, km, mi, ft, yd, in.

**page:** `?int` — optional. Page no. to retrieve paginated results.

#### ↩️ Response

`ZipcodeSearchByRadiusResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeDistance($request) -> ZipcodeDistanceResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get distance between postal codes. Maximum `100` postal codes per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeDistanceRequest;

$client = new ApifreaksClient();
$request = new ZipcodeDistanceRequest([
    'apiKey' => "apiKey",
    'compare' => [],
    'country' => "US",
]);

$response = $client->zipcodeDistance($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeDistanceRequestFormat>` — optional. Format of the response.

**compare:** `array<string>` — required. Comma separated list of postal / zip codes with which base point is compared w.r.t. Max 100 zip codes can be provided.

**code:** `?string` — optional. Postal/Zip code to be used as the base point.

**lat:** `?float` — optional. Latitude coordinate for the base location.

**long:** `?float` — optional. Longitude coordinate for the base location.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**unit:** `?value-of<ZipcodeDistanceRequestUnit>` — optional. Supported distance units are m, km, mi, ft, yd, in.

#### ↩️ Response

`ZipcodeDistanceResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->zipcodeDistanceMatch($request) -> ZipcodeDistanceMatchResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get matching ZIP/postal code pairs within a specified distance. Maximum `100` postal codes per request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ZipcodeDistanceMatchRequest;

$client = new ApifreaksClient();
$request = new ZipcodeDistanceMatchRequest([
    'apiKey' => "apiKey",
    'codes' => [],
    'country' => "US",
]);

$response = $client->zipcodeDistanceMatch($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<ZipcodeDistanceMatchRequestFormat>` — optional. Format of the response.

**codes:** `array<string>` — required. Comma-separated list of postal/zip codes. Maximum 100 values allowed.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**distance:** `?float` — optional. Maximum allowed distance between postal code pairs.

**unit:** `?value-of<ZipcodeDistanceMatchRequestUnit>` — optional. Supported distance units are m, km, mi, ft, yd, in.

#### ↩️ Response

`ZipcodeDistanceMatchResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->currentWeather($request) -> CurrentWeatherResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Get current weather data including temperature, humidity, precipitation, wind conditions, atmospheric pressure, and air quality for any location. Accepts city names, coordinates, or IP addresses. Also includes astronomy data and timezone-aware timestamps.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\CurrentWeatherRequest;

$client = new ApifreaksClient();
$request = new CurrentWeatherRequest([
    'apiKey' => "apiKey",
]);

$response = $client->currentWeather($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<CurrentWeatherRequestFormat>` — optional. Response format returned by the API.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`CurrentWeatherResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkCurrentWeather($request) -> BulkCurrentWeatherResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve current weather conditions for up to `50 locations` in a single request. A maximum of 50 locations (city names, IP addresses, or geographic coordinates) can be included in the request body.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkCurrentWeatherRequest;

$client = new ApifreaksClient();
$request = new BulkCurrentWeatherRequest([
    'apiKey' => "apiKey",
    'locations' => [],
]);

$response = $client->bulkCurrentWeather($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkCurrentWeatherRequestFormat>` — optional. Response format returned by the API.

**timezone:** `?string` — optional. Timezone for the results.

**locations:** `array<BulkCurrentWeatherRequestLocationsItem>` — required. Array of locations to fetch weather data for

#### ↩️ Response

`BulkCurrentWeatherResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->weatherForecast($request) -> WeatherForecastResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Access comprehensive weather forecasts with customizable precision - choose from daily overviews, hourly breakdowns, or even minute-by-minute data. Configure your date ranges or use the default 7-day forecast for standard weather planning.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\WeatherForecastRequest;

$client = new ApifreaksClient();
$request = new WeatherForecastRequest([
    'apiKey' => "apiKey",
]);

$response = $client->weatherForecast($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<WeatherForecastRequestFormat>` — optional. Response format returned by the API.

**startDate:** `?DateTime` — optional. Start date for the forecast in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between startDate and endDate must not exceed 16 days.

**endDate:** `?DateTime` — optional. End date for the forecast in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between startDate and endDate must not exceed 16 days.

**forecastDays:** `?int` — optional. Number of days for the forecast, from 1 to 16. Default is 7. Maximum value is 16.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<WeatherForecastRequestPrecision>` — optional. Precision of the forecast data.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`WeatherForecastResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->historicalWeather($request) -> HistoricalWeatherResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Access past weather conditions for specific dates with records going back to 1940. Retrieve comprehensive historical data with both daily and hourly precision options.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\HistoricalWeatherRequest;

$client = new ApifreaksClient();
$request = new HistoricalWeatherRequest([
    'apiKey' => "apiKey",
    'date' => "2024-01-01",
]);

$response = $client->historicalWeather($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<HistoricalWeatherRequestFormat>` — optional. Response format returned by the API.

**date:** `DateTime` — required. Specific date for which to fetch weather data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<HistoricalWeatherRequestPrecision>` — optional. Precision of the historical data. **Note:** 'daily' returns daily aggregates, 'hourly' returns hourly data.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`HistoricalWeatherResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->weatherTimeSeries($request) -> WeatherTimeSeriesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Pull historical weather information for date ranges up to 90 days (daily data) or 7 days (hourly data). Get consistent formatting across your specified date range with reliable historical weather patterns.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\WeatherTimeSeriesRequest;

$client = new ApifreaksClient();
$request = new WeatherTimeSeriesRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
    'endDate' => "2024-01-31",
]);

$response = $client->weatherTimeSeries($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<WeatherTimeSeriesRequestFormat>` — optional. Response format returned by the API.

**startDate:** `DateTime` — required. Starting date for the data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards. For precision=daily, the difference between endDate and startDate must not exceed 90 days. For precision=hourly, the difference must not exceed 7 days.

**endDate:** `DateTime` — required. End date for the data in YYYY-MM-DD format. Historical dates must be past dates only. Current or future dates are not allowed for historical data. Data available from 1940 onwards. For precision=daily, the difference between endDate and startDate must not exceed 90 days. For precision=hourly, the difference must not exceed 7 days.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<WeatherTimeSeriesRequestPrecision>` — optional. Precision of the data.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`WeatherTimeSeriesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->marineWeather($request) -> MarineWeatherResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Provides hourly forecasts of marine conditions including wave heights, wave directions, wave periods, swell info, sea surface temperatures, and ocean currents. Supports multiple geographical points and returns daily max wave statistics for up to 7 days. Ideal for maritime planning, navigation, and coastal activities.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\MarineWeatherRequest;

$client = new ApifreaksClient();
$request = new MarineWeatherRequest([
    'apiKey' => "apiKey",
]);

$response = $client->marineWeather($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<MarineWeatherRequestFormat>` — optional. Response format returned by the API.

**startDate:** `?DateTime` — optional. Starting date for marine forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 16 days.

**endDate:** `?DateTime` — optional. End date for marine forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 16 days.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<MarineWeatherRequestPrecision>` — optional. Precision of the marine data.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`MarineWeatherResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->airQuality($request) -> AirQualityResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Monitor and predict air quality conditions using European and US AQI standards. Track pollutant concentrations including PM10, PM2.5, carbon monoxide, nitrogen dioxide, sulfur dioxide, ozone, and dust particles. Get current readings plus hourly forecasts up to 5 days ahead, complete with UV index and aerosol measurements for comprehensive air quality assessment.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\AirQualityRequest;

$client = new ApifreaksClient();
$request = new AirQualityRequest([
    'apiKey' => "apiKey",
]);

$response = $client->airQuality($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<AirQualityRequestFormat>` — optional. Response format returned by the API.

**startDate:** `?DateTime` — optional. Starting date for AQI forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 5 days.

**endDate:** `?DateTime` — optional. End date for AQI forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 5 days.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<AirQualityRequestPrecision>` — optional. Only hourly precision is supported; returns hourly AQI data for the selected date range.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`AirQualityResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->floodForecast($request) -> FloodForecastResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Provides flood forecast data for a given location, including river discharge metrics such as mean, median, maximum, minimum, and percentile values (p25, p75). Requires a startDate and endDate, with the date range limited to 16 days. Location can be specified using city name, latitude/longitude, or IP address.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\FloodForecastRequest;

$client = new ApifreaksClient();
$request = new FloodForecastRequest([
    'apiKey' => "apiKey",
    'startDate' => "2024-01-01",
    'endDate' => "2024-01-31",
]);

$response = $client->floodForecast($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<FloodForecastRequestFormat>` — optional. Response format returned by the API.

**startDate:** `DateTime` — required. Starting date for flood forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 16 days.

**endDate:** `DateTime` — required. End date for flood forecast data in YYYY-MM-DD format. Forecast dates must be current or future dates only. Past dates are not allowed for forecast data. The difference between endDate and startDate must not exceed 16 days.

**location:** `?string` — optional. City name, place name, or full address.

**lat:** `?float` — optional. Latitude of the location.

**long:** `?float` — optional. Longitude of the location.

**ip:** `?string` — optional. IP(v4 or v6) address for location inference.

**precision:** `?value-of<FloodForecastRequestPrecision>` — optional. Only daily precision is supported; returns flood forecast data for the selected date range.

**timezone:** `?string` — optional. Timezone for the results.

#### ↩️ Response

`FloodForecastResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getCountries($request) -> GetCountriesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve countries, optionally filtered by region or subregion.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetCountriesRequest;

$client = new ApifreaksClient();
$request = new GetCountriesRequest([
    'apiKey' => "apiKey",
]);

$response = $client->getCountries($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetCountriesRequestFormat>` — optional. Format of the response

**region:** `?string` — optional. Optional filter to return countries within a specific region from the region endpoint.

**subregion:** `?string` — optional. Optional filter to return countries within a specific subregion from the subregion endpoint.

#### ↩️ Response

`GetCountriesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getCountryDetails($request) -> GetCountryDetailsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetCountryDetailsRequest;

$client = new ApifreaksClient();
$request = new GetCountryDetailsRequest([
    'apiKey' => "apiKey",
    'country' => "US",
]);

$response = $client->getCountryDetails($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetCountryDetailsRequestFormat>` — optional. Format of the response

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

#### ↩️ Response

`GetCountryDetailsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getRegions($request) -> GetRegionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetRegionsRequest;

$client = new ApifreaksClient();
$request = new GetRegionsRequest([
    'apiKey' => "apiKey",
]);

$response = $client->getRegions($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetRegionsRequestFormat>` — optional. Format of the response

#### ↩️ Response

`GetRegionsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getSubregions($request) -> GetSubregionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

No description provided.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetSubregionsRequest;

$client = new ApifreaksClient();
$request = new GetSubregionsRequest([
    'apiKey' => "apiKey",
    'region' => "value",
]);

$response = $client->getSubregions($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetSubregionsRequestFormat>` — optional. Format of the response

**region:** `string` — required. Name of the region.

#### ↩️ Response

`GetSubregionsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getAdminLevels($request) -> GetAdminLevelsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve administrative units based on ISO 3166-1 alpha-2 country code.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetAdminLevelsRequest;

$client = new ApifreaksClient();
$request = new GetAdminLevelsRequest([
    'apiKey' => "apiKey",
    'country' => "US",
]);

$response = $client->getAdminLevels($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetAdminLevelsRequestFormat>` — optional. Format of the response

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format

#### ↩️ Response

`GetAdminLevelsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getAdminUnits($request) -> GetAdminUnitsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve administrative divisions for a given country using ISO 3166-1 alpha-2 country codes. You can optionally filter by administrative levels.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetAdminUnitsRequest;

$client = new ApifreaksClient();
$request = new GetAdminUnitsRequest([
    'apiKey' => "apiKey",
    'country' => "US",
]);

$response = $client->getAdminUnits($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetAdminUnitsRequestFormat>` — optional. Format of the response.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**adminLevels:** `?array<string>` — optional. Comma-separated list to filter results by one or more administrative levels.

#### ↩️ Response

`GetAdminUnitsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getAdminUnitDetails($request) -> GetAdminUnitDetailsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve detailed administrative unit information by country and optionally filtered by admin code.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetAdminUnitDetailsRequest;

$client = new ApifreaksClient();
$request = new GetAdminUnitDetailsRequest([
    'apiKey' => "apiKey",
    'country' => "US",
    'adminUnit' => "value",
]);

$response = $client->getAdminUnitDetails($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetAdminUnitDetailsRequestFormat>` — optional. Format of the response.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**adminUnit:** `string` — required. Optional admin code to fetch details for a specific administrative unit.

#### ↩️ Response

`GetAdminUnitDetailsResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getCities($request) -> GetCitiesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve a list of cities within a country, optionally filtered by an administrative unit code.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetCitiesRequest;

$client = new ApifreaksClient();
$request = new GetCitiesRequest([
    'apiKey' => "apiKey",
    'country' => "US",
]);

$response = $client->getCities($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<GetCitiesRequestFormat>` — optional. Format of the response.

**country:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**adminUnit:** `?string` — optional. Administrative unit code used to filter cities within a specific region.

#### ↩️ Response

`GetCitiesResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->getSupportedFlags($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Get list of all supported flags with their metadata

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetSupportedFlagsRequest;

$client = new ApifreaksClient();
$request = new GetSupportedFlagsRequest([
    'apiKey' => "apiKey",
]);

$response = $client->getSupportedFlags($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->getFlags($request) -> string</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve the flag for a specific country

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GetFlagsRequest;

$client = new ApifreaksClient();
$request = new GetFlagsRequest([
    'apiKey' => "apiKey",
    'name' => "value",
    'shape' => "value",
    'type' => "A",
]);

$response = $client->getFlags($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**name:** `string` — required. Country code in ISO 3166-1 alpha-2 format.

**shape:** `value-of<GetFlagsRequestShape>` — required. Flag shape. One of: `'flat'` or `'round'`.

**format:** `?value-of<GetFlagsRequestFormat>` — optional. Flag format. Applicable only for PNG or WEBP formats. Default is png.

**size:** `?value-of<GetFlagsRequestSize>` — optional. Flag size in pixels. Valid options: `16px`, `24px`, `32px`, `48px`, `64px`. Applicable only for PNG or WEBP formats.

**type:** `value-of<GetFlagsRequestType>` — required. Type of flag. One of: `country` or `organization`.

#### ↩️ Response

`string`

</dd>
</dl>
</details>

<details><summary><code>$client->timezoneLookup($request) -> TimezoneLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve current time, date, and timezone-related information by specifying a timezone name, location address, location coordinates, IP address, or use the client IP address if no parameter is passed.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\TimezoneLookupRequest;

$client = new ApifreaksClient();
$request = new TimezoneLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->timezoneLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<TimezoneLookupRequestFormat>` — optional. Format of the response

**ip:** `?string` — optional. IPv4 or IPv6 address to extract timezone information.

**tz:** `?string` — optional. Timezone name (e.g., "Asia/Kolkata") to retrieve information directly.

**location:** `?string` — optional. Location string (preferably city and country) to extract timezone.

**lat:** `?float` — optional. Latitude for geolocation lookup.

**long:** `?float` — optional. Longitude for geolocation lookup.

**lang:** `?value-of<TimezoneLookupRequestLang>` — optional. Language code for response localization (default is "en").

**iataCode:** `?string` — optional. 3-letter IATA airport code (e.g., JFK).

**icaoCode:** `?string` — optional. 4-letter ICAO airport code (e.g., KJFK).

**loCode:** `?string` — optional. 5-letter UN/LO city code.

#### ↩️ Response

`TimezoneLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->timezoneConvert($request) -> TimezoneConvertResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Converts a given time from one timezone to another using various input types like timezone name, coordinates, location, or codes.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\TimezoneConvertRequest;

$client = new ApifreaksClient();
$request = new TimezoneConvertRequest([
    'apiKey' => "apiKey",
]);

$response = $client->timezoneConvert($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<TimezoneConvertRequestFormat>` — optional. Format of the response .

**time:** `?string` — optional. Time to convert in `yyyy-MM-dd HH:mm` or `yyyy-MM-dd HH:mm:ss` format.

**tzFrom:** `?string` — optional. Source timezone name (e.g., `Asia/Kolkata`).

**tzTo:** `?string` — optional. Target timezone name (e.g., `America/New_York`).

**latFrom:** `?float` — optional. Latitude of source location.

**longFrom:** `?float` — optional. Longitude of source location.

**latTo:** `?float` — optional. Latitude of target location.

**longTo:** `?float` — optional. Longitude of target location.

**locationFrom:** `?string` — optional. From location (city/country).

**locationTo:** `?string` — optional. To location (city/country).

**iataFrom:** `?string` — optional. From IATA airport code (e.g., JFK).

**iataTo:** `?string` — optional. To IATA airport code.

**icaoFrom:** `?string` — optional. From ICAO airport code (e.g., KJFK).

**icaoTo:** `?string` — optional. To ICAO airport code.

**locodeFrom:** `?string` — optional. From UN/LO CODE.

**locodeTo:** `?string` — optional. To UN/LO CODE.

#### ↩️ Response

`TimezoneConvertResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->userAgentLookup($request) -> UserAgentLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Parse User Agent string to get detailed browser, device, and operating system information

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\UserAgentLookupRequest;

$client = new ApifreaksClient();
$request = new UserAgentLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->userAgentLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<UserAgentLookupRequestFormat>` — optional. Format of the response

#### ↩️ Response

`UserAgentLookupResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->bulkUserAgentLookup($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

Parse up to `50,000 User-Agent strings` at once in a single request.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\BulkUserAgentLookupRequest;

$client = new ApifreaksClient();
$request = new BulkUserAgentLookupRequest([
    'apiKey' => "apiKey",
    'uaStrings' => [],
]);

$response = $client->bulkUserAgentLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<BulkUserAgentLookupRequestFormat>` — optional. Format of the response

**uaStrings:** `array<string>` — required. List of user agent strings to parse

#### ↩️ Response

`array`

</dd>
</dl>
</details>

<details><summary><code>$client->ocrPredict($request) -> OcrPredictResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Perform Optical Character Recognition (OCR) on images, PDFs, or ZIP archives. Supports two models: `mini-ocr-v1` for CAPTCHA-optimized OCR and `ocr-v1` for general-purpose document text extraction. Supports zonal OCR to extract text from specific regions of an image. **Notes:** - The `zone` query parameter cannot be given with .pdf and .zip types as it can only be applied to single image query. - The `page_range` query parameter cannot be given in any other type except .pdf types. - PDFs containing images in them are allowed only for processing. - The `mini-ocr-v1` model doesn’t support the following query parameters: - `page_range` (.pdf types) - `zone`

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\OcrPredictRequest;

$client = new ApifreaksClient();
$request = new OcrPredictRequest([
    'apiKey' => "apiKey",
    'model' => "value",
    'ocrPredictRequestModel' => "value",
]);

$response = $client->ocrPredict($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**url:** `?string` — optional. URL of the image or PDF (required if `file` not provided)

**model:** `value-of<OcrPredictRequestModel>` — required. OCR model to use.

**pageRange:** `?string` — optional. Specify page range for multi-page PDFs (e.g., '1,3,5-10' or 'allpages'). **Note:** This parameter can only be used with .pdf file types.

**zone:** `?string` — optional. Define OCR zones using coordinates (top:left:height:width). Multiple zones can be defined using commas. Only available for model 'ocr-v1'. **Note:** This parameter cannot be used with .pdf and .zip file types as it can only be applied to single image queries.

**newLine:** `?int` — optional. Set to 1 to split output text into individual lines (default: 0)

**ocrPredictRequestUrl:** `?string` — optional. URL of the image or PDF (required if `file` not provided)

**ocrPredictRequestModel:** `value-of<OcrPredictRequestModel>` — required. OCR model to use. `mini-ocr-v1` for CAPTCHA OCR, `ocr-v1` for general OCR

**ocrPredictRequestPageRange:** `?string` — optional. Specify page range for multi-page PDFs (e.g., '1,3,5-10' or 'allpages'). **Note:** This parameter can only be used with .pdf file types.

**ocrPredictRequestZone:** `?string` — optional. Define OCR zones using coordinates (top:left:height:width). Multiple zones can be defined using commas. Only available for model 'ocr-v1'. **Note:** This parameter cannot be used with .pdf and .zip file types as it can only be applied to single image queries.

**ocrPredictRequestNewLine:** `?int` — optional. Set to 1 to split output text into individual lines (default: 0)

#### ↩️ Response

`OcrPredictResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->grammarDetect($request) -> GrammarDetectResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Analyze text for grammar errors and return the exact words flagged as grammatically incorrect with zero-based word positions.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GrammarDetectRequest;

$client = new ApifreaksClient();
$request = new GrammarDetectRequest([
    'apiKey' => "apiKey",
    'text' => "Example text to analyze.",
]);

$response = $client->grammarDetect($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**text:** `string` — required. Text to analyze for grammar errors

#### ↩️ Response

`GrammarDetectResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->grammarCorrect($request) -> GrammarCorrectResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Submit text with grammatical issues and receive a clean grammar-corrected result for proofreading and content workflows.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GrammarCorrectRequest;

$client = new ApifreaksClient();
$request = new GrammarCorrectRequest([
    'apiKey' => "apiKey",
    'text' => "Example text to analyze.",
]);

$response = $client->grammarCorrect($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**text:** `string` — required. Text to correct

#### ↩️ Response

`GrammarCorrectResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->weakWordsDetect($request) -> WeakWordsDetectResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Analyze text and return weak, vague, or filler words with zero-based word positions to help writers produce clearer and more concise content.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\WeakWordsDetectRequest;

$client = new ApifreaksClient();
$request = new WeakWordsDetectRequest([
    'apiKey' => "apiKey",
    'text' => "Example text to analyze.",
]);

$response = $client->weakWordsDetect($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**text:** `string` — required. Text to analyze for weak words

#### ↩️ Response

`WeakWordsDetectResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->readabilityScore($request) -> ReadabilityScoreResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Analyze text readability using industry-standard formulas including Flesch Reading Ease, Flesch-Kincaid Grade Level, Gunning Fog Index, SMOG Index, Coleman-Liau Index, and Automated Readability Index.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\ReadabilityScoreRequest;

$client = new ApifreaksClient();
$request = new ReadabilityScoreRequest([
    'apiKey' => "apiKey",
    'text' => "Example text to analyze.",
]);

$response = $client->readabilityScore($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**target:** `?value-of<ReadabilityScoreRequestTarget>` — optional. Target audience used to tune sentence difficulty levels

**exclude:** `?string` — optional. Comma-separated response sections to omit. Possible values are readability_scores, sentence_readability, readability_grade

**text:** `string` — required. Text to analyze for readability

#### ↩️ Response

`ReadabilityScoreResponse`

</dd>
</dl>
</details>

<details><summary><code>$client->astronomyLookup($request) -> AstronomyLookupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

Retrieve sunrise and sunset times, current position of the moon, and other related information by specifying a location address, location coordinates, IP address, or using the client IP address if no parameter is passed.

#### 🔌 Usage

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\AstronomyLookupRequest;

$client = new ApifreaksClient();
$request = new AstronomyLookupRequest([
    'apiKey' => "apiKey",
]);

$response = $client->astronomyLookup($request);
```

#### ⚙️ Parameters

**apiKey:** `string` — required. Your API key

**format:** `?value-of<AstronomyLookupRequestFormat>` — optional. Format of the response.

**location:** `?string` — optional. Location name or address

**lat:** `?float` — optional. Latitude for location coordinates

**long:** `?float` — optional. Longitude for location coordinates

**ip:** `?string` — optional. IP address for location detection

**lang:** `?string` — optional

**date:** `?DateTime` — optional. Date for astronomy data (YYYY-MM-DD)

**elevation:** `?float` — optional. Timezone of the location for which astronomy data is required

**timeZone:** `?string` — optional

#### ↩️ Response

`AstronomyLookupResponse`

</dd>
</dl>
</details>
