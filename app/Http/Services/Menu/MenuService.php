<?php

namespace App\Http\Services\Menu;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class MenuService
{
     public function create($request)
     {
        try{
             User::create([
                 'name' => (string) $request->input('name'),
                 'email' => (string) $request->input('email'),
                 'password' => bcrypt((string) $request->input('password')),
                 'level' => (int) $request->input('level'),

             ]);
             Session::flash('success', 'Tạo User Thành Công ');
        }catch(\Exception $err){
             Session::flash('error', 'Email Đã Được Sử Dụng');
        }
        return true;
     }
}
