<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function hienThiTatCaNguoiDung()
    {
        $users = DB::table('users')->get();
        return view('users', ['nguoi_dung' => $users]);
    }

    public function hienThiMotNguoiDung($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();
        return $user;
    }
}