<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tool;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $services = Service::take(3)->orderBy('offer_price','DESC')->get();
      $tools = Tool::take(3)->orderBy('id','ASC')->get();
      $setting = Setting::find(23);
        return view('home',compact('services','setting','tools'));

    }
}
