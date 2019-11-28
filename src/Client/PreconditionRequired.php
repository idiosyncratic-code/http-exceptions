<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class PreconditionRequired extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::PRECONDITION_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Precondition Required';
    }
}
