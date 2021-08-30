<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Tool;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
      $this->middleware('roles')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = Service::orderby('id')->get();
      return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tools = Tool::pluck('title','id');
        return view('services.create',compact('tools'));
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
        'service_name'=>'required',
        'price'=>'required',
        'conten'=>'required',
        'url'=>'required'
      ]);

      $url=$request->file('url');
      $img_name = time().'.'.$url->getClientOriginalExtension();
      $url->move(public_path('uplaod'),$img_name);

      $service = new Service();
      $service->url = $img_name;
      $service->service_name = request('service_name');
      $service->price = request('price');
      $service->offer_price = request('offer_price');
      $service->conten = request('conten');

      $service->save();

      $service->tools()->attach($request->tools);

      return redirect()->to('/services')->with('message','تم اضافة خدمه جديده');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $tools = Tool::select('title')->get();
        $tools = $service->tools()->pluck('title','tool_id')->toArray();
        return view('services.show',compact('service','tools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $tools = Tool::pluck('title','id');
        $serviceTool = $service->tools()->pluck('tool_id')->toArray();
        return view('services.edit',compact('service', 'tools','serviceTool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {


      $request->validate([
        'service_name'=>'required',
        'price'=>'required',
        'conten'=>'required',
        'url'=>'required'
      ]);


      $url=$request->file('url');
      $img_name = time().'.'.$url->getClientOriginalExtension();
      $url->move(public_path('uplaod'),$img_name);


      $service->url = $img_name;
      $service->service_name = request('service_name');
      $service->price = request('price');
      $service->offer_price = request('offer_price');
      $service->conten = request('conten');
      $service->tools()->sync($request->tools);

      $service->save();

        return redirect()->to('/services')->with('message','تم تعديل الخدمه بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
          return redirect()->to('/services')->with('message','تم حذف الخدمه بنجاح');
    }
}
