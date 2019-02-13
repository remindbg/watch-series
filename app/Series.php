<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded = [];

    public function seasons() {
        return $this->hasMany('App\Season');
    }




    public function scopePopular() {
        return $this->with('seasons')->orderBy('views')->limit(10)->get();

    }

    public function scopeLatest() {
        return $this->with('seasons')->orderBy('created_at')->get();

    }
}
