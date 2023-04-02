<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Pickup;
use App\Dropoff;
use Cron\MonthField;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // User Count
        $user = User::where('type', 'Customer')->count();

        //Overall sales
        $drop = Dropoff::count();
        $pick = Pickup::count();
        $orders = $drop + $pick;


        //Bounce Rates
        $lastDrop = Dropoff::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->count();
        $lastPick = Dropoff::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->count();
        $thisDrop = Dropoff::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
        $thisPick = Pickup::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();

        $lastMonth = $lastDrop + $lastPick;
        $thisMonth = $thisDrop + $thisPick;
        if ($lastMonth != 0 && $thisMonth != 0) {
            $bounceRate = (($lastMonth/$thisMonth) * 100)-100;
        } else {
            $bounceRate = 0;
        }

        //todays sales
        $dropOff = Dropoff::where('created_at', today())->count();
        $pickUp = Pickup::where('created_at', today())->count();
        $todayOrder = $dropOff = $pickUp;




        $data = [$user, $orders, $todayOrder, $bounceRate];
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
