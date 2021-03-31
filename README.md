# Blade Github octicon icons 

**Package is still under development.**

A package to easily make use of [Github Octicons](https://primer.style/octicons/) in your Laravel Blade views. 

For a full list of available icons see the [SVG directory](https://github.com/Activisme-be/Blade-github-octicons/tree/master/resources/svg).

## Requirements 

- PHP 7.4 or higher 
- Laravel 8.0 or higher 

## Icon information 

This package comes with the Github Octicons. And 2 different sizes. **14px** and **26px** 
The sizes are defined at the end off the icon name by example: 

```
<x:go-zap-16/>
<x:go-zap-24/>
```

## Install 

Via composer: 

```
$ composer require actb/blade-github-octicons
```

## Usage 

Icons can be used a self-closing blade components which will be compiled to SVG icons.

```
<x-go-arrow-left/>
```

You can also pass classes to your icon components: 

```
<x-go-arrow-left class="w-6 h-6 text-gray-600"/>
```

And even use inline styles: 

```
<x-go-arrow-left style="color: #555"/>
```

## Raw SVG icons 

If you want to use the raw SVG icons as assets, you can publish them using: 

```
$ php artisan vendor:publish --tag=blade-github-octicons --force
```

Then use them in your views like: 

```
<img src="{{ asset('vendor/blade-feather-icons/arrow-left.svg') }}" width="10" height="10"/>
```

### Blade icons 

Blade Github octicons uses blade icons under the hood. Please refer to [the Blade icons readme](https://github.com/driesvints/blade-icons/blob/master/README.md) for additional
functionality.

## Testing 

```
$ composer test
```

## Contributing 

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details. 

## Security 

If you discover any security issues, please email [topairy@gmail.com](mailto:topairy@gmail.com) unstead of using the issue tracker. 

## Credits 

- [Tjoosten](https://github.com/Tjoosten) 
- [All contributors](https://github.com/Activisme-be/Blade-github-octicons/graphs/contributors)

## License 

The MIT license (MIT). Please see [License file](LICENSE.md) for more information. 
