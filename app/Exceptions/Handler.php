<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
        {
            return response(['Token is invalid'], 401);
        }
        if ($exception instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
        {
            return response(['Token has expired'], 401);
        }
        // This will replace our 404 response with
        // a JSON response.
        if ($exception instanceof ModelNotFoundException) {
            return response()->json(
                [
                    'error' => 'Resource not found'
                ],
                404
            );
        }
        return parent::render($request, $exception);
    }

    /**
     * Return Unauthenticated Response for authenticated request
     *
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     *
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }
}
