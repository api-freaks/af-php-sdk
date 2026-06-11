# Apifreaks PHP SDK

[![fern shield](https://img.shields.io/badge/%F0%9F%8C%BF-Built%20with%20Fern-brightgreen)](https://buildwithfern.com?utm_source=github&utm_medium=github&utm_campaign=readme&utm_source=Apifreaks%2FPHP)
[![Packagist Version](https://img.shields.io/packagist/v/apifreaks/sdk)](https://packagist.org/packages/apifreaks/sdk)

The Apifreaks PHP library provides convenient access to the Apifreaks APIs from PHP.

## Table of Contents

- [Installation](#installation)
- [Reference](#reference)
- [Usage](#usage)
- [Environments](#environments)
- [Errors](#errors)
- [Request Types](#request-types)
- [Advanced](#advanced)
  - [Retries](#retries)
  - [Timeouts](#timeouts)
  - [Additional Headers](#additional-headers)
  - [Additional Query String Parameters](#additional-query-string-parameters)
- [Contributing](#contributing)

## Installation

Install the package with Composer:

```sh
composer require apifreaks/sdk
```

## Reference

A full reference for this library is available [here](./reference.md).

## Usage

Instantiate and use the client with the following:

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Apifreaks\ApifreaksClient;
use Apifreaks\Requests\GeolocationLookupRequest;
use Apifreaks\Exceptions\ApifreaksApiException;
use Apifreaks\Exceptions\ApifreaksException;

$client = new ApifreaksClient();

try {
    $response = $client->geolocationLookup(new GeolocationLookupRequest([
        'apiKey' => 'your_api_key',
        'ip' => '8.8.8.8',
    ]));

    echo $response;
} catch (ApifreaksApiException $e) {
    echo 'API error: ' . $e->getCode() . PHP_EOL;
    print_r($e->getBody());
} catch (ApifreaksException $e) {
    echo 'SDK error: ' . $e->getMessage() . PHP_EOL;
}
```

## Environments

This SDK allows you to configure the base URL for API requests.

```php
<?php

use Apifreaks\ApifreaksClient;
use Apifreaks\Environments;

$client = new ApifreaksClient([
    'baseUrl' => Environments::Default_->value,
]);
```

## Errors

When the API returns a non-success status code, the SDK throws `Apifreaks\Exceptions\ApifreaksApiException`.

```php
<?php

use Apifreaks\Exceptions\ApifreaksApiException;
use Apifreaks\Exceptions\ApifreaksException;

try {
    $response = $client->geolocationLookup($request);
} catch (ApifreaksApiException $e) {
    echo 'Status code: ' . $e->getCode() . PHP_EOL;
    print_r($e->getBody());
} catch (ApifreaksException $e) {
    echo $e->getMessage() . PHP_EOL;
}
```

## Request Types

The SDK exports request objects under the `Apifreaks\Requests` namespace and response objects under the `Apifreaks\Types` namespace.

```php
<?php

use Apifreaks\Requests\GeolocationLookupRequest;

$request = new GeolocationLookupRequest([
    'apiKey' => 'your_api_key',
    'ip' => '8.8.8.8',
]);
```

## Advanced

### Retries

The SDK supports automatic retries. The default retry count is `2`. You can configure retries globally on the client or per request.

```php
<?php

$client = new ApifreaksClient([
    'maxRetries' => 3,
]);

$response = $client->geolocationLookup($request, [
    'maxRetries' => 3,
]);
```

### Timeouts

Configure request timeouts globally on the client or per request.

```php
<?php

$client = new ApifreaksClient([
    'timeout' => 30,
]);

$response = $client->geolocationLookup($request, [
    'timeout' => 30,
]);
```

### Additional Headers

You can add custom headers globally on the client or per request.

```php
<?php

$client = new ApifreaksClient([
    'headers' => [
        'X-Custom-Header' => 'custom-value',
    ],
]);

$response = $client->geolocationLookup($request, [
    'headers' => [
        'X-Request-Header' => 'request-value',
    ],
]);
```

### Additional Query String Parameters

You can add custom query parameters to individual requests.

```php
<?php

$response = $client->geolocationLookup($request, [
    'queryParameters' => [
        'filter' => 'active',
        'sort' => 'desc',
    ],
]);
```

## Contributing

While we value open-source contributions to this SDK, this library is generated programmatically.
Additions made directly to this library would have to be moved over to our generation code,
otherwise they would be overwritten upon the next generated release. Feel free to open a PR as
a proof of concept, but know that we will not be able to merge it as-is. We suggest opening
an issue first to discuss with us!

On the other hand, contributions to the README are always very welcome!
