# iMemento Elements

Essential components for iMemento Laravel services

## Purpose

This package behaves as a generic bundle that can easily be included for fast development of iMemento Services.

For a full list of included packages, please consult the `composer.json` file in the root directory of the project.

## Package highlights

These essential packages are included in the bundle:

* `spatie/laravel-cors`
* `fideloper/proxy`
* `guzzlehttp/guzzle`
* `imemento/clients`
* `imemento/exceptions-laravel`
* `imemento/guard-laravel`
* `imemento/health-probe`
* `imemento/sdk-auth`
* `larafun/suite`
* `ytake/laravel-fluent-logger`

## Setup

These variables should exist in your `.env` file:
```bash
# validating auth tokens
AUTH_KEY=

# authenticating the current service
APP_EMAIL=
APP_PASSWORD=
ENDPOINT_INTERNAL_SSR_AUTH=
```

## Config

`config/auth.php`
```php
'api' => [
	'driver' 	=> 'jwt',
	'provider' 	=> 'users',
],
//...
'users' => [
	'driver' 	=> 'static',
	'model' 	=> iMemento\SDK\Auth\User::class,
],
```


