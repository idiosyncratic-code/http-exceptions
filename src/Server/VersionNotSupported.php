<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class VersionNotSupported extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::VERSION_NOT_SUPPORTED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Version Not Supported';
    }
}
