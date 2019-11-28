<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class RequestedRangeNotSatisfiable extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::REQUESTED_RANGE_NOT_SATISFIABLE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Requested Range Not Satisfiable';
    }
}
