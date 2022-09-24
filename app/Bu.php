<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
   protected $table="buildings";
   protected $fillable = [
         'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_dis', 'bu_meta', 'bu_langtuide', 'bu_lattuie', 'bu_largedis', 'bu_status','userid','rooms','image',
    ];
     public function User()
    {
         return $this->hasMany('App\User');
    }

}
