<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getIndex()
    {
        if(session()->has('users')){
            return view('users.index');
        }
            return view('users.login');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function getCreate()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function postStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $input = $request->all();

        Users::create($input);

        return redirect()->route('users.getLogin')->with('success', 'Berhasil Daftar Akun');
    }

    /**
     * Display the specified resource.
     */
    public function getLogin()
    {
        if(session()->has('users')){
            session()->flush('email');
        }
        return view('users.login');
    }

    public function postLogin(Request $request)
    {

        $user = Users::where('email','=',$request->email)->first();
        if($user && $request->password == $user->password){
            $request->session()->put('users', $user['email']);
            return redirect()->route('users.getIndex')->with('success', 'Berhasil Login');
          }else{
            return redirect()->route('users.getLogin')->with('loginError', 'Username atau Password Salah');
          }
    }

    public function getLogout() {
        if (session()->has('users')){
            session()->flush('email');
            session()->regenerate();
        }
        return redirect()->route('users.getLogin');
    }
}
