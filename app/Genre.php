<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['tag'];

    public function games() {
        return $this->hasMany('App\Game');
    }
}
