<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;

class LeadingPageController extends Controller
{
    public function index() {
        if(session()->has('LoggedUser')){
            $role = Auth::user()->role;
            $menus = Menu::all();
            return view('home', compact('menus', 'role'));
        }
        else{
            return view('welcome');
        }
    }
}
