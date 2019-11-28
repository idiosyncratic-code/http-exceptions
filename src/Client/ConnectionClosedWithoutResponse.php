<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class ConnectionClosedWithoutResponse extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::CONNECTION_CLOSED_WITHOUT_RESPONSE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Connection Closed Without Response';
    }
}
