<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_woning extends Model
{
    protected $table ="foto_woning";

    public function foto_woningUser(){
        return $this->belongsTo('\App\Models\user',"user_id","user_id");
    }
}
