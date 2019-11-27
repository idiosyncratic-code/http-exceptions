<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception;

use Psr\Http\Message\ServerRequestInterface;

interface HttpException
{
    public function getServerRequest() : ServerRequestInterface;

    public function getHttpStatusCode() : int;

    public function getHttpReasonPhrase() : string;
}
