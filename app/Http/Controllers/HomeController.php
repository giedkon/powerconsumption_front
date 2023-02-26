<?php

namespace App\Http\Controllers;

use App\Http\Helpers\APIHelper;
use App\Http\Helpers\CalculationHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $computer_usage = CalculationHelper::getComputerUsageList();
        $computer_usage_daily = CalculationHelper::getDailyConsumptions();
        return view('index', compact('computer_usage', 'computer_usage_daily'));
    }
    public function list() {
        $computers = APIHelper::callAPI('get_computer_list');
        return view('list', compact('computers'));
    }
}
