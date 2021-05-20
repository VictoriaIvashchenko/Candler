<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public static function home(){
        return view("main");
    }

    public static function candlebase(){
        return view('catalog', ['data' => Models\Pages::all()]);
    }

    public static function item_1_1(){
        return view('parafin');
    }

    public static function order(){
        $id = DB::table('users')->where('login', $_COOKIE['login'])->value('id');
        $orders = Models\Orders::all();
        $stuff = DB::table('stuffs')->value('name');
        $num = 0;
        return view('orders', compact('id','orders', 'stuff','num'));
    }

    public static function authorisation_check(){
        $nick = Models\users::cut($_POST['nickname']);
        $password = Models\users::cut($_POST['password']);
        Models\users::auth($nick, $password);
        return redirect()->route('home')->with($_COOKIE);
    }

}
