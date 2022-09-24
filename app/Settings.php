<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
   protected $table="seteSetting";
   protected $fillable = [
         'sitename','yt','fb','tw','address','keywords', 'value',
    ];
}
