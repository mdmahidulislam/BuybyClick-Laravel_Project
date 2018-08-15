<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $primaryKey = 'categoryId';
    public $timestamps = false;

    public function products()
    {
    	return $this->hasMany('App\Product', 'categoryId');
    }
}
