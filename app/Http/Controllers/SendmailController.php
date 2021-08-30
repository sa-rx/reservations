<?php

namespace App\Http\Controllers;

use App\Models\Sendmail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;




class SendmailController extends Controller
{

  public function __construct()
  {
    $this->middleware('roles');
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sendmails =  Sendmail::orderby('id')->get();
      return view('sendmail.index',compact('sendmails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('sendmail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //       $sendmail = new Sendmail(request()->all());
        //   $sendmail->save();
        $title = $request->input('title');
        $content = $request->input('content');
        

           $user = User ::select('email')->get();
           Mail::to($user)->send(new WelcomeMail($title , $content));

             return redirect()->to('/sendmails')->with('message','تم ارسال الايميلات بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senmail  $senmail
     * @return \Illuminate\Http\Response
     */
    public function show(Sendmail $sendmail)
    {
          return view('sendmail.show',compact('sendmail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senmail  $senmail
     * @return \Illuminate\Http\Response
     */
    public function edit(Sendmail $sendmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Senmail  $senmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sendmail $sendmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senmail  $senmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sendmail $sendmail)
    {
      $sendmail->delete();
      return redirect()->to('/sendmails')->with('message','تم الحذف بنجاح');
    }
}
