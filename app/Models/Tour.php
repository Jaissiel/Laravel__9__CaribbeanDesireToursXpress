<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $primaryKey = 'id';
    protected $timestamp = true;


    // Is totally necesary for execute the insert
    protected $fillable = ['titulo',
                            'semblanza',
                            'descripcion',
                            'itinerario',
                            'incluye',
                            'no_incluye',
                            'precio_adulto',
                            'precio_infante',
                            'sugerencias',
                            'informacion_adicional',
                            'transportacion',
                            'activo',
                            'paqueteable',
                            'observaciones',
                            'types_id',
                            'providers_id',
                            'locations_id',
                            'image_path',
                            'image_path1',
                            'image_path2',
                            'image_path3',
                            'image_path4',
                            'image_path5',
                            'image_path6',
                            'title',
                            'semblance',
                            'description',
                            'itinerary',
                            'includes',
                            'without_include',
                            'adult_price',
                            'infants_price',
                            'suggestions',
                            'additional_info',
                            'trasnportation',
                            'observations'];

    
    protected $visible = ['titulo',
                            'semblanza',
                            'descripcion',
                            'itinerario',
                            'incluye',
                            'no_incluye',
                            'precio_adulto',
                            'precio_infante',
                            'sugerencias',
                            'informacion_adicional',
                            'transportacion',
                            'activo',
                            'paqueteable',
                            'observaciones',
                            'types_id',
                            'providers_id',
                            'locations_id',
                            'image_path',
                            'image_path1',
                            'image_path2',
                            'image_path3',
                            'image_path4',
                            'image_path5',
                            'image_path6',
                            'title',
                            'semblance',
                            'description',
                            'itinerary',
                            'includes',
                            'without_include',
                            'adult_price',
                            'infants_price',
                            'suggestions',
                            'additional_info',
                            'trasnportation',
                            'observations'];




}
