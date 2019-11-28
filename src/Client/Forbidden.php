<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class Forbidden extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::FORBIDDEN;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Forbidden';
    }
}
