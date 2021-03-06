<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;

    public function page(){
        return $this->belongsTo(Pages::class, 'page_id', 'id');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Orders', 'stuff_order', 'stuff_id','order_id');
    }
}
