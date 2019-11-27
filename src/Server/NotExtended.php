<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception\Server;

use Exception;
use Idiosyncratic\Http\Exception\ServerErrorException;
use Psr\Http\Message\ServerRequestInterface;
use Throwable;

final class NotExtended extends Exception implements ServerErrorException
{
    /** @var ServerRequestInterface */
    private $serverRequest;

    public function __construct(
        ServerRequestInterface $serverRequest,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        $this->serverRequest = $serverRequest;

        parent::__construct($message, $code, $previous);
    }

    public function getServerRequest() : ServerRequestInterface
    {
        return $this->serverRequest;
    }

    public function getHttpStatusCode() : int
    {
        return self::NOT_EXTENDED;
    }

    public function getHttpReasonPhrase() : string
    {
        return 'Not Extended';
    }
}
