<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class MisdirectedRequest extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::MISDIRECTED_REQUEST;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Misdirected Request';
    }
}
