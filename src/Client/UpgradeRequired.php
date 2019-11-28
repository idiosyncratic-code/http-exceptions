<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class UpgradeRequired extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::UPGRADE_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Upgrade Required';
    }
}
