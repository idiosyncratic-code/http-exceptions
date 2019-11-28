<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class MethodNotAllowed extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::METHOD_NOT_ALLOWED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Method Not Allowed';
    }
}
