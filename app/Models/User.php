<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ="user";

    public function allFotosWoning(){
        return $this->hasMany('\App\Models\FotoWoning',"user_id","user_id");
        //return $this->hasMany('\App\Models\Foto',"foreignKey in woning","waar hij naar refereert in user")
    }

    public function allReacties(){
        return $this->hasMany('\App\Models\Reactie',"reactie_id","reactie_id");
    }

    public function allHuisdieren(){
        return $this->hasMany('\App\Models\Huisdier',"huisdier_id","huisdier_id");
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review',"review_id","review_id");
    }
}
