<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Attendancedb;

class postRegisterController extends Controller
{

    public function index()
    {
        $items = DB::select('select * from Users');
        return view('register', ['$items' => $items]);
    }
    public function add()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'remember_token' => $request->remember_token,
        ];
        DB::table('Users')->insert($param);
        return redirect('/register');
    }
}
