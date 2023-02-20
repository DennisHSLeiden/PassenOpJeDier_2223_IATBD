<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huisdier extends Model
{
    protected $table ="huisdier";

    public function huisdierUser(){
        return $this->belongsTo('\App\Models\User',"user_id","user_id");
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review',"huisdier_id","huisdier_id");
    }

    public function allAanvragen(){
        return $this->hasMany('\App\Models\Aanvraag',"huisdier_id","huisdier_id");
    }

    public function allFotosHuisdier(){
        return $this->hasMany('\App\Models\FotoHuisdier',"huisdier_id","huisdier_id");
    }
}
