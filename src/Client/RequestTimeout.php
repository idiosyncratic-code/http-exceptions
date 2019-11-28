<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class RequestTimeout extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::REQUEST_TIMEOUT;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Request Timeout';
    }
}
