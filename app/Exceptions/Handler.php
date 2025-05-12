<?php
namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Services\JewelryLogger;
use Throwable;

class Handler extends ExceptionHandler
{
    // ...existing code...

    public function report(Throwable $exception)
    {
        // Log exception to our custom system
        JewelryLogger::error($exception->getMessage(), [
            'exception' => get_class($exception),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString(),
        ]);
        
        parent::report($exception);
    }
}
