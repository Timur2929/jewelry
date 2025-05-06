<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemLog;
use App\Models\UserActivity;
use App\Models\PerformanceMetric;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function dashboard()
    {
        $recentLogs = SystemLog::orderBy('created_at', 'desc')->take(10)->get();
        $recentActivities = UserActivity::with('user')->orderBy('created_at', 'desc')->take(10)->get();
        
        $avgResponseTimes = PerformanceMetric::where('metric_name', 'response_time')
            ->where('created_at', '>=', now()->subDay())
            ->selectRaw('AVG(value) as avg_value, DATE_FORMAT(created_at, "%H:00") as hour')
            ->groupBy('hour')
            ->orderBy('hour')
            ->get();
            
        return view('admin.monitoring.dashboard', compact('recentLogs', 'recentActivities', 'avgResponseTimes'));
    }
    
    public function logs(Request $request)
    {
        $query = SystemLog::query();
        
        if ($request->has('level')) {
            $query->where('level', $request->level);
        }
        
        $logs = $query->orderBy('created_at', 'desc')->paginate(20);
        
        return view('admin.monitoring.logs', compact('logs'));
    }
    
    public function activities(Request $request)
    {
        $query = UserActivity::with('user');
        
        if ($request->has('activity_type')) {
            $query->where('activity_type', $request->activity_type);
        }
        
        $activities = $query->orderBy('created_at', 'desc')->paginate(20);
        
        return view('admin.monitoring.activities', compact('activities'));
    }
    
    public function performance(Request $request)
    {
        $metrics = PerformanceMetric::where('created_at', '>=', now()->subDays(7))
            ->orderBy('created_at', 'desc')
            ->paginate(20);
            
        return view('admin.monitoring.performance', compact('metrics'));
    }
}
