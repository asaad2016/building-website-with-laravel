<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="message";
    protected $fillable = [
        'firstname', 'lastname', 'subject','bodymsg',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
