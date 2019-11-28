<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class UnsupportedMediaType extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::UNSUPPORTED_MEDIA_TYPE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Unsupported Media Type';
    }
}
