# Egyptian eInvoicing & eReceipt

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ahmedeid/e-invoice-eg.svg?style=flat-square)](https://packagist.org/packages/ahmedeid/e-invoice-eg)
[![Total Downloads](https://img.shields.io/packagist/dt/ahmedeid/e-invoice-eg.svg?style=flat-square)](https://packagist.org/packages/ahmedeid/e-invoice-eg)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require ahmedeid/e-invoice-eg
```
To publish Config
```bash
php artisan vendor:publish --provider="Ahmedeid\EInvoiceEg\EInvoiceEgServiceProvider" --tag="config"
```
add to env file 
```dotenv
API_BASE_URL=https://api.preprod.invoicing.eta.gov.eg
ID_SRV_BASE_URL=https://id.preprod.eta.gov.eg
CLIENT_ID=******************
CLIENT_SECRET=********************************
```
## Usage

```php
// Usage description here
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmed.m.eid.2001@gmail.com instead of using the issue tracker.

## Credits

-   [ahmedeid](https://github.com/ahmedeid46)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
