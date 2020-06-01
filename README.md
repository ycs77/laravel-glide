# Glide for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Style CI Build Status][ico-style-ci]][link-style-ci]
[![Total Downloads][ico-downloads]][link-downloads]

[Glide image manipulation](https://github.com/thephpleague/glide) for Laravel.

## Install

Via Composer install:

```bash
composer require ycs77/laravel-glide
```

Publish config:

```bash
php artisan vendor:publish --provider="Ycs77\LaravelGlide\GlideServiceProvider"
```

Set the Glide route:

*routes/web.php*
```php
use Ycs77\LaravelGlide\Facades\Glide;

// Other routes ...

Glide::route();
```

## Usage

```php
glide_url('avatar/user01-avatar.png', [
    'w' => '50',
    'h' => '50',
    'fit' => 'crop',
]);

// https://yi-dai.test/img/avatar/user01-avatar.png/sds4d524g.../sd2g4e1drf2g...img.jpg?w=50&h=50&fit=crop
```

Or use Facade:

```php
use Ycs77\LaravelGlide\Facades\Glide;

Glide::url('avatar/user01-avatar.png', [
    'w' => '50',
    'h' => '50',
    'fit' => 'crop',
]);

// https://yi-dai.test/img/avatar/user01-avatar.png/sds4d524g.../sd2g4e1drf2g...img.jpg?w=50&h=50&fit=crop
```

Full documation visit: https://glide.thephpleague.com/.

[ico-version]: https://img.shields.io/packagist/v/ycs77/laravel-glide?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square
[ico-style-ci]: https://github.styleci.io/repos/268561711/shield?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ycs77/laravel-glide?style=flat-square

[link-packagist]: https://packagist.org/packages/ycs77/laravel-glide
[link-style-ci]: https://github.styleci.io/repos/268561711
[link-downloads]: https://packagist.org/packages/ycs77/laravel-glide
