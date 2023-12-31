<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([

            'username' => ['required', 'string', 'max:255'],
            'fullname'=>['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255'],
            'password'=> ['required', 'confirmed', Rules\Password::defaults()],
            'jeniskelamin'=>['required','numeric'],
            'agama' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,     
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jeniskelamin'=>$request->jeniskelamin,
            'agama' => $request->agama,
            'address' => $request->address,   
            'birthdate' => $request->birthdate,
            'phonenumber' => $request->phonenumber,   
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
