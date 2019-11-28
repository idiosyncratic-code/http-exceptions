<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class ProxyAuthenticationRequired extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::PROXY_AUTHENTICATION_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Proxy Authentication Required';
    }
}
