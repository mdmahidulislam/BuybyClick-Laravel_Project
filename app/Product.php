<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products';
    public $primaryKey = 'productId';
    //public $incrementing = false;
    public $timestamps = false;
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';

    public function category()
    {
    	return $this->belongsTo('App\Category', 'categoryId');
    }
}
