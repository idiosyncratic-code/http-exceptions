<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ServerErrorException;

final class VariantAlsoNegotiates extends HttpException implements ServerErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::VARIANT_ALSO_NEGOTIATES;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Variant Also Negotiates';
    }
}
