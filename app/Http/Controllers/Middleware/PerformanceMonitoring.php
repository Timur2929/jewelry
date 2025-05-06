<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\PerformanceMetric;

class PerformanceMonitoring
{
    public function handle($request, Closure $next)
    {
        $startTime = microtime(true);
        $response = $next($request);
        $endTime = microtime(true);
        
        // Record response time in milliseconds
        PerformanceMetric::create([
            'metric_name' => 'response_time',
            'value' => ($endTime - $startTime) * 1000,
            'route' => $request->route()->getName() ?? $request->path(),
            'method' => $request->method()
        ]);
        
        return $response;
    }
}
