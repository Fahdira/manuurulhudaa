<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getIndex()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {

        $user = Admin::where('email','=',$request->email)->first();
        if($user && $request->password == $user->password){
            return redirect()->route('admin.getIndex')->with('success', 'Berhasil Login');
          }else{
            return redirect()->route('admin.getLogin')->with('loginError', 'Username atau Password Salah');
          }
         // return "Success";
    }
}
