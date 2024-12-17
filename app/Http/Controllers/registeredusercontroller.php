<?php

namespace App\Http\Controllers;

use App\Models\job_listing;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\Rules\Password;

class registeredusercontroller extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        //?validate
       $att = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)->numbers()->letters(), 'confirmed']
        ]);
        // dd($att);
        // ?create the user
       $user = User::create($att);
        FacadesAuth::login($user);
        //  dd($validated_attributes);
        return redirect('/jobs');
        //?login successful => authorized
    }
}
