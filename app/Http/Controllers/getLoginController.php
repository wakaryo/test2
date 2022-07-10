<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class getLoginController extends Controller
{
    public function index()
    {
        return "";
    }
    public function show()
    {
        //$post = user::find();
        //return view('posts.show')->with('post', $post);
        $items = user::all();
        $items = DB::select('select * from users');
        return view('login', ['$items' => $items]);
    }
}
