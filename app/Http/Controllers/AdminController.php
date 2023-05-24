<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Users;
use App\Models\AyahSiswa;
use App\Models\IbuSiswa;
use App\Models\Pendaftaran;
use App\Models\Alamat;
use App\Models\Posts;
use App\Models\Prestasi;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getIndex()
    {
        if(session()->has('admin')){
            $data['users'] = Users::All();
            $data['siswa'] = Siswa::All();
            return view('admin.index', $data);
        }
            return view('admin.login');
    }

    public function getUserIndex()
    {
        if(session()->has('admin')){
            $data['users'] = Users::All();
            return view('admin.user.index', $data);
        }
            return view('admin.login');
    }

    public function getSiswaIndex()
    {
        if(session()->has('admin')){
            $data['siswa'] = Siswa::All();
            return view('admin.siswa.index', $data);
        }
            return view('admin.login');
    }

    public function getEditSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getLogin()
    {
        if(session()->has('admin')){
            session()->flush('email');
        }
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {

        $user = Admin::where('email','=',$request->email)->first();
        if($user && $request->password == $user->password){
            $request->session()->put('admin', $user['email']);
            return redirect()->route('admin.getIndex')->with('success', 'Berhasil Login');
          }else{
            return redirect()->route('admin.getLogin')->with('loginError', 'Username atau Password Salah');
          }
    }

    public function getLogout() {
        if (session()->has('email')){
            session()->flush('email');
            session()->regenerate();
        }
        return redirect()->route('admin.getLogin');
    }
}
