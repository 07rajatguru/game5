<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate
        ([
            'name' => 'required',
            'roll' => 'required',
            'password' => 'required',
        ]);
        $data=new Product();
        $data->name=$request->name;
        $data->roll=$request->roll;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with('message','Data SuccessFully Inserted');
    }
    public function table()
    {
        $data=Product::all();
        return view('table',compact('data'));
    }
    public function edit($id)
    {
        $data=Product::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data=Product::find($id);
        $data->name=$request->name;
        $data->roll=$request->roll;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with('message','Data SuccessFully Updated');
    }
    public function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->route('table');
    }
}
