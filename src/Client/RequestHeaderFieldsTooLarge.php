<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class RequestHeaderFieldsTooLarge extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::REQUEST_HEADER_FIELDS_TOO_LARGE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Request Header Fields Too Large';
    }
}
