<?php

namespace App\Http\Controllers;

use Carbon\CarbonPeriod;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FullCalenderController extends Controller
{
    /**
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $startDate = \Carbon\Carbon::now()->subDays(3)->format('Y-m-d');
        $endDate = \Carbon\Carbon::now()->addDays(3)->format('Y-m-d');
        $period = CarbonPeriod::create($startDate, $endDate);
        
        return view('fullcalender.index',compact('period'));
    }

}

