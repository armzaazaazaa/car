<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Fsct extends Model
{
    protected $table = 'users';
    protected $fillable = ["origin_country","manufacturer","model_name","year","seat","type"];
}