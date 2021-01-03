<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class employees extends Model
{

    use HasRoles;
    
    protected $table = "employees";

    protected $fillable = [
        'nit', 'name', 'department', 'city', 'address', 'telephone', 'state', 'email', 'password', 'establisment_id'
    ];

    /*
    *Get establisment related to the employee (One to Many - Inverse)
    */
    public function establisment(){
        return $this->belongsTo('App\Models\establisments');
    }

    /*
    *Get sales related to the employee (One to Many)
    */
    public function sales(){
        return $this->hasMany('App\Models\sales');
    }
}
