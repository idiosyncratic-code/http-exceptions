<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception;

use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Throwable;

abstract class HttpException extends RuntimeException
{
    /** @var ServerRequestInterface */
    private $serverRequest;

    public function __construct(
        ServerRequestInterface $serverRequest,
        ?Throwable $previous = null
    ) {
        $this->serverRequest = $serverRequest;

        parent::__construct($this->getHttpReasonPhrase(), $this->getHttpStatusCode(), $previous);
    }

    public function getServerRequest() : ServerRequestInterface
    {
        return $this->serverRequest;
    }

    abstract public function getHttpStatusCode() : int;

    abstract public function getHttpReasonPhrase() : string;
}
