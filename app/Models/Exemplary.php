<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemplary extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
     
     public function books(){
        return $this->belongsTo('App\Models\Book');
    }
}
