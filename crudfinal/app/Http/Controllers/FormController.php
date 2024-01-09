<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    
function form(){

return view('form');

}

function store_data(Request $request){


  $data = new Form();





  $data->name = $request->input('name');
  $data->estado = $request->input('estado');
  

  $data->save();
  //return back();
  return redirect('/show');


}

function show() {

    $data = Form::all();

    return view ('show',compact('data'));
    
}

function delete($id) {

    Form::destroy($id);

    return back();
}

function edit($id) {

     $data = Form::find($id);
     return view('edit_form', compact('data'));

   
}

function update_data(Request $request ,$id) {

    $data = Form::find($id);
   
    

  $data->name = $request->input('name');
  $data->estado = $request->input('estado');
  
  

  $data->save();
  return redirect('/show');


  
}



}
