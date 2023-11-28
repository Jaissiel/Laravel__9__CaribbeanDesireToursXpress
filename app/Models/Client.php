<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'name',
                            'last_name',
                            'email_1',
                            'email_2',
                            'mail_active',
                            'city',
                            'state',
                            'nation',
                            'phone_1',
                            'whatsapp_active',
                            'remarks',
                            'reservation_agreement'];

    protected $visible = [  'id',
                            'name',
                            'last_name',
                            'email_1',
                            'email_2',
                            'mail_active',
                            'city',
                            'state',
                            'nation',
                            'phone_1',
                            'whatsapp_active',
                            'remarks',
                            'reservation_agreement',
                            'created_at'];

}
