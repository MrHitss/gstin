# GSTIN A Laravel Package

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

## Introduction

The GSTIN is a PHP library designed for easy integration with the GSTIN API. This package provides functionality for retrieving and interacting with GST-related information, facilitating smooth interactions with India's GST system. It leverages the Laravel framework's capabilities for a seamless experience.

### **Note:** This package is currently in development. Features and functionality may change as development progresses.

## Features

- **GSTIN Validation:** Verify the validity of GSTINs.
- **GSTIN Information Retrieval:** Retrieve detailed information about a GSTIN.
- **Flexible Integration:** Easy integration with Laravel applications using facades and service classes.
- **API Communication:** Utilizes the Guzzle HTTP client for making API requests.

## Installation

You can install the package via Composer:

```php
composer require mrhitss/gstin
```

After installing the package, publish the configuration file:

```php
php artisan vendor:publish --tag=gstin-config
```

## Configuration

Update your .env file with your GST Public API credentials and settings:

```php
GSTIN_MODE=sandbox
GSTIN_SANDBOX_CLIENT_ID=your_sandbox_client_id
GSTIN_SANDBOX_CLIENT_SECRET=your_sandbox_client_secret
GSTIN_LIVE_CLIENT_ID=your_live_client_id
GSTIN_LIVE_CLIENT_SECRET=your_live_client_secret
GSTIN_LIVE_APP_ID=your_live_app_id
GSTIN_VALIDATE_SSL=true
```

The configuration file located at config/gstin.php will use these environment variables to manage API credentials and settings for different modes (sandbox and live).

## Usage

### Facade

You can use the package's facade for easy access to GSTIN services:

```php
use Mrhitss\Gstin\Facades\Gstin;

$gstin = '22AAAAA0000A1Z5';
$response = Gstin::searchTaxpayer($gstin);
```

### Service

To use the service directly:

use Mrhitss\Gstin\Services\Gstin;

```php
$gstinService = new Gstin();
$response = $gstinService->searchTaxpayer('22AAAAA0000A1Z5');
```

## API Methods

### `searchTaxpayer`

**Description:** Looking up taxpayer details by GSTIN is a breeze with this method. Whether you're verifying a GSTIN or just retrieving taxpayer info, this method has got you covered.

**Usage:**

```php
use Mrhitss\Gstin\Facades\Gstin;

$gstin = '22AAAAA0000A1Z5';
$response = Gstin::searchTaxpayer($gstin);
```

### `panToGstin`

**Description:** Need to find all GSTINs associated with a specific PAN? This method makes it easy to retrieve all GSTINs linked to a given PAN number.

**Usage:**

```php
use Mrhitss\Gstin\Facades\Gstin;

$pan = 'ABCDE1234F';
$response = Gstin::panToGstin($pan);
```

### `searchIrnDetails`

**Description:** Looking to retrieve details about a specific Invoice Reference Number (IRN)? Use this method to get all the information associated with a given IRN.

**Usage:**

```php
use Mrhitss\Gstin\Facades\Gstin;

$irn = 'IRN1234567890';
$response = Gstin::searchIrnDetails($irn);
```

## License

This package is licensed under the MIT License. For more details, please refer to the [LICENSE](LICENSE) file included in this repository.

## Contributing

We welcome contributions to enhance the functionality and quality of this package. If you have suggestions or improvements, you can:

- **Open Issues:** If you encounter any bugs or have feature requests, please open an issue in the repository.
- **Submit Pull Requests:** Feel free to fork the repository, make your changes, and submit a pull request.

Thank you for your interest in contributing!

