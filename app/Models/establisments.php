<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class establisments extends Model
{
    protected $table = "establisments";

    protected $fillable = [
    	'nit', 'name', 'department', 'city', 'address', 'telephone', 'state', 'inventories_id'
    ];


    /*
    *Get users related to the establishment (Many to Many)
    */
    public function users(){
    	return $this->belongToMany('App\User');
    }

    /*
    *Get products related to the establishment (Many to Many)
    */
    public function products(){
        return $this->belongToMany('App\Models\products');
    }

    /*
    *Get employees related to the establishment (One to Many)
    */
    public function employees(){
        return $this->hasMany('App\Models\employees');
    }

    /*
    *Get sales related to the establishment (One to Many)
    */
    public function sales(){
        return $this->hasMany('App\Models\sales');
    }

    /*
    *Get the inventory related to the establishment (One to One)
    */
    public function inventory(){
        return $this->hasMany('App\Models\inventories');
    }
}
