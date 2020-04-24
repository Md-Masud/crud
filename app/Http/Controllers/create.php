<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use Session;
use Illuminate\Support\Facades\Auth;

class create extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }

	 public function add()
    {

    	return view('addpost');
    }
    public function addpost ()
    {

      return view('teacher');
    }
    public function testore(Request $request)
      {
        $validatedData = $request->validate([
        'name' => 'required|unique:students|max:255',
        'department' => 'required',
         'phone' => 'required',
          'description' => 'required',
    ]);
       $students= new students;
       $students->name = $request->name;
       $students->user_id=Auth::id();
       $students->department= $request->department;
       $students->phone = $request->phone;
       $students->description = $request->description;
       $students->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }
	 public function index()
    {
     
       $students=Auth::user()->students()->latest()->get();

       return view('index',compact('students'));

    }
    public function store(Request $request)
      {
        $validatedData = $request->validate([
        'name' => 'required|unique:students|max:255',
        'department' => 'required',
         'phone' => 'required',
          'description' => 'required',
    ]);
       $students= new students;
       $students->name = $request->name;
       $students->user_id=Auth::id();
       $students->department= $request->department;
       $students->phone = $request->phone;
       $students->description = $request->description;
       $students->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }

    public function view($id)
     {

     $students=students::findorfail($id);

      return view ('view',compact('students'));
     }
    public function delete($id)
      {
      $students=students::findorfail($id);
      $students->delete();
        Session::flash('Success','delete  Successfull');
       return redirect()->back();
       }
       public function edit($id)
    {
       $students=students::findorfail($id);

       return view ('update',compact('students'));
    }
     public function update (Request $request,$id )
      {
       
        $students=students::findorfail($id);
       $students->name = $request->name;
       $students->user_id = Auth::id();
       $students->department= $request->department;
       $students->phone = $request->phone;
       $students->description = $request->description;
       $students->save();
       Session::flash('Success','update Successfull ');
       return redirect()->Route('index');
     }
    
}
