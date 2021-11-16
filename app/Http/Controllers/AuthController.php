<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Models\Review;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginPage(Request $request){
        $role = $request->role;

        if($role){
            return view('login', compact('role'));
        }

        return redirect('/');
    }

    public function login(Request $request){
        $role = $request->submit;

        if($role == 'admin') {
            $request->validate([
                'password' => ['required'],
            ]);

            $password = $request->password;
            $user = User::where('role','admin')->first();
            $hashPassword = $user->password;

            if(Hash::check($password, $hashPassword)){
                Auth::login($user);
                $request->session()->put('LoggedUser', $user->id);
                return redirect()->intended('/');
            }

            return back()->withErrors([
                'password' => 'Password anda salah!',
            ]);
        }
        else{
            $request->validate([
                'token' => ['required'],
            ]);

            $token = $request->token;

            $status = User::where('password', $token)->first();

            if(!$status){
                return redirect('/');
            }

            Auth::login($status);
            $request->session()->put('LoggedUser', $status->id);
            return redirect()->intended('/');
        }
    }

    public function logout(){
        Menu::query()->update(['rate_status' => 1]);
        Review::query()->update(['aktif' => 0]);

        if(Auth::user()->role == 'pelanggan') {
            User::destroy(Auth::user()->id);
        }
        Auth::logout();

        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
