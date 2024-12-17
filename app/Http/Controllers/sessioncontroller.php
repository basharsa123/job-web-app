<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class sessioncontroller extends Controller
{
    public function confirmation()
    {
        //?validate
        $att =  request()->validate([
            'email' => ['required' , 'email'],
            'password' => ['required']
        ]);
        //?attempt to login
       $attempt_login =  FacadesAuth::attempt($att);
        if(! $attempt_login )
        {
        throw ValidationException::withMessages(['email' => 'Sorry , these credentials doesn\'t match . ']);
        }
        //? regenentate the token
        request()->session()->regenerate();
        //?login
        return redirect('/jobs');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function destroy()
    {
        FacadesAuth::logout();
        return redirect('/home');
    }
}
