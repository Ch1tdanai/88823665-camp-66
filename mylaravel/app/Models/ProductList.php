<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    //
    public $timestamps = false;
    protected $table = 'product_list';
    protected $fillable = [
        'id','category_id','user_id','name',
    ];
}
