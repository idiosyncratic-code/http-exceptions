<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class ExpectationFailed extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::EXPECTATION_FAILED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Expectation Failed';
    }
}