<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = ['key_reservation',
                            'tours_id', 
                            'clients_id',
                            'status_id',
                            'reservation_date',
                            'total_adults',
                            'total_kids',
                            'number_adults',
                            'number_kids',
                            'cost',
                            'iva',
                            'total',
                            'remarks'];

    protected $visible = ['key_reservation',
                            'tours_id', 
                            'clients_id',
                            'status_id',
                            'reservation_date',
                            'total_adults',
                            'total_kids',
                            'number_adults',
                            'number_kids',
                            'cost',
                            'iva',
                            'total',
                            'remarks'];
}





