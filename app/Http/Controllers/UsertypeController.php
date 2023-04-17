<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertype;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
class UsertypeController extends Controller
{
    use SoftDeletes;

    public function index(Request $request)
    {
           $types = Usertype::orderBy('id','desc')->get();

            return view('Type.list',compact('types'));
    }

    public function create()
    {
        return view('Type.form');   
    }

    public function save(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'email' => 'required|email',
            'mobile_number' => 'required|string|min:10|max:12|',
        ]);
        
        $types = new Usertype();
        $types->first_name = $request->first_name;
        $types->last_name = $request->last_name;
        $types->email = $request->email;
        $types->mobile_number = $request->mobile_number;
        if($types->save()){
            return redirect()->route('types_index')->with('success', 'types Created successfully!');
        }
    }

    public function edit($id)
    {
        $types = Usertype::find($id);
        return view('Type.form',compact('types'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'email' => 'required|email',
            'mobile_number' => 'required|string|min:10|max:12|',
        ]);
        
        $types_id = $request->types_id;
        $types = Usertype::find($request->types_id);
        $types->first_name = $request->first_name;
        $types->last_name = $request->last_name;
        $types->email = $request->email;
        $types->mobile_number = $request->mobile_number;
        if($types->save()){
            return redirect()->route('types_index')->with('success', 'types Updated successfully!');
        }
    }

    public function delete($id)
    {
        if(Usertype::find($id)->delete()){
            return redirect()->route('types_index')->with('success', 'types Deleted successfully!');
        }

    }

}
