<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class PayloadTooLarge extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::PAYLOAD_TOO_LARGE;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Payload Too Large';
    }
}
