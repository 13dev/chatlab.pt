<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Prettus\Validator\AbstractValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Session;
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
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof ValidatorException) {
            return back()->with('validation', $e->getMessageBag()->all());
        }

        return parent::render($request, $e);
    }
}
