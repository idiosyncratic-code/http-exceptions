<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class NotImplemented extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::NOT_IMPLEMENTED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Not Implemented';
    }
}
