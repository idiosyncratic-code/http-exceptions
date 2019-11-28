<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class InternalServerError extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::INTERNAL_SERVER_ERROR;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Internal Server Error';
    }
}
