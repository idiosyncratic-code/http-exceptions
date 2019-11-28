<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Client;

use Idiosyncratic\Http\Exception\HttpException;
use Idiosyncratic\Http\Exception\ClientErrorException;

final class PaymentRequired extends HttpException implements ClientErrorException
{
    public function getHttpStatusCode() : int
    {
        return self::PAYMENT_REQUIRED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Payment Required';
    }
}