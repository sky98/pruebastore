<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";

    protected $fillable = [
    	'nit', 'name', 'description', 'cost', 'value', 'state', 'category_id'
    ];

    /*
    *Get establisments related to this product (Many to Many)
    */
    public function establisments(){
        return $this->belongToMany('App\Models\establisments');
    }

    /*
    *Get sales related to this product (Many to Many)
    */
    public function sales(){
        return $this->belongToMany('App\Models\sales');
    }

    /*
    *Get inventories related to this product (Many to Many)
    */
    public function inventories(){
        return $this->belongToMany('App\Models\inventories');
    }

    /*
    *Get category related to this product (One to Many)
    */
    public function category(){
        return $this->belongToMany('App\Models\categories');
    }
}
