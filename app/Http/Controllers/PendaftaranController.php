<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{

    public function getIndex()
    {
        if(session()->has('admin')){
            $data['pendaftaran'] = Pendaftaran::All();
            return view('admin.pendaftaran.index', $data);
        }
            return view('admin.login');
    }

    public function getCreate()
    {
        $admin['admin'] = Admin::where('email', session('admin'))->first();
        return view('admin.pendaftaran.create', $admin);
    }

    public function postStore(Request $request)
    {
        $data = new Pendaftaran([

            'tahun_pendaftaran' => $request->get('tahun_pendaftaran'),
            'status_pendaftaran' => $request->get('status_pendaftaran'),
            'desc_pendaftaran' => $request->get('desc_pendaftaran')
        ]);

        $data->save();
        return redirect()->route('pendaftaran.getIndex')->with('success','Pendaftaran telah di post');
    }

    public function getEdit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('admin.pendaftaran.edit', compact('pendaftaran'));

    }

    public function postUpdate(Request $request, $id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $pendaftaran->tahun_pendaftaran = $request->input('tahun_pendaftaran');
        $pendaftaran->status_pendaftaran = $request->input('status_pendaftaran');
        $pendaftaran->desc_pendaftaran = $request->input('desc_pendaftaran');

        $input = $request->all();

        $pendaftaran->update($input);

        return redirect()->route('pendaftaran.getIndex')->with('success','Postingan telah diupdate');
    }

    public function postChange(Request $request, $id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $pendaftaran->status_pendaftaran = $request->input('status_pendaftaran', 'ditutup');

        $input = $request->all();

        $pendaftaran->update($input);

        return redirect()->route('pendaftaran.getIndex')->with('success','Postingan telah diupdate');

    }

    public function destroy(Request $request, $id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.getIndex')->with('success','Postingan Dihapus');

    }

}
