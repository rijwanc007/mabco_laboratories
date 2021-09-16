<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name',
      'image',
      'type'
    ];

    protected $table = 'categories';

    public function product(){
        return $this->hasMany('App\Product','category_id');
    }
}
