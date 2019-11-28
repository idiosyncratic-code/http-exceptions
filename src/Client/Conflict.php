<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class Conflict extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::CONFLICT;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Conflict';
    }
}
