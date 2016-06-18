<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirusMatch extends Model
{
    public function cells()
    {
        return $this->hasMany('App\VirusCell');
    }

    public function player1()
    {
        return $this->hasOne('App\User','player1_id');
    }

    public function player2()
    {
        return $this->hasOne('App\User','player2_id');
    }
}
