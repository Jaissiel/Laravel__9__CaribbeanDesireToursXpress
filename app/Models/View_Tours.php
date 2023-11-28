<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View_Tours extends Model
{
    use HasFactory;

    protected $table = 'view_tours';
    protected $visible = ['id','title','description','price','image_path','providers_id','providers_description'];
}
