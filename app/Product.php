<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
    [
       'category_id',
       'name',
       'image',
       'ingredients',
       'instructions',
       'usage',
       'effect',
       'interaction',
       'indication',
       'precaution',
       'manufactured',
       'status',
       'type',
       'description',
    ];

    protected $table = 'products';

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
