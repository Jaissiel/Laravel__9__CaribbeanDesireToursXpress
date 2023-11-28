<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';
    protected $primaryKey = 'id';
    protected $timestamp = true;


    // Is totally necesary for execute the insert
    protected $fillable = [ 'name',
                            'corporate_name',
                            'description',
                            'telephone',
                            'cell_phone',
                            'web_page',
                            'email_1',
                            'email_2',
                            'contact_name_1',
                            'contact_name_2',
                            'address',
                            'path_image_logo',
                            'slogan',
                            'commentaries' ];

    protected $visible = [ 'name',
                            'corporate_name',
                            'description',
                            'telephone',
                            'cell_phone',
                            'web_page',
                            'email_1',
                            'email_2',
                            'contact_name_1',
                            'contact_name_2',
                            'address',
                            'path_image_logo',
                            'slogan',
                            'commentaries' ];


                            

}
