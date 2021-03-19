<?php

namespace App\Exceptions;

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
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)

    {
        //dd('1');
        if($this->isHttpException($exception))
        {
          //  dd('2');
            switch ($exception->getStatusCode()) {
                // not found
                case '404':
                     return $this->renderHttpException($exception); 
                break;
                // internal server error
                case '500':
                return $this->renderHttpException($exception);   
                break;
                default:
                    return $this->renderHttpException($exception);
                break;
            }
        } else
        {
            return parent::render($request, $exception);
        }

    }
}
