<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class ClientClosedRequest extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::CLIENT_CLOSED_REQUEST;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Client Closed Request';
    }
}
