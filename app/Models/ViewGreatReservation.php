<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewGreatReservation extends Model
{
    use HasFactory;
    protected $table = 'view_great_reservation';
    protected $visible = [  'id',
                            'key_reservation',
                            'status_id',
                            'description',
                            'reservation_date',
                            'number_adults',
                            'total_adults',
                            'number_kids',
                            'total_kids',
                            'cost',
                            'iva',
                            'total',
                            'remarks',
                            'clients_id',
                            'name',
                            'last_name',
                            'second_last_name',
                            'email_1',
                            'phone_1',
                            'reservation_agreement',
                            'tours_id',
                            'titulo',
                            'semblanza'
                        ];
}



