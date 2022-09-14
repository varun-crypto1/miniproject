<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable =[

        'id',
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'city',
        'state',
        'zip'
            ];

}
