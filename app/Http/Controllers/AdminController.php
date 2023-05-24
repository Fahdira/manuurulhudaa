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
use Illuminate\Support\Facades\Auth;

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

    public function getPendaftaranIndex()
    {
        if(session()->has('admin')){
            $data['pendaftaran'] = Pendaftaran::All();
            return view('admin.pendaftaran.index', $data);
        }
            return view('admin.login');
    }

    public function getPostsIndex()
    {
        if(session()->has('admin')){
            $data['post'] = Posts::All();
            return view('admin.posts.index', $data);
        }
            return view('admin.login');
    }

    public function getProfile()
    {

        $admin['admin'] = Admin::where('email', session('admin'))->first();
        return view('admin.profile', $admin);

    }

    public function getAdd()
    {
        $admin['admin'] = Admin::where('email', session('admin'))->first();
        return view('admin.add', $admin);
    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'no_telepon' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
            'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $input = $request->all();

        if ($profile_picture = $request->file('profile_picture')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $profile_picture->getClientOriginalExtension();
            $profile_picture->move($destinationPath, $profileImage);
            $input['profile_picture'] = "$profileImage";
        }

        Admin::create($input);

        return redirect()->route('admin.getProfile')->with('success', 'Berhasil Daftarkan Akun');
    }

    public function getEditProfile()
    {

        $admin['admin'] = Admin::where('email', session('admin'))->first();
        return view('admin.edit_profile', $admin);

    }

    public function postUpdateProfile(Request $request)
    {


        $admin = Admin::where('email',session('admin'));
        $admin->email = $request->input('email');
        $admin->username = $request->input('username');
        $admin->no_telepon = $request->input('no_telepon');
        $admin->password = $request->input('password');
        $admin->jabatan = $request->input('jabatan');


        $input = $request->except(['_token']);

        if ($profile_picture = $request->file('profile_picture')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $profile_picture->getClientOriginalExtension();
            $profile_picture->move($destinationPath, $profileImage);
            $input['profile_picture'] = "$profileImage";
        }
        $admin->update($input);

        return redirect()->route('admin.getIndex')->with('success','Perubahan Tersimpan');
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
        if (session()->has('admin')){
            session()->flush('email');
            session()->regenerate();
        }
        return redirect()->route('admin.getLogin');
    }
}