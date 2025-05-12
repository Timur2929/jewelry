<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceMetric extends Model
{
    protected $fillable = [
        'metric_name', 'value', 'route', 'method'
    ];
}
