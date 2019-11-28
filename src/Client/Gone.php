<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class Gone extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::GONE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Gone';
    }
}
