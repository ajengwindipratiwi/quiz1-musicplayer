<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'track';
    protected $fillable = ['track_name', 'track_id_album' , 'track_time', 'track_file'];
}
