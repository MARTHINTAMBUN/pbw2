<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.daftarPengguna');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username'                  =>['required', 'string', 'max:255', 'unique:users'],
            'fullname'                  =>['required', 'string', 'max:255'],
            'email'                     =>['email'],
            'password'                  =>['required', 'confirmed', Rules\Password::defaults()],
            'address'                   =>['required', 'string'],
            'birthdate'                 =>['required', 'date', 'before:today'],
            'phoneNumber'               =>['required']
        ],
        [
            'username.required'         => 'Username harus diisi',
            'username.unique'           => 'Username telah digunakan',
            'birthdate.before'          => 'Tanggal lahir harus sebelum hari ini'
        ]);

        $user = User::create([
            'username'  => $request->username,
            'fullname'  => $request->fullname,
            'email'  => $request->email,
            'password'  => Hash::make($request->password),
            'address'  => $request->address,
            'birthdate'  => $request->birthdate,
            'phonenumber'  => $request->phoneNumber,
        ]);
        return view('user.daftarPengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('user.infoPengguna');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
