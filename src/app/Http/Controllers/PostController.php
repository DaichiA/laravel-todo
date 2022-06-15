<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');

        return view('home', [
            'value'=>'コントローラーからテキスト渡し',
            'items'=> $items,
        ]);
    }

    public function edit()
    {
        return view('edit', ['msg' => '値渡せるで']);
    }

    public function post(Request $request)
    {
        return view('post', [
            'title'=>$request->title,
            'desc'=>$request->desc,
            'data'=>$request->date,
            'notification'=>$request->notification,
            'location'=>$request->location,
        ]);
    }
}
