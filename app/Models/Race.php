<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    
    public function personnage(){
        return $this->hasOne('App\Models\Personnage');
    }
}
