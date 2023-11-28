<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $primaryKey = 'id';
    protected $timestamp = true;


    // Is totally necesary for execute the insert
    protected $fillable = ['description'];

    protected $visible = ['description'];
}
