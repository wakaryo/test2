<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class postLoginController extends Controller
{
    //@param vchar
    public function index()
    {
        $items = user::all();
        $items = DB::select('select * from users');
        return view('login', ['$items' => $items]);
    }
    public function show(Request $request)
    {


        $param = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        DB::table('users')->find($param);
        return view('/index');
    }

    public function edit(user $article)
    {
        // ddd()入れて引数に渡されたArticleクラスのオブジェクトを中身を見る
        dd($article);
        return view('users.edit', compact('user'));
    }
}
