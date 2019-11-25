<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'customers';
    protected $primaryKey = 'idcustomer';

    protected $fillable = [
        'name','posisi','description',
    ];
}
