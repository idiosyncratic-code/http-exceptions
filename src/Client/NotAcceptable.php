<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class NotAcceptable extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::NOT_ACCEPTABLE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Not Acceptable';
    }
}
