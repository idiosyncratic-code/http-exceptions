<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;

class ServerErrorExceptionTest extends TestCase
{
    public function testCreatingExceptions() : void
    {
        $exceptions = [
            Server\InternalServerError::class => [
                'code' => 500,
                'reason' => 'Internal Server Error',
            ],
            Server\NotImplemented::class => [
                'code' => 501,
                'reason' => 'Not Implemented',
            ],
            Server\BadGateway::class => [
                'code' => 502,
                'reason' => 'Bad Gateway',
            ],
            Server\ServiceUnavailable::class => [
                'code' => 503,
                'reason' => 'Service Unavailable',
            ],
            Server\GatewayTimeout::class => [
                'code' => 504,
                'reason' => 'Gateway Timeout',
            ],
            Server\VersionNotSupported::class => [
                'code' => 505,
                'reason' => 'Version Not Supported',
            ],
            Server\VariantAlsoNegotiates::class => [
                'code' => 506,
                'reason' => 'Variant Also Negotiates',
            ],
            Server\InsufficientStorage::class => [
                'code' => 507,
                'reason' => 'Insufficient Storage',
            ],
            Server\LoopDetected::class => [
                'code' => 508,
                'reason' => 'Loop Detected',
            ],
            Server\NotExtended::class => [
                'code' => 510,
                'reason' => 'Not Extended',
            ],
            Server\NetworkAuthenticationRequired::class => [
                'code' => 511,
                'reason' => 'Network Authentication Required',
            ],
        ];

        $request = $this->createMock(ServerRequestInterface::class);

        foreach ($exceptions as $class => $details) {
            $exception = new $class($request);
            $this->assertEquals($details['code'], $exception->getHttpStatusCode());
            $this->assertEquals($details['reason'], $exception->getHttpReasonPhrase());
            $this->assertSame($request, $exception->getServerRequest());
        }
    }
}
