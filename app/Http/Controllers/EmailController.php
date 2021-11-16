<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Email\PangmoedEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(Request $request){
        if(session()->has('LoggedUser')){
            $role = Auth::user()->role;

            if($role == 'admin'){
                $ulasan = Review::find($request->id)->first();
                $id = $request->id;
                return view('email', compact('id', 'ulasan', 'role'));
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function balasan(Request $request){
        if(session()->has('LoggedUser')){
            $role = Auth::user()->role;

            if($role == 'admin'){
                return view('balasan');
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function sendEmail(Request $request){
        $ulasan = Review::where('id', $request->id)->first();
        $role = Auth::user()->role;
        $data = [
            'role' => $role,
            'judul' => 'Balasan Feedback Pangmoed Cafe',
            'isi' => $ulasan->ulasan,
        ];
        //dd($ulasan->email);

        Mail::to('aufa.a@gmail.com')->send(new PangmoedEmail($data));

        return redirect('/');
    }
}
