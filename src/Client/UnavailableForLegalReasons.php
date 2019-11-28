<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\ClientErrorException;
use Idiosyncratic\Http\Exception\HttpException;

final class UnavailableForLegalReasons extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::UNAVAILABLE_FOR_LEGAL_REASONS;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Unavailable For Legal Reasons';
    }
}
