<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contries extends Model
{
  protected $table ='contry';
  protected $fillable = ['name','address' ,'created_at' ,'updated_at'];
}
