<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table ="review";

    public function reviewUser(){
        return $this->belongsTo('\App\Models\User',"user_id","user_id");
        //return $this->hasMany('\App\Models\naar welke refereer je',"foreignKey","waar hij naar refereert in andere tabel")
    }

    public function reviewHuisdier(){
        return $this->belongsTo('\App\Models\Huisdier',"huisdier_id","huisdier_id");
    }
}
