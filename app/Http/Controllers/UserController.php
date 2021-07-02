<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
       
        $email =$req->email;
        $password = $req->password;

        $user = User::where('email', $email)->first();
        
        if (!$user) {
           return response()->json(['success'=>false, 'message' => $email]);
        }
        
        if (!Hash::check($password, $user->password)) {
           return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }
       
         # return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
                     
         $req->session()->put('user',$user) ;
         return redirect('/');         
          
       
    }
}
