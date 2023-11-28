<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'name',
                            'enjoyer',
                            'email',
                            'passswword',
                            'active' ];

    protected $visible = [ 'name',
                            'enjoyer',
                            'email',
                            'passswword',
                            'active'    ];

}
