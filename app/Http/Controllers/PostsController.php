<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function getIndex()
    {
        if(session()->has('admin')){
            $data['post'] = Posts::All();
            return view('admin.posts.index', $data);
        }
            return view('admin.login');
    }

    public function getCreate()
    {

        $admin['admin'] = Admin::where('email', session('admin'))->first();
        return view('admin.posts.create', $admin);

    }

    public function getEdit($id)
    {
        $posts = Posts::find($id);
        return view('admin.posts.edit', compact('posts'));

    }

    public function postStore(Request $request, Admin $admin)
    {
        $data = new Posts([

            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'admin_id' => $request->get('admin_id')
        ]);

        if ($image = $request->file('image')) {
            $destinationPath='global/img/';
            $profileImage = date('YmdHis').".".$image ->getClientOriginalExtension();
            $image ->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }

        $data->save();
        return redirect()->route('posts.getIndex')->with('success','Postingan telah ditambahkan');
    }

    public function postUpdate(Request $request, $id)
    {
        $posts=Posts::find($id);
        $posts->title = $request->input('title');
        $posts->description = $request->input('description');

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath='global/img/';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $posts->update($input);

        return redirect()->route('posts.getIndex')->with('success','Postingan telah diupdate');
    }

    public function destroy(Request $request, $id)
    {
        $posts=Posts::find($id);
        Storage::delete(['global/img/'. $posts->gambar]);
        $posts->delete();

        return redirect()->route('posts.getIndex')->with('success','Postingan Dihapus');

    }
}
