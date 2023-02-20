<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_huisdier extends Model
{
    protected $table ="foto_huisdier";

    public function foto_huisdierHuisdier(){
        return $this->belongsTo('\App\Models\Huisdier',"huisdier_id","huisdier_id");
    }
}
