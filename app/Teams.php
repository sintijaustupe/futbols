<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Players;
use App\Results;

class Teams extends Model
{
    public function players() {
        return $this->hasMany('App\Players');
    }
    
    public function results() {
        return $this->hasMany('App\Results');
    }
    
    protected $fillable = [
        'name',
    ];

    
    protected $hidden = [
        //
    ];
}

