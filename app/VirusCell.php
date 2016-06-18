<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirusCell extends Model
{
    public function match()
    {
        return $this->belongsTo('App\VirusMatch');
    }
}
