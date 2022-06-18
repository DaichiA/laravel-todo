<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from post');
        foreach ($items as $item) {
            $item->notification = $item->notification ? '有' : '無';
        }

        return view('home', ['items'=> $items,]);
    }



    public function edit(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from post where id = :id', $param);

            return view('edit', [
                'msg' => '値渡せるで',
                'form'=>$items[0]
            ]);
        }

        return view('edit', ['msg' => '値渡せるで']);
    }



    public function post(Request $request)
    {
        if ($request->has('register')) {
            $param = [
                'title'=>$request->title,
                'description'=>$request->description,
                'expire_at'=>$request->expire_at,
                'location'=>$request->location,
                'notification'=>$request->notification,
                // 'name' => $request->name,
                // 'mail'=>$request->mail,
                // 'age'=>$request->age,
            ];
    
            DB::insert('insert into post (title, description, expire_at, location, notification) values (:title, :description, :expire_at, :location, :notification)', $param);

        } elseif($request->has('delete')) {
            // todo viewにdeleteボタン作る
            $param = [
                'id'=>$request->id,
            ];
            DB::delete('delete from people where id = :id', $param);
        }
        return redirect('/');
        // return view('/');
    }
}
