<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\User;
use Hash;

class LoginController extends Controller
{
    //
    public function loginuser(Request $request){
     $verification=$request->validate([
        'email'=>['required','email'],
        'password'=>['required'],
     ]);
     if(Auth::attempt($verification)){
      return view('Dashboard');
      // return response()->json(['status'=>true,
      // 'message'=>'Acces Autoriser'
    //]);
     }  
     return response()->json(['status'=>false,
                               'message'=>'Acces refuser'
    ]);    
    }
    public function start(){
      return view('LoginView');
  }
}
