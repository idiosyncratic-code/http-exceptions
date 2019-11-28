<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class NotFound extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::NOT_FOUND;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Not Found';
    }
}
