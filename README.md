<p align="center">
    <img src="https://raw.githubusercontent.com/coderflexx/laracommand/main/docs/images/logo.png" alt="laracommand Logo" width="300">
    <br><br>
    <img src="https://raw.githubusercontent.com/coderflexx/laracommand/main/docs/images/example.png" alt="laracommand Example" height="500">
</p>


[![Latest Version on Packagist](https://img.shields.io/packagist/v/coderflexx/laracommand.svg?style=flat-square)](https://packagist.org/packages/coderflexx/laracommand)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/coderflexx/laracommand/run-tests?label=tests)](https://github.com/coderflexx/Laracommand/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/coderflexx/laracommand/Check%20&%20fix%20styling?label=code%20style)](https://github.com/coderflexx/laracommand/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/coderflexx/laracommand.svg?style=flat-square)](https://packagist.org/packages/coderflexx/laracommand)

A Cli tool to save you time, and gives you the power to scaffold all of your models,controllers,commands... at once

## Installation

You can install the package via composer:

```bash
composer require coderflex/lara-command --dev
```


## Usage

Use the commands like using `laravel` make commands

- make model command
  
```bash
php artisan laracommand:make-model FirstModel SecondModel
```
You can generate as many as you want of models, and you can add options like `make:model` command

Check out the [docs](https://laravel.com/docs/8.x/eloquent#generating-model-classes) for more, just replace `make:model` with `laracommand:make-model`


## Testing

```bash
composer test
```

## Note
This package is for development use only, you are free  to disable/remove it once you are done with.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [coderflex](https://github.com/coderflex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 



