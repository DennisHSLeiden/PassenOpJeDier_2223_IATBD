<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aanvraag extends Model
{
    protected $table ="aanvraag";

    public function aanvraagHuisdier(){
        return $this->belongsTo('\App\Models\Huisdier',"huisdier_id","huisdier_id");
    }

    public function allReacties(){
        return $this->hasMany('\App\Models\Reactie',"huisdier_id","huisdier_id");
    }
}
