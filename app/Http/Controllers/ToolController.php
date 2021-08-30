<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{

  public function __construct()
  {
    $this->middleware('roles')->except('show');
  }

    public function index()
    {
        $tools =  Tool::orderby('id')->get();
        return view('tool.index',compact('tools'));
    }


    public function create()
    {
        return view('tool.create');
    }


    public function store(Request $request)
    {

      $request->validate([
        'img'=>'required',
        'title'=>'required',
        'content'=>'required'

      ]);

        $img=$request->file('img');
        $img_name = time().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('tool-img'),$img_name);
        $tool = new Tool();
        $tool->img = $img_name;
        $tool->title = request('title');
        $tool->content = request('content');
        $tool->save();

      return redirect()->to('/tools')->with('message','تم اضافه اداه جديده');

    }



    public function show(Tool $tool)
    {
        return view('tool.show',compact('tool'));
    }



    public function edit(Tool $tool)
    {
        return view('tool.edit',compact('tool'));
    }




    public function update(Request $request, Tool $tool)
    {
      $request->validate([
        'img'=>'required',
        'title'=>'required',
        'content'=>'required'

      ]);

        $img=$request->file('img');
        $img_name = time().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('tool-img'),$img_name);

        $tool->img = $img_name;
        $tool->title = request('title');
        $tool->content = request('content');
        $tool->save();

        return redirect()->to('/tools')->with('message','تم تعديل اداه');

    }




    public function destroy(Tool $tool)
    {
        $tool->delete();
          return redirect()->to('/tools')->with('message','تم حذف اداه');

    }
}
