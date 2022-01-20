# base-models

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/base-models-laravel)](https://github.com/brokeyourbike/base-models-laravel/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/base-models/downloads)](https://packagist.org/packages/brokeyourbike/base-models)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/base-models-laravel/blob/main/LICENSE)

[![Maintainability](https://api.codeclimate.com/v1/badges/78d83e53fd3f89ed60e9/maintainability)](https://codeclimate.com/github/brokeyourbike/base-models-laravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/78d83e53fd3f89ed60e9/test_coverage)](https://codeclimate.com/github/brokeyourbike/base-models-laravel/test_coverage)
[![tests](https://github.com/brokeyourbike/base-models-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/base-models-laravel/actions/workflows/tests.yml)

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

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/base-models-laravel/blob/main/LICENSE)
