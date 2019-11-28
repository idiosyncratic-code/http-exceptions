<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class InsufficientStorage extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::INSUFFICIENT_STORAGE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Insufficient Storage';
    }
}
