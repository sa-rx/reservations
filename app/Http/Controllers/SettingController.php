<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

  public function __construct()
  {
    //$this->middleware('roles');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $settings = Setting::orderby('id')->get();
      return view('setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('setting.create');
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
        'img_url'=>'required'

      ]);

        //$img=$request->file('img');
        //$img_name = time().'.'.$img->getClientOriginalExtension();
        //$img->move(public_path('web-img'),$img_name);

        $setting = new Setting();
        $setting->img_url = request('img_url');
        $setting->content = request('content');
        $setting->save();



      return redirect()->to('/setting/index')->with('message','تم اضافه ثيم');

      //  return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
      $request->validate([
        'img'=>'required'

      ]);


      //$img=$request->file('img');
      //$img_name = time().'.'.$img->getClientOriginalExtension();
      //$img->move(public_path('web-img'),$img_name);


      $setting->img_url = request('img_url');
      $setting->content = request('content');
      $setting->save();

      return redirect()->to('/settings')->with('message','تم تغير صورة الصفحه الرئسيه بنجاح');

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
