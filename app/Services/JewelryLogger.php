<?php
namespace App\Services;

use App\Models\SystemLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class JewelryLogger
{
    public static function log($level, $message, $context = [])
    {
        SystemLog::create([
            'level' => $level,
            'message' => $message,
            'context' => $context,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'user_id' => Auth::id() ?? null
        ]);
    }

    public static function error($message, $context = [])
    {
        self::log('error', $message, $context);
    }

    public static function warning($message, $context = [])
    {
        self::log('warning', $message, $context);
    }

    public static function info($message, $context = [])
    {
        self::log('info', $message, $context);
    }

    public static function debug($message, $context = [])
    {
        self::log('debug', $message, $context);
    }
}
