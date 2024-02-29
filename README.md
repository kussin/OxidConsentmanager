# Kussin | Consentmanager for OXID eShop

## Requirement

1. OXID eSales CE/PE/EE v6.2.5 or newer
2. PHP 7.4 or newer

## Installation Guide

To install the module, please execute the following commands in OXID eShop root directory:

```bash
composer config repositories.kussin_consentmanager vcs https://github.com/kussin/OxidConsentmanager.git
composer require kussin/consentmanager --no-update
composer clearcache
composer update --no-interaction
vendor/bin/oe-console oe:module:install-configuration source/modules/kussin/consentmanager/
vendor/bin/oe-console oe:module:apply-configuration
```

**NOTE:** If you are using VCS like GIT for your project, you should add the following path to your `.gitignore` file:
`/source/modules/kussin/`

## User Guide

[User Guide](USER_GUIDE.md)

## Bugtracker and Feature Requests

Please use the [Github Issues](https://github.com/kussin/OxidConsentmanager/issues) for bug reports and feature requests.

## Support

Kussin | eCommerce und Online-Marketing GmbH<br>
Fahltskamp 3<br>
25421 Pinneberg<br>
Germany

Fon: +49 (4101) 85868 - 0<br>
Email: info@kussin.de

## Licence

[End-User Software License Agreement](LICENSE.md)

## Copyright

&copy; 2006-2024 Kussin | eCommerce und Online-Marketing GmbH
