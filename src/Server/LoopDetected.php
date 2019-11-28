<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class LoopDetected extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::LOOP_DETECTED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Loop Detected';
    }
}
