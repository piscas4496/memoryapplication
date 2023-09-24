<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
  public function store(Request $request){
    $users=$request->all();
    
    User::create([
        'name'=> $users['name'],
        'email'=> $users['email'],
        'password'=> Hash::make($users['password']),
    ]);
    
    return response()->json(['status'=>true,
                             'message'=>"Bien enregistrer"
]);
    
  } 
    //
}
