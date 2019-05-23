# csrf

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Protect your application from cross-site request forgery (CSRF) attacks

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require muhamed-didovic/csrf
```

## Usage

``` php
$skeleton = new muhamed-didovic\csrf();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email muhamed.didovic@gmail.com instead of using the issue tracker.

## Credits

- [Muhamed Didovic][link-author]
- [Goran Radosevic][link-author2]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/muhamed-didovic/csrf.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/muhamed-didovic/csrf/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/muhamed-didovic/csrf.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/muhamed-didovic/csrf.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/muhamed-didovic/csrf.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/muhamed-didovic/csrf
[link-travis]: https://travis-ci.org/muhamed-didovic/csrf
[link-scrutinizer]: https://scrutinizer-ci.com/g/muhamed-didovic/csrf/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/muhamed-didovic/csrf
[link-downloads]: https://packagist.org/packages/muhamed-didovic/csrf
[link-author]: https://github.com/muhamed-didovic
[link-author2]: https://github.com/gradosevic
[link-contributors]: ../../contributors
