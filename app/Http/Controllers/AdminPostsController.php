<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class AdminPostsController extends Controller
{
    public function index()
    {
        //練習 3-1：使用 Model 查詢資料
        $posts=Post::orderBy('created_at','DESC')->get();
        $data=['posts'=>$posts];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $data = ['id' => $id];

        return view('admin.posts.edit', $data);
    }
    //練習 4-4：設定 AdminPostsController對應的 function
    public function store(Request $request)
    {
        //練習5：新增資料
        Post::create($request->all());
    }

}
