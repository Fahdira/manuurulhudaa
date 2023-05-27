<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Regency;
use App\Models\Village;
use App\Models\Alamat;
use App\Models\Users;

class AlamatController extends Controller
{
    public function getIndex()
    {
        $users = Users::where('email', session('users'))->first();
        $provinces = Province::all();

        return view('users.registration.second', compact('provinces','users'));
    }

    public function getKabupaten($id)
    {

        $kabupatens = Regency::where('province_code', $id)->get();
        $html = '';

        foreach($kabupatens as $kabupaten){
            $html.= '<option value="'.$kabupaten->code.'">'.$kabupaten->name.'</option>';
        }

        return response()->json($html);
    }

    public function getKecamatan($id)
    {

        $kecamatans = District::where('city_code', $id)->get();
        $html = '';

        foreach($kecamatans as $kecamatan){
            $html.= '<option value="'.$kecamatan->code.'">'.$kecamatan->name.'</option>';
        }

        return response()->json($html);
    }

    public function getDesa($id)
    {

        $desas = Village::where('district_code', $id)->get();
        $html = '';

        foreach($desas as $desa){
            $html.= '<option value="'.$desa->code.'">'.$desa->name.'</option>';
        }

        return response()->json($html);
    }

    public function postStore(Request $request)
    {
        $provinsi = Province::where('code',$request->get('provinsi'))->first();
        $kabupaten = Regency::where('code',$request->get('kabupaten_kota'))->first();
        $kecamatan = District::where('code',$request->get('kecamatan'))->first();
        $desa = Village::where('code',$request->get('desa'))->first();
        $input = new Alamat([

            'nama_jalan' => $request->get('nama_jalan'),
            'provinsi' => $provinsi->name,
            'kabupaten_kota' => $kabupaten->name,
            'kecamatan' => $kecamatan->name,
            'desa' => $desa->name,
            'kode_pos' => $request->get('kode_pos'),
            'id_siswa' =>$request->get('id_siswa'),

        ]);

        $input->save();

        return redirect()->route('wali.getIndex')->with('success','Data Berhasil Ditambahkan');
    }
}
