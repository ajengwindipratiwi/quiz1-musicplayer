<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $fillable = ['album_name', 'album_id_artist'];
}
