<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    function registerform(){
        return view('users/signup');
    }
    function registerhandle(Request $request){
        //validation 
        $validator = \Validator::make($request->all(), [
            'firstName' => 'required|max:10|min:2',
            'lastName' => 'required|max:10|min:2',
            'email'=>'required|unique:users|email',
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
             'confirm_password'=>'required|same:password' 
        ]);
        
        if($validator->fails())
        {
             return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
         //
         $user=new User();
         $user->firstName=$request->firstName;
          
         $user->lastName=$request->lastName;
         $user->email=$request->email;
         $user->password=\Hash::make($request->password);
         $user->confirm_password=\Hash::make($request->confirm_password);

         $user->save();
         return view('home');
         
     }
    
     function loginform(){
        return view('users/login');
    }
}
