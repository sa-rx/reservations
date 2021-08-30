<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\Tool;


class PageController extends Controller
{

  public function __construct()
  {

  }

    public function index(){
      $services = Service::take(3)->orderBy('offer_price','DESC')->get();
      $tools = Tool::take(3)->orderBy('id','ASC')->get();
      $setting = Setting::find(23);
      return view('index', compact('services','setting','tools'));
    }



    public function admin(){
      $users = User::take(3)->orderBy('id','DESC')->get();
      $services = Service::take(3)->orderBy('id','DESC')->get();
      $reservations = Reservation::take(3)->orderBy('id','DESC')->get();

      return view('admin/admin',compact('users','services','reservations'));
    }



    public function addRole(Request $request){

      $user = User::where('id', $request['id'])->first();
      $user->roles()->detach();

      if($request['role_user']){
        $user->roles()->attach('2');
      }

      if($request['role_admin']){
        $user->roles()->attach('1');
      }

      if($request['role_editor']){
        $user->roles()->attach('3');
      }

      return redirect()->back();

    }



    public function editor(){
      return view('editor');
    }

    public function user(){
      $users = User::get();
      return view('admin/user',compact('users'));
    }


}
