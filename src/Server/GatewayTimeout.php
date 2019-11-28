<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class GatewayTimeout extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::GATEWAY_TIMEOUT;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Gateway Timeout';
    }
}
