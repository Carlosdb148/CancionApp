<?php

namespace App\Models;//paquete

use Illuminate\Database\Eloquent\Factories\HasFactory;//imports
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory; //trait
    
    
    //tabla del modelo: bikes
    //protected $table = 'bike';
    
    //no se usan marcas de tiempo
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    

}