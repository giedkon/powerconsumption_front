<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;

class CalculationHelper
{
    public static function getComputerUsageList()
    {
        $computers = APIHelper::callAPI('get_computer_list');
        foreach($computers as &$computer) {
            $computer_usage = collect(APIHelper::callAPI('get_computer_usage_list', [], [], ['computerId' => $computer['id']]));
            $computer['cpu_draw'] = $computer_usage->sum('cpuPowerDraw');
            $computer['gpu_draw'] = $computer_usage->sum('gpuPowerDraw');
            $computer['total_usage'] = $computer_usage->sum('totalPowerDraw');
        }
        return $computers;
    }
    public static function getDailyConsumptions($interval = 30)
    {
        $computers = APIHelper::callAPI('get_computer_list');
        $days = [];
        foreach($computers as &$computer) {
            $computer_usage = collect(APIHelper::callAPI('get_computer_usage_list', [], [], ['computerId' => $computer['id']]));
            foreach($computer_usage as $consumption_item) {
                $day = Carbon::parse($consumption_item['time'])->format('Y-m-d');
                if(empty($days[$day])) {
                    $days[$day] = $consumption_item['totalPowerDraw'];
                } else {
                    $days[$day] += $consumption_item['totalPowerDraw'];
                }
            }

        }
        krsort($days);
        $days = collect($days)->filter(function($item, $key) use ($interval) {
            return Carbon::parse($key)->between(now()->subDays($interval), now());
        });
        return $days;
    }

}
