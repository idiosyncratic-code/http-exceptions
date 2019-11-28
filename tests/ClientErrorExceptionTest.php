<?php

declare(strict_types=1);

namespace Idiosyncratic\Http\Exception;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;

class ClientErrorExceptionTest extends TestCase
{
    public function testCreatingExceptions() : void
    {
        $exceptions = [
            Client\BadRequest::class => [
                'code' => 400,
                'reason' => 'Bad Request',
            ],
            Client\Unauthorized::class => [
                'code' => 401,
                'reason' => 'Unauthorized',
            ],
            Client\PaymentRequired::class => [
                'code' => 402,
                'reason' => 'Payment Required',
            ],
            Client\Forbidden::class => [
                'code' => 403,
                'reason' => 'Forbidden',
            ],
            Client\NotFound::class => [
                'code' => 404,
                'reason' => 'Not Found',
            ],
            Client\MethodNotAllowed::class => [
                'code' => 405,
                'reason' => 'Method Not Allowed',
            ],
            Client\NotAcceptable::class => [
                'code' => 406,
                'reason' => 'Not Acceptable',
            ],
            Client\ProxyAuthenticationRequired::class => [
                'code' => 407,
                'reason' => 'Proxy Authentication Required',
            ],
            Client\RequestTimeout::class => [
                'code' => 408,
                'reason' => 'Request Timeout',
            ],
            Client\Conflict::class => [
                'code' => 409,
                'reason' => 'Conflict',
            ],
            Client\Gone::class => [
                'code' => 410,
                'reason' => 'Gone',
            ],
            Client\LengthRequired::class => [
                'code' => 411,
                'reason' => 'Length Required',
            ],
            Client\PreconditionFailed::class => [
                'code' => 412,
                'reason' => 'Precondition Failed',
            ],
            Client\PayloadTooLarge::class => [
                'code' => 413,
                'reason' => 'Payload Too Large',
            ],
            Client\RequestUriTooLong::class => [
                'code' => 414,
                'reason' => 'Request-URI Too Long',
            ],
            Client\UnsupportedMediaType::class => [
                'code' => 415,
                'reason' => 'Unsupported Media Type',
            ],
            Client\RequestedRangeNotSatisfiable::class => [
                'code' => 416,
                'reason' => 'Requested Range Not Satisfiable',
            ],
            Client\ExpectationFailed::class => [
                'code' => 417,
                'reason' => 'Expectation Failed',
            ],
            Client\MisdirectedRequest::class => [
                'code' => 421,
                'reason' => 'Misdirected Request',
            ],
            Client\UnprocessableEntity::class => [
                'code' => 422,
                'reason' => 'Unprocessable Entity',
            ],
            Client\Locked::class => [
                'code' => 423,
                'reason' => 'Locked',
            ],
            Client\FailedDependency::class => [
                'code' => 424,
                'reason' => 'Failed Dependency',
            ],
            Client\UpgradeRequired::class => [
                'code' => 426,
                'reason' => 'Upgrade Required',
            ],
            Client\PreconditionRequired::class => [
                'code' => 428,
                'reason' => 'Precondition Required',
            ],
            Client\TooManyRequests::class => [
                'code' => 429,
                'reason' => 'Too Many Requests',
            ],
            Client\RequestHeaderFieldsTooLarge::class => [
                'code' => 431,
                'reason' => 'Request Header Fields Too Large',
            ],
            Client\ConnectionClosedWithoutResponse::class => [
                'code' => 444,
                'reason' => 'Connection Closed Without Response',
            ],
            Client\UnavailableForLegalReasons::class => [
                'code' => 451,
                'reason' => 'Unavailable For Legal Reasons',
            ],
            Client\ClientClosedRequest::class => [
                'code' => 499,
                'reason' => 'Client Closed Request',
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
