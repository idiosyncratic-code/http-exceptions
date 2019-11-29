# Idiosyncratic HTTP Exceptions

## Introduction

A library providing Exception classes for HTTP Requests. HTTP Exceptions require the server request instance to facilitate advanced exception handlers to generate appropriate responses (for example, sending the correct content type in the response).

## Installation

Use [Composer](https://getcomposer.org):

```
composer require idiosyncratic/http-exceptions
```

## Usage

```php
use Idiosyncratic\Http\Exception\Server\InternalServerError;

// $request must be an instance of Psr\Http\Message\ServerRequestInterface;
throw new InternalServerError($request);
```
You may also wrap a previous exception, just as with a regular Exception:

```php
use Idiosyncratic\Http\Exception\Server\InternalServerError;


try {
    throw new \Exception('Something went wrong');
} catch (\Throwable $throwable) {
    // $request must be an instance of Psr\Http\Message\ServerRequestInterface;
    throw new InternalServerError($request, $throwable);
}
```
