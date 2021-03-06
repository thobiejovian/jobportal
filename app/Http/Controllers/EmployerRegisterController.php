<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use Hash;

class EmployerRegisterController extends Controller
{
    public function register(){
      $user = User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);

      Company::create([
        'user_id'=>$user->id,
        'cname'=> request('cname'),
        'slug'=>str_slug(request('cname'))
      ]);

      return redirect()->to('login')->with('message', 'Please verify your email, we have sent the link to your Email');
    }
}
