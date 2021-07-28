<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    //protected $table = 'feedback';
   
//protected $gaurded =[];
protected $fillable = [
        'name','email','first_visit','visit_reason','gotInfo','required_info','suggestions'
    ];
}
