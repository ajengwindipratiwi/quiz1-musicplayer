<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    protected $table = 'played';
    protected $fillable = ['play_id_track'];
}
