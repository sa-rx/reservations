<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

  public function __construct()
  {
    $this->middleware('roles')->except('show','create','store');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {

        $reservations = Reservation::orderby('id')->get();
        return view('reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::select('id','service_name')->get();
        return view('reservation.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
          'name'=>'required',
          'car_name'=>'required',
          'number'=>'required',
          'service_id'=>'required',
          'time'=>'required'

      ]);


        $reservation = new Reservation();
        $reservation->create($request->all());
        $reservation->user_id = Auth::id();
       return  redirect()->to('/')->with('message','تم الحجز');
        //return view('reservation.show',compact('reservation'))->with('message','تم الحجز');
      //  return  redirect()->route('reservations.show');
      //  return view('reservation.show',compact('reservation','service'))->with($reservation->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
          $services = Service::select('id','service_name')->get();
        return view('reservation.show',compact('reservation','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->to('/reservations')->with('message','تم الحذف بنجاح');
    }
}
