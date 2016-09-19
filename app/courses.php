<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "courses";
    protected $fillable = [
        'name', 'playlist_id','picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
