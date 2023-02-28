<?php

namespace App\Http\Controllers;
use App\Dropoff;
use App\Pickup;
use Illuminate\Http\Request;
use App\User;
use App\Branches;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Auth::user()->type;
        $phone = Auth::user()->phone;
        $dropOff = '';
        $pickUP = '';
        $data = [];
        if($type != 'Customer'){
            $dropOff = Dropoff::all();
            $pickUP = Pickup::all();
        }else{
             $dropOff = Dropoff::where('phone', $phone)->orderBy('created_at', 'DESC')->get();
             $pickUP = Pickup::where('phone', $phone)->orderBy('created_at', 'DESC')->get();
        }
        // return $data = [
        //     'date' => $dropOff->date,
        //     'name' => $dropOff->name,
        //     'phone' => $dropOff->phone,
        //     'toname' => $dropOff->toname,
        //     'destinedAddress' => $dropOff->toaddress1.', '.$dropOff->toaddress2.', '.$dropOff->topostcode.' '.$dropOff->tocity.', '.$dropOff->toprovince.', '.$dropOff->tocountry,
        //     'status' => $dropOff->status,
        //     'picture' => $dropOff->picture,
        //     'vehicleId' => $dropOff->vehicleId,
        //     'driveId' => $dropOff->driverId
        // ];
        return view('receipt&Invoice', ['dropOff' => $dropOff, 'pickUp' => $pickUP]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return ['message' => 'success'];
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice($id)
    {
        $data = Dropoff::findOrFail($id);
         return View('invoice',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
