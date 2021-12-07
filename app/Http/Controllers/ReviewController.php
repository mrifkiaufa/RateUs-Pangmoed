<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Menu;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showFeedbackForm(Request $request) {

        if(session()->has('LoggedUser')){
            $role = Auth::user()->role;

            if($role == 'pelanggan'){
                $menu = Menu::find($request->id);

                return view('feedback', compact('menu'));
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function storeReview(Request $request) {

        $request->validate([
            'rating' => ['required'],
            'ulasan' => ['required'],
        ]);

        Review::create([
            'menu_id' => $request->id,
            'email' => $request->email,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
        ]);

        Menu::where('id',$request->id)->first()->update([
            'rate_status' => false
        ]);

        return redirect('/review/'. $request->id);
    }

    public static function showReviewPage(Request $request){
        if(session()->has('LoggedUser')){
            $ulasan = Review::where('menu_id', $request->id)->get();
            $role = Auth::user()->role;
            $menu = Menu::where('id', $request->id)->first();
            $meanRate = self::meanRate($request->id);
            if(!$meanRate) {
                return view('warning', compact('role'));
            }
            $feedback = Review::where('aktif', 1)->where('menu_id', $request->id)->first();

            return view('review', compact('ulasan', 'meanRate', 'menu', 'feedback', 'role'));
        }
        else{
            return redirect('/');
        }
    }

    public static function meanRate($id_menu){
        $jumlahRate = 0;

        $data = Review::where('menu_id', $id_menu)->get();
        $jumlahReview = Review::where('menu_id', $id_menu)->count();

        if(!$jumlahReview){
            return 0;
        }

        foreach ($data as $menu) {
            global $jumlahRate;
            $jumlahRate += $menu->rating;
        }

        $hasil = $jumlahRate / $jumlahReview;

        return round($hasil,1);
    }
}
