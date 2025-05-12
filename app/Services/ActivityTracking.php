<?php
namespace App\Services;

use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ActivityTracking
{
    public static function log($activityType, $metadata = [])
    {
        UserActivity::create([
            'user_id' => Auth::id() ?? null,
            'activity_type' => $activityType,
            'page_url' => Request::fullUrl(),
            'ip_address' => Request::ip(),
            'metadata' => $metadata
        ]);
    }
}
