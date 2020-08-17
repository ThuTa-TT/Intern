<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	return view('register');
    }


   	public function submit(Request $request){
   		 $input=$request->all();
   		 // return $input;
   		 $str= "Please Fill";
   		  	
   		foreach ($input as $key => $value) {
   			if($value==null){
   				$str.=$key.",";
   			}
   		}
   		return rtrim($str,',').".";   		

  	}
}
