<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mudel;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function pakita(){
 		$students = DB::table('mudels')->get();

 		return view('show', compact('students'));
    }

    public function save(Request $request){
     
 		$full_name=$request->name;
 		$email_add=$request->email_add;
        $user_name=$request->username;
 		

 		$mudel = new mudel ;
 		$mudel->full_name = $full_name;
 		$mudel->email_add = $email_add;
 		$mudel->user_name = $user_name;
 		$mudel->save(); 	

 		return redirect('/list');
    } 

    public function delete($id){
    	DB::table('mudels')->where('id' , $id)->delete();

    	return redirect('/list');
    }

    public function edit($id){
    	$student = DB::table('mudels')->where('id' , $id)->get();

    	return view('update' , compact('student'));
    }

    public function update(Request $request){

    	DB::table('mudels')->where('id', $request->id)->update([
    		'full_name' => $request->full_name ,
    		'email_add' => $request->email_add ,
    		'user_name' => $request->user_name 
    		]);

    	return redirect('/list');
    }
}
