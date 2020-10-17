<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;

    public function classes(){
        return $this->hasOne('App\Models\Classe');
    }
    public function specialisations(){
        return $this->hasOne('App\Models\Specialisation');
    }
}
