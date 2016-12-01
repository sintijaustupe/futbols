<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teams;

class Player extends Model
{
    public function team() {
        return $this->belongsTo('App\Teams');
    }
    
    protected $fillable = [
        'name','surname','teams_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}

