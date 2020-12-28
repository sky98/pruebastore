<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{

	protected $table = "categories";

    protected $fillable = [
    	'nit', 'name', 'description'
    ];
    
	/*
    *Get products related to this category (One to Many)
    */
    public function products(){
        return $this->hasMany('App\Models\products');
    }

}
