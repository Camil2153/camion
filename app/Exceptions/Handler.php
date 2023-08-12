<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            $errorMessage = 'No tienes los permisos o derechos de acceso necesarios para realizar esta acción.';
        
            if ($request->expectsJson()) {
                return response()->json([
                    'error' => [
                        'message' => $errorMessage,
                        'html' => '<div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                    ' . $errorMessage . '
                                </div>'
                    ]
                ], 403);
            }
        
            session()->flash('error', '<div class="alert alert-danger alert-dismissible">
                                        <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                        ' . $errorMessage . '
                                    </div>');
        
            return redirect()->back();
        }    
    }
}
