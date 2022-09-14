<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable =[

        'id',
        'name',
        'description',
        'price',
        'view_count',
        'inventory_level'

        
            ];

}
