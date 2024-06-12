<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title', 'ISBN', 'editorial', 'pages'];
    public function exemparies(){
        return $this->hasMany('App\Models\Exemplary');
    }
}
