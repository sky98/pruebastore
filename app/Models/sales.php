<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{

    protected $table = "sales";

    protected $fillable = [
        'nit', 'employee_id', 'establisment_id'
    ];

    /*
    *Get establisment related to this sales (One to Many - Inverse)
    */
    public function establisment(){
        return $this->belongsTo('App\Models\establisments');
    }

    /*
    *Get employee related to this sales (One to Many - Inverse)
    */
    public function employee(){
        return $this->belongsTo('App\Models\employee');
    }

    /*
    *Get products related to this sales (Many to Many)
    */
    public function products(){
        return $this->belongToMany('App\Models\products');
    }
}
