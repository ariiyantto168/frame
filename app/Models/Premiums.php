<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Premiums extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'premiums';
    protected $primaryKey = 'idpremiums';

    protected $fillable = [
        'slug','name','description',
    ];
}
