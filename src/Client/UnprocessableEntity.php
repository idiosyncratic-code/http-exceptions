<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class UnprocessableEntity extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::UNPROCESSABLE_ENTITY;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Unprocessable Entity';
    }
}
