<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'products';
    protected $primaryKey = 'idproducts';
    protected $fillable = [
        'name','size','weight','color','type','slug','description'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories','productdetail','idproducts','idcategories');
    }

    public function images()
    {
        return $this->hasOne('App\Models\Images','idproducts');
    }
}
