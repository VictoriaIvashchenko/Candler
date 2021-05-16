<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorisation1 extends Model
{
    public static function cut($text){
        $chars = array("'","\\","/","<",">",";",":","(",")","^","%","#"," ");
        $text = strip_tags($text);
        $text = str_replace($chars,"",$text);
        return $text;
    }

    public static function auth($login, $password){
        if($login =='Hana123' && $password == 987) {
            setcookie('user', 'online', time() + 130, '/');
            setcookie('name', $login, time() + 130, '/');
        }
    }


}
