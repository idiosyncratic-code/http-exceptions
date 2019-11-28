<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class NetworkAuthenticationRequired extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::NETWORK_AUTHENTICATION_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Network Authentication Required';
    }
}
