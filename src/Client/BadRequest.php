<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class BadRequest extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::BAD_REQUEST;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Bad Request';
    }
}
