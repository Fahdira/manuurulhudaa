<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Admin;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
}
