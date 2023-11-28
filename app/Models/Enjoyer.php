<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enjoyer extends Model
{
    use HasFactory;

    
    protected $table = 'enjoyers';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'name',
                            'enjoyer',
                            'email',
                            'passswword',
                            'active', 
                            'observations'];

    protected $visible = [ 'name',
                            'enjoyer',
                            'email',
                            'passswword',
                            'active', 
                            'observations'];



}
