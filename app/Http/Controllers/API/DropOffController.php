<?php

namespace App\Http\Controllers\API;

use App\Dropoff;
use App\User;
use App\Branches;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DropOffController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = '';
        $user = auth('api')->user();
        $phone = $user->phone;
        if ($user->type != 'Customer') {
            $data = Dropoff::latest()->paginate(10);
        } else {
            $data = Dropoff::where('phone', $phone)->orderByRaw('created_at', 'DESC')->paginate(10);
        }
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function branches()
    {
        //staff
        $user = auth('api')->user();
        return Branches::all();
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function count()
    {
        //staff
        $user = auth('api')->user();
        return Dropoff::where('phone', $user->phone)->count();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'phone' => 'required|string|max:15|min:10',
            'country' => 'required|string|max:191',
            'branch' => 'required|string|max:191',
            'toCountry' => 'required|string|max:191',
            'toProvince' => 'required|string|max:191',
            'toName' => 'required|string|max:191',
            'toPhone' => 'required|string|max:15|min:10',
            'toAddress1' => 'required|string|max:191',
            'toAddress2' => 'required|string|max:191',
            'toPostcode' => 'required|string|max:191',
            'toCity' => 'required|string|max:191',
        ]);

        return Dropoff::create([
            'date' => $request['date'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'country' => $request['country'],
            'branch' => $request['branch'],
            'tocountry' => $request['toCountry'],
            'toprovince' => $request['toProvince'],
            'toname' => $request['toName'],
            'tophone' => $request['toPhone'],
            'toaddress1' => $request['toAddress1'],
            'toaddress2' => $request['toAddress2'],
            'topostcode' => $request['toPostcode'],
            'tocity' => $request['toCity']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($phone)
    {
        return $data =  Dropoff::where('phone', $phone)->orderBy('created_at', 'DESC')->first();
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
