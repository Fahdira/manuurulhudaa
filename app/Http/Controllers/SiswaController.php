<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Users;
use App\Models\Pendaftaran;
use App\Http\Controllers\DependentDropdownController;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getIndex()
    {

        $users['users'] = Users::where('email', session('users'))->first();
        return view('users.registration.first', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function postStore(Request $request)
    {
        $pendaftaran = Pendaftaran::where('status_pendaftaran', 'dibuka')->first();
        $input = new Siswa([

            'nama_siswa' => $request->get('nama_siswa'),
            'NIK' => $request->get('NIK'),
            'NISN' => $request->get('NISN'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'agama' => $request->get('agama'),
            'kelamin' => $request->get('kelamin'),
            'kewarganegaraan' => $request->get('kewarganegaraan'),
            'anak_ke' => $request->get('anak_ke'),
            'dari_bersaudara' => $request->get('dari_bersaudara'),
            'keb_khusus' => $request->get('keb_khusus'),
            'keb_disabilitas' => $request->get('keb_disabilitas'),
            'user_id' =>$request->get('user_id'),
            'tahun_pendaftaran' =>$pendaftaran->tahun_pendaftaran,
        ]);

        if ($kartu_keluarga = $request->file('kartu_keluarga')) {
            $destinationPath = 'global/img/datasiswa';
            $profileImage = date('YmdHis') . "kartu_keluarga" . "." . $kartu_keluarga->getClientOriginalExtension();
            $kartu_keluarga->move($destinationPath, $profileImage);
            $input['kartu_keluarga'] = "$profileImage";
        }

        if ($akta_kelahiran = $request->file('akta_kelahiran')) {
            $destinationPath = 'global/img/datasiswa';
            $profileImage = date('YmdHis') . "akta_kelahiran" . "." . $akta_kelahiran->getClientOriginalExtension();
            $akta_kelahiran->move($destinationPath, $profileImage);
            $input['akta_kelahiran'] = "$profileImage";
        }

        if ($pas_foto = $request->file('pas_foto')) {
            $destinationPath = 'global/img/datasiswa';
            $profileImage = date('YmdHis') . "pas_foto" . "." . $pas_foto->getClientOriginalExtension();
            $pas_foto->move($destinationPath, $profileImage);
            $input['pas_foto'] = "$profileImage";
        }

        $input->save();

        return redirect()->route('alamat.getIndex')->with('success', 'Data Ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
