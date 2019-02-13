<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons';
    protected $guarded =[];




    public function series() {
        return $this->belongsTo('App\Series');
    }

    public function episodes() {
        return $this->hasMany('App\Episode');
    }


}
