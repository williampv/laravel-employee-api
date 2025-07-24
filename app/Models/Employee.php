<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'employeeId';
    protected $fillable = ['firstName', 'lastName', 'email', 'contactNo', 'city', 'address']; 
}
