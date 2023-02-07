<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use DB;

class EmpController extends Controller
{

    public function viewImage(){

    	$emp_data=DB::select('select * from emp_history');

    	return view('welcome',compact('emp_data'));
    }

    public function imguploadpost(Request $request){
    	if($request->ajax()){
    		$data = $request->file('file');
           $extension = $data->getClientOriginalExtension();
           $filename = 'usermina'.'_profilepic'.'.'.$extension; // renameing image
           $path =public_path('foodimage/');


           $usersImage = public_path("foodimage/{$filename}"); // get previous image from folder

if (File::exists($usersImage)) { // unlink or remove previous image from folder
               unlink($usersImage);

               DB::table('emp_history')->where('emp_id','199')->update(['emp_img' =>$filename]);
           }else{
//                dd('File is not exists.');
               $pp='nofileexist';

               DB::table('emp_history')->insert(['emp_id' => '199', 'emp_img' => $filename]);
           }

           $upload_success = $data->move($path, $filename);

           return response()->json([
               'success' => 'done',
               'valueimg'=>$data
           ]);

    	}
    }

}
