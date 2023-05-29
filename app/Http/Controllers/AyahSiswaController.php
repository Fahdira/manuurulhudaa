<?php

namespace App\Http\Controllers;

use App\Models\AyahSiswa;
use App\Models\IbuSiswa;
use Illuminate\Http\Request;
use App\Models\Users;

class AyahSiswaController extends Controller
{
    public function getIndex()
    {
        $users = Users::where('email', session('users'))->first();
        return view('users.registration.third', compact('users'));
    }

    public function postStore(Request $request)
    {
        $input = new AyahSiswa([

            'nama_ayah' => $request->get('nama_ayah'),
            'NIK' => $request->get('NIK'),
            'no_telepon' => $request->get('no_telepon'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'agama' => $request->get('agama'),
            'status' => $request->get('status'),
            'kewarganegaraan' => $request->get('kewarganegaraan'),
            'riwayat_pendidikan' => $request->get('riwayat_pendidikan'),
            'pekerjaan' => $request->get('pekerjaan'),
            'rata_penghasilan' => $request->get('rata_penghasilan'),
            'id_siswa' => $request->get('id_siswa'),

        ]);

        if ($KTP = $request->file('KTP')) {
            $destinationPath = 'global/img/datasiswa';
            $profileImage = date('YmdHis') . "KTP" . "." . $KTP->getClientOriginalExtension();
            $KTP->move($destinationPath, $profileImage);
            $input['KTP'] = "$profileImage";
        }

        $input->save();

        $data = new IbuSiswa([

            'nama_ibu' => $request->get('nama_ibu'),
            'NIK_ibu' => $request->get('NIK_ibu'),
            'no_telepon_ibu' => $request->get('no_telepon_ibu'),
            'tempat_lahir_ibu' => $request->get('tempat_lahir_ibu'),
            'tanggal_lahir_ibu' => $request->get('tanggal_lahir_ibu'),
            'agama_ibu' => $request->get('agama_ibu'),
            'status_ibu' => $request->get('status_ibu'),
            'kewarganegaraan_ibu' => $request->get('kewarganegaraan_ibu'),
            'riwayat_pendidikan_ibu' => $request->get('riwayat_pendidikan_ibu'),
            'pekerjaan_ibu' => $request->get('pekerjaan_ibu'),
            'rata_penghasilan_ibu' => $request->get('rata_penghasilan_ibu'),
            'id_siswa' => $request->get('id_siswa'),

        ]);

        if ($KTP_ibu = $request->file('KTP_ibu')) {
            $destinationPath = 'global/img/datasiswa';
            $profileImage = date('YmdHis') . "KTP_ibu" . "." . $KTP_ibu->getClientOriginalExtension();
            $KTP_ibu->move($destinationPath, $profileImage);
            $data['KTP_ibu'] = "$profileImage";
        }

        $data->save();

        return redirect()->route('prestasi.getIndex')->with('success', 'Data Ditambahkan');
    }
}
