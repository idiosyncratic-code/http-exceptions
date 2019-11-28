<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class TooManyRequests extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::TOO_MANY_REQUESTS;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Too Many Requests';
    }
}
