<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_product','description','image','price'
    ];

    protected $hidden = [

    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'id_product','id');
    }
}
