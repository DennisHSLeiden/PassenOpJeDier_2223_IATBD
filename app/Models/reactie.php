<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reactie extends Model
{
    protected $table ="reactie";

    public function reactieUser(){
        return $this->belongsTo('\App\Models\User',"user_id","user_id");
        //return $this->hasMany('\App\Models\naar welke refereer je',"foreignKey","waar hij naar refereert in andere tabel")
    }

    public function reactieAanvraag(){
        return $this->belongsTo('\App\Models\Aanvraag',"aanvraag_id","aanvraag_id");
    }
}
