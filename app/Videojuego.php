<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    protected $table='videojuegos';
    protected $fillable=['titulo', 'autor', 'descripcion', 'link', 'imagen'];
}
