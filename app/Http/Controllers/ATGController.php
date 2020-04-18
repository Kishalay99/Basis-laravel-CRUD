<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ATG_User;
use DB;

class ATGController extends Controller
{
    public function registrationForm(){
        return view('registrationForm');
    }

    public function store(Request $request){
        $user = new ATG_User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->pincode = $request->input('pincode');
        if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            // $emailErr = "Invalid email format";
            return redirect('/register')->with("message","Email validation failed");
        }
        if(strlen($user->pincode) != 6){
            return redirect('/register')->with("message","Pincode validation failed");
        }
        $all_users = ATG_User::all();
        for($i=0;$i<count($all_users);$i++){
            if($all_users[$i]->name==$user->name &&
                $all_users[$i]->email == $user->email &&
                $all_users[$i]->pincode == $user->pincode){
                    return redirect('/register')->with("message","User already exists");
            }
        }
        $user->save();

        return redirect('/register')->with("message","User added successfully!");
    }
}
