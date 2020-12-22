<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title','dev','release','price','rating','genre_id'];

    public function genre() {
        return $this->belongsTo('App\Genre');
    }
}
