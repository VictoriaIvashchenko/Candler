<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class users extends Model
{
    public static function cut($text){
        $chars = array("'","\\","/","<",">",";",":","(",")","^","%","#"," ");
        $text = strip_tags($text);
        $text = str_replace($chars,"",$text);
        return $text;
    }

    public static function auth($login, $password){
        if(DB::selectOne("select id from users where login = ? and password = ?", [$login, $password])!=null) {
            setcookie('user', 'online', time() + 300, '/');
            setcookie('login', $login, time() + 300, '/');
        }
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Orders', 'user_order', 'user_id', 'order_id');
    }

}
