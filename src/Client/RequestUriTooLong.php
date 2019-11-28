<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class RequestUriTooLong extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::REQUEST_URI_TOO_LONG;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Request-URI Too Long';
    }
}
