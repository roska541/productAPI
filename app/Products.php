<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'size', 'color','brand', 'created_at', 'updated_At'
    ];

    public function user_product()
    {
        return $this->hasOne('App\UserProduct');
    }
}
