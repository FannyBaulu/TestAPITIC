<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;

    public function race(){
        return $this->belongsTo('App\Models\Race');
    }
    public function classe(){
        return $this->belongsTo('App\Models\Classe');
    }
    public function specialisation(){
        return $this->belongsTo('App\Models\Specialisation');
    }
}
