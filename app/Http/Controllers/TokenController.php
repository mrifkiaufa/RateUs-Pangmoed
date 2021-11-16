<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function index() {
        if(session()->has('LoggedUser')){
            $role = Auth::user()->role;

            if($role == 'admin'){
                $users = User::get();
                return view('token', compact('users', 'role'));
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function generate(){
        $str=substr(md5(rand()), 0, 5);

        User::create([
            'password' => $str,
            'role' => 'pelanggan',
        ]);

        return redirect('/token');
    }
}
