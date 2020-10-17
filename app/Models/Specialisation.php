<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    use HasFactory;

    public function personnages(){
        return $this->belongsTo('App\Models\Specialisation');
    }
}
