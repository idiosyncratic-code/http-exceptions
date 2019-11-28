<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class FailedDependency extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::FAILED_DEPENDENCY;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Failed Dependency';
    }
}
