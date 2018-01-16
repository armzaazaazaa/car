<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rate_transport';
    protected $fillable = ["weighi", "price"];
}