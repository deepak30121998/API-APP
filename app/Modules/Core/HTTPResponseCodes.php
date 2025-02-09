<?php

declare(strict_types=1);
namespace App\Modules\Core;

abstract class HTTPResponseCodes
{
    const success = [
        "title" => "success",
        "code" => 200,
        "message" => "The request was successfully processed."
    ];

    const notFound = [
        "title" => "not_found_error",
        "code" => 404,
        "message" => "could not find the resource."
    ];

    const badRequest = [
        "title" => "bad_request_error",
        "code" => 400,
        "message" => "the request was malformed."
    ];

    const unauthorized = [
        "title" => "unauthorized_error",
        "code" => 401,
        "message" => "the request is unauthorized."
    ];

    const forbidden = [
        "title" => "forbidden_error",
        "code" => 403,
        "message" => "the request is forbidden."
    ];

    const internalServerError = [
        "title" => "internal_server_error",
        "code" => 500,
        "message" => "an error occurred while processing the request."
    ];

    const unprocessableEntity = [
        "title" => "unprocessable_entity_error",
        "code" => 422,
        "message" => "the request is unprocessable."
    ];

    const tooManyRequests = [
        "title" => "too_many_requests_error",
        "code" => 429,
        "message" => "too many requests."
    ];

    const serviceUnavailable = [
        "title" => "service_unavailable_error",
        "code" => 503,
        "message" => "the service is unavailable."
    ];

    const gatewayTimeout = [
        "title" => "gateway_timeout_error",
        "code" => 504,
        "message" => "the gateway timed out."
    ];

    const badGateway = [
        "title" => "bad_gateway_error",
        "code" => 502,
        "message" => "the gateway received an invalid response."
    ];

    const notImplemented = [
        "title" => "not_implemented_error",
        "code" => 501,
        "message" => "the request is not implemented."
    ];
}
