<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class Unauthorized extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::UNAUTHORIZED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Unauthorized';
    }
}
