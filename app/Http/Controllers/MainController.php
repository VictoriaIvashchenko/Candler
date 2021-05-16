<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class MainController extends Controller
{
    public static function home(){
        return view("main");
    }

    public static function candlebase(){
        return view('catalog');
    }

    public static function item_1_1(){
        return view('parafin');
    }

    public static function order(){
        return view('orders');
    }

    public static function authorisation_check(){
        $nick = Models\Authorisation1::cut($_POST['nickname']);
        $password = Models\Authorisation1::cut($_POST['password']);
        Models\Authorisation1::auth($nick, $password);
        return redirect()->route('home')->with($_COOKIE);
    }
}
