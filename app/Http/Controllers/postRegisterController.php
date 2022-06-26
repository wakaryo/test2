<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class postRegisterController extends Controller
{

    public function index()
    {
        $items = user::all();
        $items = DB::select('select * from users');
        return view('register', ['$items' => $items]);
    }
    public function edit(user $article)
    {
        // ddd()入れて引数に渡されたArticleクラスのオブジェクトを中身を見る
        ddd($article);
        return view('users.edit', compact('user'));
    }



    public function create(Request $request)
    {


        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'remember_token' => $request->remember_token,
        ];
        DB::table('users')->insert($param);
        return view('register');
    }
}
