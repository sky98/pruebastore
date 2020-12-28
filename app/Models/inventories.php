<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventories extends Model
{

    protected $table = "inventories";

    protected $fillable = [
        'stock', 'minimum_stock'
    ];
    
    /*
    *Get establisment related to the inventory (One to One)
    */
    public function establisment(){
        return $this->hasMany('App\Models\establisments');
    }

    /*
    *Get products related to the inventory (Many to Many)
    */
    public function products(){
        return $this->belongToMany('App\Models\products');
    }
}
