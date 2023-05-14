# base-models

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/base-models-laravel)](https://github.com/brokeyourbike/base-models-laravel/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/base-models/downloads)](https://packagist.org/packages/brokeyourbike/base-models)
[![Maintainability](https://api.codeclimate.com/v1/badges/78d83e53fd3f89ed60e9/maintainability)](https://codeclimate.com/github/brokeyourbike/base-models-laravel/maintainability)

Base models to extend in the app.

## Why?

I am using this abstract class in most of my apps, and I always have to cover it with tests etc. I don't want to copy the code anymore.


## Installation

```bash
composer require brokeyourbike/base-models
```

## Usage

```php
use BrokeYourBike\BaseModels\BaseUuid;

class ExampleModels extends BaseUuid {}
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/base-models-laravel/blob/main/LICENSE)
