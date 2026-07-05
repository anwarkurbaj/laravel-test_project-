<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
class Flight extends Model
{
    use HasFactory;
    protected $table = 'table_flights';
    protected $fillable = ['name','created_at'];
}
*/




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'table_flights';
    protected $fillable = ['name'];
}
