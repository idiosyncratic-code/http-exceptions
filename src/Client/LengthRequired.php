<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class LengthRequired extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::LENGTH_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Length Required';
    }
}
