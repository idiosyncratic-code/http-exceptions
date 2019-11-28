<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class ServiceUnavailable extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::SERVICE_UNAVAILABLE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Service Unavailable';
    }
}
