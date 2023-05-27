<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Users;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function getIndex(){

        if(session()->has('users')){
            $users = Users::where('email', session('users'))->first();
            //$users = Auth::user();
            $siswa = Siswa::where('user_id', $users->id)->get();
            return view('users.index', compact('users','siswa'));
        }
            return view('users.login');
    }

    public function getDaftar(){

        if(session()->has('users')){

            $data['pendaftaran'] = Pendaftaran::All()->first();
            return view('users.daftar', $data);
        }
            return view('users.login');
    }

    public function getCreate(){

        return view('users.register');
    }

    public function postStore(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $input = $request->all();

        Users::create($input);

        return redirect()->route('users.getLogin')->with('success', 'Berhasil Daftar Akun');
    }

    public function getLogin(){

        if(session()->has('users')){
            session()->flush('email');
        }
        return view('users.login');
    }

    public function postLogin(Request $request){

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
