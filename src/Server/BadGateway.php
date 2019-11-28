<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class BadGateway extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::BAD_GATEWAY;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Bad Gateway';
    }
}
