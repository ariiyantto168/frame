<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestproducts extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'best_products';
    protected $primaryKey = 'idbestproducts';

    protected $fillable = [
        'slug','name','images_best','description',
    ];
}
