<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        
        $this->renderable(function (Throwable $e, $request) {
            return $this->handleException($request, $e);
        });
        
    }
    public function handleException($request, Throwable $exception)
    {
        if ($exception instanceof RouteNotFoundException) {
            return response()->json(["response" => false, "message" => "Error de autenticacion"], 401);
        }
        if($exception instanceof HttpException){
            return response()->json(["response" => false, "message" => "Error de ruta"], 404);
        }
        if ($exception instanceof AuthorizationException) {
            return response()->json(["response" => false, "message" => "Error de autorización, no tiene permisos"], 403);
        }
    }
}