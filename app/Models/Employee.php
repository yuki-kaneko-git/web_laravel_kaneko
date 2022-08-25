<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'employee';
    protected $fillable = ['employee_id', 'family_name', 'first_name', 'section_id', 'mail', 'gender_id'];
    
}
