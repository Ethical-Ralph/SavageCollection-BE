<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['user_id', 'title', 'image', 'type', 'text', 'points'];
    protected $guarded = [];
}
